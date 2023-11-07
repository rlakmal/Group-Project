<?php

class WorkerRegistration extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $user = new User;

        // // sign up validation
        if (isset($_POST['worker_register'])) {

            //     if ($user->validate($_POST)) {

            unset($_POST['worker_register']);
            unset($_POST['category']);
            unset($_POST['gender']);
            unset($_POST['re-password']);

            $_POST['status'] = 'worker';

            //         $user->insert($_POST);
            //         redirect('home/signin');
            //     }
            // }

            // $data['errors'] = $user->errors;
            // $data['loginData'] = $_POST;

            $password = $_POST['password'];
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $_POST['password'] = $hash;

            // show($_POST);

            $user->insert($_POST);
            // redirect('home/workerreg');
        }
        $this->view('home/workerRegistration');
    }
}
