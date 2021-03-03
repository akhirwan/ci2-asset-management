<?php
class Areas extends CI_Controller{
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
            'title'			=>'IT Assets :: Areas',
            'active_assets'	=>'active',
            'area_kd'		=>$this->model_app->getKodeArea(),
            'area_data'		=>$this->model_app->getAllData('areas'),
            'config'		=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('areas/v_areas');
        $this->load->view('element/v_footer');
    }

//
//    ===================== INSERT =====================
    function add_area(){
        $data=array(
            'area_id'	=>$this->input->post('area_id'),
            'area_name'	=>$this->input->post('area_name'),
        );
        $this->model_app->insertData('areas',$data);
        redirect("areas");
    }


//    ======================== EDIT =======================
    function edit_area(){
        $id= $this->uri->segment(3);
        $data=array(
			'title'			=>'IT Assets :: Areas',
            'active_assets'	=>'active',
            'area_data'		=>$this->model_app->getAllData('areas'),
            'area_data_id'	=>$this->model_app->getDataAreas($id),
            'config'		=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('areas/edit_area');
        $this->load->view('element/v_footer');
    }
	
    function update_area(){
        $id['area_id'] = $this->input->post('area_id');
        $data=array(
            'area_name'	=>$this->input->post('area_name'),
        );
        $this->model_app->updateData('areas',$data,$id);
        redirect("areas");
    }
	
//    ========================== DELETE =======================
    function del_area(){
        $id['area_id'] = $this->uri->segment(3);
        $this->model_app->deleteData('areas',$id);
        redirect("areas");
    }
}


