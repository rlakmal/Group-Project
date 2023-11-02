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

            // All posted jobs            
            $result =$jobPost->where($arr,'id');
            $data['data'] = $result;

            // job delete
            // show();
            if (isset($_POST['jobDelete'])) {
                $jobId = $_POST['id'];
                // echo $jobId;
                $this->jobDelete($jobId,$jobPost);
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

}