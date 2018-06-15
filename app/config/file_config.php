<?php

class file_config
{
    public function size()
    {

    }

    public static function format()
    {
        return $formats = require 'format_config.php';
    }

    public static function name($file)
    {
        $type = strtolower(substr($_FILES[$file]["name"], 1 + strrpos($_FILES[$file]["name"], ".")));

        return "file-" . time() . "." . $type;
    }
}