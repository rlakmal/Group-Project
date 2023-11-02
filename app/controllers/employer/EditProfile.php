<?php

class EditProfile extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $username  = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        $user = new User;

        if ($username != 'User' && $_SESSION['USER']->status == 'employer') {

            $use_id = $_SESSION['USER']->id;

            // edit for get Data
            $result =  $this->getProfileData($user, $use_id);

            if (isset($_POST['edit'])) {
                
                unset($_POST['edit']);
                // show($_POST);

                $this->UpdateProfile($user, $use_id,$_POST);
            }

            $this->view('employer/editprofile', $result);
        } else {
            redirect('home');
        }
    }

    // get profile data for bind to the tags
    private function getProfileData($user, $use_id)
    {
        $arr['id'] = $use_id;
        
        $result = $user->first($arr);
        
        $newData['name'] = $result->name;
        $newData['nic'] = $result->nic;
        $newData['city'] = $result->city;
        $newData['address'] = $result->address;
        $newData['dob'] = $result->dob;
        
        $data['newData'] = $newData;
        
        return $data;
    }
    
    // update profile data
    private function UpdateProfile($user, $use_id,$data)
    {
        $user->update($use_id, $data, 'id');
        redirect('employer/profile');

    }
}
