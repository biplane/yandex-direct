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
    /**
     * @var \Symfony\Component\DependencyInjection\ContainerBuilder;
     */
    private $container;

    /**
     * @var \Biplane\YandexDirectBundle\DependencyInjection\BiplaneYandexDirectExtension;
     */
    private $extension;

    public function testFullConfigLoad()
    {
        $this->extension->load(
            array(
                array(
                    'default_profile' => 'foo',
                    'profiles' => array(
                        'foo' => array(
                            'type' => 'soap',
                            'cert' => array('local_cert' => 'path/to/local_cert'),
                            'locale' => 'ru',
                            'master_token' => 'MASTER-TOKEN',
                        ),
                        'bar' => array(
                            'type' => 'soap',
                            'login' => 'yandex_login',
                            'token' => array(
                                'token' => 'TOKEN',
                                'application_id' => 'APPLICATION-ID',
                            )
                        )
                    )
                )
            ),
            $this->container
        );

        $this->assertTrue($this->container->hasDefinition('biplane_yandex_direct.api.factory'));
        $this->assertTrue($this->container->hasDefinition('biplane_yandex_direct.profile.manager'));
        $this->assertTrue($this->container->hasDefinition('biplane_yandex_direct.client.factory'));
        $this->assertEquals(
            array(array('setDefaultProfile', array('foo'))),
            $this->container->getDefinition('biplane_yandex_direct.api.factory')->getMethodCalls()
        );

        $profiles = $this->container->getDefinition('biplane_yandex_direct.profile.manager')->getArgument(0);

        $this->assertArrayHasKey('foo', $profiles);
        $this->assertArrayHasKey('bar', $profiles);

        $configDef = new Definition();
        $configDef
            ->setPublic(false)
            ->setClass('Biplane\\YandexDirectBundle\\Configuration\\CertificateConfiguration')
            ->addArgument('foo')
            ->addArgument('path/to/local_cert')
            ->addMethodCall('setLocale', array('ru'))
            ->addMethodCall('setMasterToken', array('MASTER-TOKEN'));

        $this->assertEquals(array('soap', $configDef), $profiles['foo']->getArguments());

        $configDef = new Definition();
        $configDef
            ->setPublic(false)
            ->setClass('Biplane\\YandexDirectBundle\\Configuration\\AuthTokenConfiguration')
            ->addArgument('yandex_login')
            ->addArgument('APPLICATION-ID')
            ->addArgument('TOKEN')
            ->addMethodCall('setLocale', array('ru'));

        $this->assertEquals(array('soap', $configDef), $profiles['bar']->getArguments());
    }

    public function testEmptyConfigLoad()
    {
        $this->extension->load(array(), $this->container);

        $this->assertFalse($this->container->getDefinition('biplane_yandex_direct.api.factory')->hasMethodCall('setDefaultProfile'));
    }

    protected function setUp()
    {
        $this->container = new ContainerBuilder();
        $this->extension = new BiplaneYandexDirectExtension();
    }

    protected function tearDown()
    {
        unset($this->container, $this->extension);
    }
}