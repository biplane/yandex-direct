<?php

namespace Biplane\YandexDirectBundle\Tests\DependencyInjection;

use Biplane\YandexDirectBundle\DependencyInjection\BiplaneYandexDirectExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class BiplaneYandexDirectExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ContainerBuilder;
     */
    private $container;

    /**
     * @var BiplaneYandexDirectExtension;
     */
    private $extension;

    public function testFullConfigLoad()
    {
        $this->load(array(
            'application_id'     => 'app_id',
            'application_secret' => 'secr3t',
            'default_profile'    => 'foo',
            'profiles'           => array(
                'foo' => array(
                    'cert'         => 'path/to/local_cert',
                    'locale'       => 'en',
                    'master_token' => 'MASTER-TOKEN',
                ),
                'bar' => array(
                    'login' => 'yandex_login',
                    'token' => 'ACCESS-TOKEN',
                )
            ),
            'limits'             => array(
                'max_connections' => 7
            )
        ));

        $this->assertDICConstructorArguments(
            $this->container->getDefinition('biplane_yandex_direct.auth'),
            array('app_id', 'secr3t')
        );

        $this->assertDICDefinitionMethodCallAt(
            0,
            $this->container->getDefinition('biplane_yandex_direct.api.factory'),
            'setDefaultProfile',
            array('foo')
        );
        $this->assertDICConstructorArguments(
            $this->container->getDefinition('biplane_yandex_direct.event_listener.total_limits'),
            array(new Reference('biplane_yandex_direct.ipc.factory'), 7)
        );

        $profiles = $this->container->getDefinition('biplane_yandex_direct.config.registry')->getArgument(0);

        $this->assertArrayHasKey('foo', $profiles);
        $this->assertArrayHasKey('bar', $profiles);

        $this->assertDICDefinitionClass($profiles['foo'], 'Biplane\YandexDirectBundle\Configuration\CertificateConfiguration');
        $this->assertDICConstructorArguments($profiles['foo'], array('foo', 'path/to/local_cert'));
        $this->assertDICDefinitionMethodCallAt(0, $profiles['foo'], 'setLocale', array('en'));
        $this->assertDICDefinitionMethodCallAt(1, $profiles['foo'], 'setMasterToken', array('MASTER-TOKEN'));

        $this->assertDICDefinitionClass($profiles['bar'], 'Biplane\YandexDirectBundle\Configuration\AuthTokenConfiguration');
        $this->assertDICConstructorArguments($profiles['bar'], array('yandex_login', 'ACCESS-TOKEN'));
        $this->assertDICDefinitionMethodCallAt(0, $profiles['bar'], 'setLocale', array('ru'));
    }

    public function testEmptyConfigLoad()
    {
        $this->load(array());

        $this->assertTrue($this->container->hasDefinition('biplane_yandex_direct.event_listener.total_limits'));
        $this->assertEquals(
            12,
            $this->container->getDefinition('biplane_yandex_direct.event_listener.total_limits')->getArgument(1)
        );
    }

    public function testDisableConnectionsLimit()
    {
        $this->load(array(
            'limits' => array(
                'max_connections' => null,
            )
        ));

        $this->assertFalse($this->container->hasDefinition('biplane_yandex_direct.event_listener.total_limits'));
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

    private function load(array $config)
    {
        $this->extension->load(
            array(
                'biplane_yandex_direct' => $config
            ),
            $this->container
        );
    }

    private function assertDICDefinitionClass(Definition $definition, $expectedClass)
    {
        $this->assertEquals(
            $expectedClass,
            $definition->getClass(),
            'Expected Class of the DIC Container Service Definition is wrong.'
        );
    }

    private function assertDICConstructorArguments(Definition $definition, $args)
    {
        $message = "Expected and actual DIC Service constructor arguments of definition '" .
            $definition->getClass() .
            "' don't match.";

        $this->assertEquals($args, $definition->getArguments(), $message);
    }

    private function assertDICDefinitionMethodCallAt($pos, Definition $definition, $methodName, array $params = null)
    {
        $calls = $definition->getMethodCalls();
        if (isset($calls[$pos][0])) {
            $this->assertEquals($methodName, $calls[$pos][0], sprintf(
                'Method "%s" is expected to be called at position %d.', $methodName, $pos
            ));

            if ($params !== null) {
                $this->assertEquals($params, $calls[$pos][1], sprintf(
                    'Expected parameters to methods "%s" do not match the actual parameters.', $methodName
                ));
            }
        } else {
            $this->fail(sprintf('Method "%s" is expected to be called at position %d.', $methodName, $pos));
        }
    }
}
