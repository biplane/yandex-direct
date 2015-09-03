<?php

namespace Biplane\SysV;

/**
 * Value object of message.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
final class Message
{
    private $data;
    private $type;

    /**
     * Constructor.
     *
     * @param mixed $data The message data
     * @param int   $type The message type
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($data, $type)
    {
        if ($type < 1) {
            throw new \InvalidArgumentException(sprintf('Number of type (%d) cannot be less than 1.', $type));
        }

        $this->data = $data;
        $this->type = (int)$type;
    }

    /**
     * Gets a data.
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Gets a type.
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }
}
