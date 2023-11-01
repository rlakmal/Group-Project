<?php

class Workerprofview extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        // echo "this is a about controller";
        $this->view('employer/workerprof');
    }

}