<?php

class SignIn extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $user = new User;

        // echo "this is a about controller";
        
        if (isset($_POST['signIn'])) {
            show($_POST);
            redirect('employer/home');

        }


        if (isset($_POST['signUp'])) {

            if ($user->validate($_POST)) {

                // show($_POST);

                unset($_POST['re-password']);
                unset($_POST['signUp']);

                $user->insert($_POST);
                header("Location:" .ROOT.'/home');
            }
        }
        
        
        $data['errors'] = $user->errors;

        $this->view('signin', $data);
    }
}