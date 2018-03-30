<?php

class View_Admin
{
     public function render($content, $adminpenal_view, $data = null)
    {
        include 'app/views/'.$adminpenal_view;
    }
}