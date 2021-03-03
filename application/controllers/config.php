<?php
class Config extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
        $this->load->model('model_app');
        $this->load->helper('currency_format_helper');
    }

    function index(){
        $id= $this->uri->segment(3);
        $data=array(
            'title'				=>'Konfigurasi',
            'active_config'		=>'active',
            'config'			=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('config/v_config');
        $this->load->view('element/v_footer');
    }


//    ======================== EDIT =======================
    function update(){
        $id['id'] = 1;
        $data=array(
            'app_name'	=>$this->input->post('app_name'),
            'company'	=>$this->input->post('company'),
            'address'	=>$this->input->post('address'),
            'phone1'	=>$this->input->post('phone1'),
            'phone2'	=>$this->input->post('phone2'),
            'fax'		=>$this->input->post('fax'),
            'email'		=>$this->input->post('email'),
            'url'		=>$this->input->post('url'),
            'about'		=>$this->input->post('about'),
        );
        $this->model_app->updateData('config',$data,$id);
        redirect("Dashboard");
    }

}


