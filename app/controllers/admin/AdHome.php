<?php

class AdHome extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $username  = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;
        
        if ($username != 'User') {
            $this->view('admin/home');
        }else{
            redirect('home');
        }
    }
}
