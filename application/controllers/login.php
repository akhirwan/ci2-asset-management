<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
    }

    function index(){
        $data=array(
            'title'=>'Login Page',
			'config'=>$this->model_app->getAllData('config')
        );
        $this->load->view('config/v_login',$data);
    }

    function cek_login() {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('user_name');
        $password = $this->input->post('pwd');
        //query the database
        $result = $this->model_app->login($username, $password);
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                //create the session
                $sess_array = array(
                    'ID' 			=> $row->person_id,
                    'NIK'	 		=> $row->nik,
                    'USERNAME' 		=> $row->user_name,
                    'PWD'			=> $row->pwd,
                    'FULLNAME'		=> $row->full_name,
                    'EMAIL'	 		=> $row->email,
                    'DEPT'	 		=> $row->dept_id,
                    'LEVEL' 		=> $row->lvl_id,
                    'IN' 			=> $row->inactive,
                    'login_status'	=> true,
                );
                //set session with value from database
                $this->session->set_userdata($sess_array);
                redirect('dashboard','refresh');
            }
            return TRUE;
        } else {
            //if form validate false
            redirect('dashboard','refresh');
            return FALSE;
        }
    }

    function logout() {
        $this->session->unset_userdata('ID');
        $this->session->unset_userdata('NIK');
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('PWD');
        $this->session->unset_userdata('FULLNAME');
        $this->session->unset_userdata('EMAIL');
        $this->session->unset_userdata('DEPT');
        $this->session->unset_userdata('LEVEL');
        $this->session->unset_userdata('login_status');
        $this->session->set_flashdata('notif','THANK YOU FOR LOGIN IN THIS APP');
        redirect('login');
    }
}
