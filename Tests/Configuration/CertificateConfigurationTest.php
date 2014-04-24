<?php

namespace Biplane\YandexDirectBundle\Tests\Configuration;

use Biplane\YandexDirectBundle\Configuration\CertificateConfiguration;

/**
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class CertificateConfigurationTest extends \PHPUnit_Framework_TestCase
{
    public function testCertFileShouldBeSet()
    {
        $config = new CertificateConfiguration(array(
            'cert_file' => __FILE__,
        ));

        $this->assertEquals(__FILE__, $config->getHttpsCertificate());
        $this->assertEmpty($config->getPassphrase());
        $this->assertEquals(CertificateConfiguration::LOCALE_EN, $config->getLocale());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenCertFileIsNotReadable()
    {
        new CertificateConfiguration(array(
            'cert_file' => 'bad_path_to_file',
        ));
    }

    public function testHashCodeShouldBeGenerated()
    {
        $config = new CertificateConfiguration(array(
            'cert_file' => __FILE__,
        ));

        $this->assertEquals(md5(__FILE__), $config->getHashCode());
    }
}
