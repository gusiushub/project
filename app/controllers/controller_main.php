<?php
class controller_main extends controller
{
    function __construct()
    {
        $this->model = new model;
        $this->view = new view;
    }

    function action_index()
    {
        $data = $this->model;
        $this->view->generate('main_view.php', 'template_view.php');
    }
    public function action_about()
    {
        $this->view->generate('about_view.php', 'template_view.php');
    }
}