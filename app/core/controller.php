<?php

abstract class controller
{
    public $model;

    public $view;

    public $article;

    function __construct()
    {
        $this->model=new model;

        $this->view = new view;
    }
}