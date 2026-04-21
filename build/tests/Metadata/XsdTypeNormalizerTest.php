<?php

declare(strict_types=1);

namespace Biplane\Tests\Metadata;

use Biplane\Build\Metadata\XsdTypeNormalizer;
use Biplane\Tests\WsdlProvider;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(XsdTypeNormalizer::class)]
final class XsdTypeNormalizerTest extends TestCase
{
    #[Test]
    #[TestWith(['ArrayOfString', 'string'])]
    #[TestWith(['ArrayOfInteger', 'integer'])]
    #[TestWith(['ArrayOfLong', 'long'])]
    public function arrayLikeTypesFromGeneralSchemaShouldBeNormalized(string $typeName, string $expectedTypeName): void
    {
        $metadata = WsdlProvider::getAdsV5();

        $type = $metadata->getTypes()->fetchByNameAndXmlNamespace($typeName, 'http://api.direct.yandex.com/v5/general');

        $normType = (new XsdTypeNormalizer())($type->getXsdType());

        self::assertSame($expectedTypeName, $normType->getName());
        self::assertSame('http://www.w3.org/2001/XMLSchema', $normType->getXmlNamespace());
        self::assertSame('array', $normType->getBaseType());
        self::assertTrue($normType->getMeta()->isList()->unwrapOr(false), 'meta->isList');
        self::assertSame(1, $normType->getMeta()->minOccurs()->unwrapOr(null), 'meta->minOccurs');
        self::assertSame(-1, $normType->getMeta()->maxOccurs()->unwrapOr(null), 'meta->maxOccurs');
    }

    #[Test]
    public function arrayLikeTypeWithAttributeArrayTypeShouldBeNormalized(): void
    {
        $metadata = WsdlProvider::getV4();

        $type = $metadata->getTypes()->fetchFirstByName('ArrayOfCampaignInfo');

        $normType = (new XsdTypeNormalizer())($type->getXsdType());

        self::assertSame('CampaignInfo', $normType->getName());
        self::assertSame('API', $normType->getXmlNamespace());
        self::assertSame('array', $normType->getBaseType());
        self::assertSame([], $normType->getMemberTypes());
        self::assertTrue($normType->getMeta()->isList()->unwrapOr(false), 'meta->isList');
        self::assertSame(0, $normType->getMeta()->minOccurs()->unwrapOr(null), 'meta->minOccurs');
        self::assertSame(-1, $normType->getMeta()->maxOccurs()->unwrapOr(null), 'meta->maxOccurs');
    }
}
