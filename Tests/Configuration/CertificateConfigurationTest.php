<?php

namespace Biplane\YandexDirectBundle\Tests\Configuration;

use Biplane\YandexDirectBundle\Configuration\CertificateConfiguration;

/**
 * CertificateConfigurationTest
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class CertificateConfigurationTest extends \PHPUnit_Framework_TestCase
{
    private $certFile;

    protected function setUp()
    {
        $this->certFile = realpath(__DIR__ . '/Fixtures/cert.pem');
    }

    public function testConstructorAndGetters()
    {
        $configuration = new CertificateConfiguration($this->certFile, 'passphrase');

        $this->assertEquals($this->certFile, $configuration->getHttpsCertificate());
        $this->assertEquals('passphrase', $configuration->getPassphrase());
    }

    public function testExceptionIsRaisedWhenInvalidLocalCert()
    {
        $this->setExpectedException('InvalidArgumentException');

        new CertificateConfiguration('/invalid/path/to/file');
    }
}
