<?php
class Categories extends CI_Controller{
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
            'title'			=>'IT Assets :: Categories',
            'active_assets'	=>'active',
            'cat_kd'		=>$this->model_app->getKodeCat(),
            'cat_data'		=>$this->model_app->getAllData('categories'),
            'cat_data_id'	=>$this->model_app->getDataCategories($id),
            'config'		=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('categories/v_categories');
        $this->load->view('element/v_footer');
    }

//
//    ===================== INSERT =====================
    function add_cat(){
        $data=array(
            'cat_id'	=>$this->input->post('cat_id'),
            'cat_name'	=>$this->input->post('cat_name'),
        );
        $this->model_app->insertData('categories',$data);
        redirect("Categories");
    }


//    ======================== EDIT =======================
    function edit_cat(){
        $id= $this->uri->segment(3);
        $data=array(
			'title'			=>'IT Assets :: Categories',
            'active_assets'	=>'active',
            'cat_data'		=>$this->model_app->getAllData('categories'),
            'cat_data_id'	=>$this->model_app->getDataCategories($id),
            'config'		=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('categories/edit_category');
        $this->load->view('element/v_footer');
    }
	
    function update_cat(){
        $id['cat_id'] = $this->input->post('cat_id');
        $data=array(
            'cat_name'	=>$this->input->post('cat_name'),
        );
        $this->model_app->updateData('categories',$data,$id);
        redirect("Categories");
    }
	
//    ========================== DELETE =======================
    function del_cat(){
        $id['cat_id'] = $this->uri->segment(3);
        $this->model_app->deleteData('categories',$id);
        redirect("categories");
    }
}


