<?php

class Emphome extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {

        $username  = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        if ($username != 'User' && $_SESSION['USER']->status == 'employer') {

            $jobPost = new JobPost;

            // All posted jobs
            $data = $this->getAllJob($jobPost);

            // Post job
            if (isset($_POST['postJob'])) {
                // data validation 

                unset($_POST['postJob']);

                $emp_id = $_SESSION['USER']->id;
                $_POST['emp_id'] = $emp_id;

                // show($_POST);
                $jobPost->insert($_POST);
                redirect('employer/home');
            }

            $this->view('employer/emphome', $data);
        } else {
            redirect('home');
        }
    }

    private function getAllJob($jobPost)
    {
        $result = $jobPost->findAll('id');

        $data['data'] = $result;
        return  $data;
    }
}
