<?php
/**
 * Created by PhpStorm.
 * User: zolow
 * Date: 23.03.2018
 * Time: 21:40
 */

class Controller_Admin
{
    public $Model;
    public $View;

    function __construct()
    {
        $this->Model = new Model_Admin;
        $this->View = new View_Admin;

    }



}