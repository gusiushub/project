<?php

class controller_adminpenal extends Controller_Admin
{
    function __construct()
    {
        $this->View = new View_Admin;
    }

    public function action_index()
    {
       return $this->View->render('adminarticle_view.php','adminpenal_view.php');
    }

    public function action_article()
    {
        return $this->View->render('articletable_view.php','adminpenal_view.php');
    }

    public function action_edit()
    {
        return $this->View->render('articleditor_view.php','adminpenal_view.php');
    }
}