<?php

namespace Biplane\YandexDirectBundle\Encoder;

use Symfony\Component\Serializer\Encoder\JsonEncoder as BaseJsonEncoder;

/**
 * JsonEncoder
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class JsonEncoder extends BaseJsonEncoder
{
    /**
     * Encodes data into a string.
     *
     * @param mixed $data data to encode
     * @param string $format format to encode to
     * @return string
     */
    public function encode($data, $format)
    {
        if ($data === null) {
            return 'null';
        }
        else if (is_array($data)) {
            if (array_keys($data) !== range(0, count($data) - 1)) {
                return $this->toJsonObject($data);
            }

            $elements = array();

            foreach ($data as $value) {
                $elements[] = $this->encode($value, $format);
            }

            return '[' . join(',', $elements) . ']';
        }
        else if (is_object($data)) {
            return $this->toJsonObject(get_object_vars($data));
        }
        else if (is_bool($data)) {
            return $data ? 'true' : 'false';
        }
        else if (is_int($data) || is_float($data)) {
            return (string)$data;
        }

        return '"' . $this->escapeString($data) . '"';
    }


    private function toJsonObject(array $data)
    {
        $elements = array();

        foreach ($data as $key => $value) {
            $elements[] = '"' . $this->escapeString($key) . '":' . $this->encode($value, 'json');
        }

        return '{' . join(',', $elements) . '}';
    }

    private function escapeString($value)
    {
        return preg_replace('/(^|[^\\\])"/', '$1\\"', $value);
    }
}