<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php;

final class ClassNameUtil
{
    public static function fqcn(string $className): string
    {
        if (strpos($className, '\\') > 0) {
            return '\\' . $className;
        }

        return $className;
    }
    /**
     * Resolves Qualified Class Name for the current namespace.
     *
     * @param string $className The FQCN or QCN
     * @param string $namespace The current namespace
     *
     * @return string
     */
    public static function qualifiedClassName(string $className, string $namespace): string
    {
        if ($className === '') {
            throw new \InvalidArgumentException('Class name cannot be empty.');
        }

        if ($namespace === '') {
            throw new \InvalidArgumentException('Current namespace cannot be empty.');
        }

        $className = trim($className, '\\');
        $len = strlen($namespace);

        if (strlen($className) > $len && strpos($className, $namespace . '\\') === 0) {
            return substr($className, $len + 1);
        }

        return $className;
    }

    public static function unqualifiedClassName(string $className): string
    {
        if (false !== $pos = strrpos($className, '\\')) {
            return substr($className, $pos + 1);
        }

        return $className;
    }
}
