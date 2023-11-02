<?php

class Myjob extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        
        $username  = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;
        
        if ($username != 'User' && $_SESSION['USER']->status =='employer') {
            
            $jobPost = new JobPost;
            // $user = new User;

            $emp_id = $_SESSION['USER']->id;
            $arr['emp_id'] = $emp_id;

            // employer posted jobs            
            $result =$jobPost->where($arr,'emp_id');
            $data['data'] = $result;

            // show($data);

            // job delete
            if (isset($_POST['jobDelete'])) {
                $jobId = $_POST['id'];
                // echo $jobId;
                $this->jobDelete($jobId,$jobPost);
            }

            show($_POST);
            // job update 
            if (isset($_POST['editPost'])) {

                unset($_POST['editPost']);
                // $this->jobUpdate();
                
            }

            $this->view('employer/myjob',$data);
            
        }else{
            redirect('home');
        }
    }

    // each employer created job delete method
    private function jobDelete($jobId,$jobPost){

        $jobPost->delete($jobId,'id');
        redirect('employer/myjob');

    }

    private function jobUpdate($jobId,$jobPost){

    }

}