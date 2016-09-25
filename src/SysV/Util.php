<?php

namespace Biplane\SysV;

/**
 * Util
 *
 * @author Denis Vasilev
 */
final class Util
{
    /**
     * Generates a key for the System V components.
     *
     * @param string $pathname  The target file path
     * @param string $projectId A symbol of project ID
     *
     * @return int
     *
     * @throws \InvalidArgumentException When file with $pathname does not exist
     * @throws \InvalidArgumentException When invalid project identifier
     */
    public static function generateKey($pathname = null, $projectId = 'b')
    {
        $pathname = $pathname ?: __FILE__;

        if (!is_file($pathname)) {
            throw new \InvalidArgumentException(sprintf('File "%s" does not exists.', $pathname));
        }

        if (strlen($projectId) != 1) {
            throw new \InvalidArgumentException(
                sprintf('Project identifier "%s" must be a one character string.', $projectId)
            );
        }

        return ftok($pathname, $projectId);
    }
}
