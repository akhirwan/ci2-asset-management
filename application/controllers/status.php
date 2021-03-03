<?php
class Status extends CI_Controller{
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
        $data=array(
            'title'					=>'Assignments :: Status',
            'active_assignments'	=>'active',
            'stat_kd'				=>$this->model_app->getKodeStatus(),
            'stat_data'				=>$this->model_app->getAllData('status'),
            'config'				=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('status/v_status');
        $this->load->view('element/v_footer');
    }

//
//    ===================== INSERT =====================
    function add_stat(){
        $data=array(
            'stat_id'	=>$this->input->post('stat_id'),
            'stat_name'	=>$this->input->post('stat_name'),
        );
        $this->model_app->insertData('status',$data);
        redirect("status");
    }


//    ======================== EDIT =======================
    function edit_stat(){
        $id= $this->uri->segment(3);
        $data=array(
			'title'					=>'Assignments :: Status',
			'active_assignments'	=>'active',
            'stat_data'				=>$this->model_app->getAllData('status'),
            'stat_data_id'			=>$this->model_app->getDataStatus($id),
            'config'				=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('status/edit_status');
        $this->load->view('element/v_footer');
    }
	
    function update_stat(){
        $id['stat_id'] = $this->input->post('stat_id');
        $data=array(
            'stat_name'	=>$this->input->post('stat_name'),
        );
        $this->model_app->updateData('status',$data,$id);
        redirect("status");
    }
	
//    ========================== DELETE =======================
    function del_stat(){
        $id['stat_id'] = $this->uri->segment(3);
        $this->model_app->deleteData('status',$id);
        redirect("status");
    }
}


