<?php

class AdNotification extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $username  = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        if ($username != 'User' && $_SESSION['USER']->status == 'admin') {

            $this->view('admin/adnotification');
        } else {
            redirect('home');
        }
    }
}
