<?php

namespace Biplane\YandexDirectBundle\Tests\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Biplane\YandexDirectBundle\DependencyInjection\BiplaneYandexDirectExtension;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class BiplaneYandexDirectExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigLoad()
    {
        $container = new ContainerBuilder();
        $loader = new BiplaneYandexDirectExtension();

        $loader->load(array(
            array(
                'default_profile' => 'foo',
                'profiles' => array(
                    'foo' => array(
                        'type' => 'soap',
                        'cert' => array('local_cert' => 'path/to/local_cert'),
                        'locale' => 'ru'
                    ),
                    'bar' => array(
                        'type' => 'soap',
                        'token' => array(
                            'login' => 'yandex_login',
                            'token' => 'TOKEN',
                            'application_id' => 'APPLICATION-ID'
                        )
                    )
                )
            )
        ), $container);

        $this->assertTrue($container->hasDefinition('biplane_yandex_direct.api.factory'));
        $this->assertTrue($container->hasDefinition('biplane_yandex_direct.profile.manager'));
        $this->assertTrue($container->hasDefinition('biplane_yandex_direct.client.factory'));
        $this->assertEquals('foo', $container->getDefinition('biplane_yandex_direct.api.factory')->getArgument(2));

        $profiles = $container->getDefinition('biplane_yandex_direct.profile.manager')->getArgument(0);

        $this->assertArrayHasKey('foo', $profiles);
        $this->assertArrayHasKey('bar', $profiles);

        $configDef = new Definition();
        $configDef
            ->setPublic(false)
            ->setClass('Biplane\\YandexDirectBundle\\Configuration\\CertificateConfiguration')
            ->addArgument('path/to/local_cert');

        $this->assertEquals(array('soap', $configDef), $profiles['foo']->getArguments());

        $configDef = new Definition();
        $configDef
            ->setPublic(false)
            ->setClass('Biplane\\YandexDirectBundle\\Configuration\\AuthTokenConfiguration')
            ->addArgument('yandex_login')
            ->addArgument('APPLICATION-ID')
            ->addArgument('TOKEN');

        $this->assertEquals(array('soap', $configDef), $profiles['bar']->getArguments());
    }
}