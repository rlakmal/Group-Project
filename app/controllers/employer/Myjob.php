<?php

class Myjob extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        
        $username  = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;
        
        if ($username != 'User') {
            
            $jobPost = new JobPost;
            // $user = new User;

            $emp_id = $_SESSION['USER']->id;
            
            $arr['emp_id'] = $emp_id;
            // All posted jobs
            // show($arr);
            $result =$jobPost->where($arr,'id');

            $data['data'] = $result;
            // show($result);

    
            $this->view('employer/myjob',$data);
            
        }else{
            redirect('home');
        }
    }

}