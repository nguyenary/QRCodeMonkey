<?php

namespace nguyenary\QRCodeMonkey\Request;

class Data
{
    /**
     * @param string $data
     * @return array
     * @throws Exception
     */
    public static function jsonToArray(string $data): ?array
    {
        $data = json_decode($data, true);

        if (!is_array($data) && (json_last_error() == JSON_ERROR_NONE)) {
            throw new Exception('Error read data file. Data not be JSON');
        }

        return $data;
    }
}
