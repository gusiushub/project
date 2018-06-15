<?php

class controller_adminpanel extends Controller_Admin
{
    function __construct()
    {
        $this->View = new View_Admin;
    }

    public function action_index()
    {
       return $this->View->render('adminarticle_view.php','adminpanel_view.php');
    }

    public function action_article()
    {
        return $this->View->render('articletable_view.php','adminpanel_view.php');
    }

    public function action_edit()
    {
        return $this->View->render('articleditor_view.php','adminpanel_view.php');
    }
}