<?php

namespace Biplane\Build\Wsdl2Php;

final class ClassNameUtil
{
    /**
     * Resolves Qualified Class Name for the current namespace.
     *
     * @param string $className The FQCN or QCN
     * @param string $namespace The current namespace
     *
     * @return string
     */
    public static function qualifiedClassName($className, $namespace)
    {
        if (empty($className)) {
            throw new \InvalidArgumentException('Class name cannot be empty.');
        }

        if (empty($namespace)) {
            throw new \InvalidArgumentException('Current namespace cannot be empty.');
        }

        $className = trim($className, '\\');
        $len = strlen($namespace);

        if (strlen($className) > $len && ($namespace . '\\') === substr($className, 0, $len + 1)) {
            return substr($className, $len + 1);
        }

        return $className;
    }

    public static function unqualifiedClassName($className)
    {
        if (false !== $pos = strrpos($className, '\\')) {
            return substr($className, $pos + 1);
        }

        return $className;
    }
}
