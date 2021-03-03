<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
        $this->load->model('model_app');
    }

    function index(){
        $data=array(
            'title'				=>'Dashboard',
            'active_dashboard'	=>'active',
            'config'			=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('config/v_dashboard');
        $this->load->view('element/v_footer');
    }

}
