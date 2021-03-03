<?php
class Levels extends CI_Controller{
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
            'title'				=>'Users Management :: Jabatan',
            'active_persons'	=>'active',
            'lvl_kd'			=>$this->model_app->getKodeLvl(),
            'lvl_data'			=>$this->model_app->getAllData('levels'),
            'lvl_data_id'		=>$this->model_app->getDataLevels($id),
            'config'			=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('levels/v_levels');
        $this->load->view('element/v_footer');
    }

//
//    ===================== INSERT =====================
    function add_lvl(){
        $data=array(
            'lvl_id'	=>$this->input->post('lvl_id'),
            'lvl_name'	=>$this->input->post('lvl_name'),
        );
        $this->model_app->insertData('levels',$data);
        redirect("levels");
    }


//    ======================== EDIT =======================
    function edit_lvl(){
        $id= $this->uri->segment(3);
        $data=array(
			'title'				=>'Users Management :: Jabatan',
			'active_persons'	=>'active',
            'lvl_data'			=>$this->model_app->getAllData('levels'),
            'lvl_data_id'		=>$this->model_app->getDataLevels($id),
            'config'			=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('levels/edit_level');
        $this->load->view('element/v_footer');
    }
	
    function update_lvl(){
        $id['lvl_id'] = $this->input->post('lvl_id');
        $data=array(
            'lvl_name'	=>$this->input->post('lvl_name'),
        );
        $this->model_app->updateData('levels',$data,$id);
        redirect("levels");
    }
	
//    ========================== DELETE =======================
    function del_lvl(){
        $id['lvl_id'] = $this->uri->segment(3);
        $this->model_app->deleteData('levels',$id);
        redirect("levels");
    }
}


