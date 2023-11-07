<?php

class AdminCrew extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $username  = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        if ($username != 'User' && $_SESSION['USER']->status == 'admin') {


            $member = new CrewMember;

            if (isset($_POST['memberRegister'])) {

                unset($_POST['memberRegister']);

                $_POST['status'] = 'crew_member';
                $_POST['active'] = 1;

                $password = $_POST['password'];
                $hash = password_hash($password, PASSWORD_BCRYPT);
                $_POST['password'] = $hash;

                // show($_POST);
                $member->insert($_POST);
                redirect('admin/admincrew');
            }

            $result = $member->findAll('id');

            $data['data'] = $result;
            if (!empty($data)) {
                extract($data);
                // show($data);
            }
            if (!empty($data)) {


                foreach ($data as $item) {

                    unset($item->password);
                    unset($item->created);
                    unset($item->status);
                    //  show($item->password);
                }
            }

            if (isset($_POST['member'])) {
                unset($_POST['member']);
                $id = $_POST['id'];

                unset($_POST['id']);
                $this->Updatedetails($member, $id, $_POST);
            }
            
            if (isset($_POST['active'])) {
                unset($_POST['active']);
                // show($_POST);
                $member->delete($_POST['id'],'id');
                redirect('admin/admincrew');
            }

            
            $this->view('admin/admincrew', $data);
        } else {
            redirect('home');
        }
    }
    // update member data
    private function Updatedetails($member, $use_id, $data)
    {
        $member->update($use_id, $data, 'id');
        redirect('admin/admincrew');
    }
}
