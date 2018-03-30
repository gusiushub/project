<?php


class controller_user extends controller
{
    function __construct()
    {

        $this->view = new view;
    }

    public function action_index()
    {
        $this->model = new model;
        $data = $this->model;
        return $this->view->generate('profile_view.php','template_view.php',$data);
      }

    public function action_signin()
    {
        $this->model = new model;
        $data = $this->model;
        return $this->view->generate('signin_view.php','template_view.php',$data);
    }
    public function action_login()
    {
        $this->model = new model;
        $data = $this->model;
        return $this->view->generate('form_view.php','template_view.php',$data);
    }

    public function action_logout()
    {
        $this->model = new model;
        return $this->model->logout();
    }
    public function action_all()
    {
       $data = new model_user;
        return $this->view->generate('users_view.php','template_view.php',$data);
    }

    public function action_message()
    {
        $data = new model_user;
        return $this->view->generate('message_view.php', 'template_view.php', $data);
    }
}