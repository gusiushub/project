<?php
/**
 * Created by PhpStorm.
 * User: zolow
 * Date: 01.04.2018
 * Time: 23:52
 */

class file_config
{
    public function size()
    {

    }

    public static function format()
    {
        return $formats = array("gif", "txt", "tpl", "jpg", "jpeg", "png", "zip", "rar", "7z", "tif", "psd", "swf", "flv", "avi", "mpeg", "mp4", "mp3", "wav", "ogg", "ogm", "doc", "xls", "ppt");
    }

    public static function name($file)
    {
        $type = strtolower(substr($_FILES[$file]["name"], 1 + strrpos($_FILES[$file]["name"], ".")));

        return "file-" . time() . "." . $type;
    }
}