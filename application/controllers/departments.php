<?php
class Departments extends CI_Controller{
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
            'title'=>'Users Management :: Departments',
            'active_persons'=>'active',
            'dept_kd'=>$this->model_app->getKodeDept(),
            'dept_data'=>$this->model_app->getAllData('departments'),
            'dept_data_id'	=>$this->model_app->getDataDepartments($id),
            'config'		=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('departments/v_departments');
        $this->load->view('element/v_footer');
    }

//
//    ===================== INSERT =====================
    function add_dept(){
        $data=array(
            'dept_id'	=>$this->input->post('dept_id'),
            'dept_name'	=>$this->input->post('dept_name'),
        );
        $this->model_app->insertData('departments',$data);
        redirect("departments");
    }


//    ======================== EDIT =======================
    function edit_dept(){
        $id= $this->uri->segment(3);
        $data=array(
			'title'			=>'Users Management :: Departments',
            'active_persons'=>'active',
            'dept_data'		=>$this->model_app->getAllData('departments'),
            'dept_data_id'	=>$this->model_app->getDataDepartments($id),
            'config'		=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('departments/edit_department');
        $this->load->view('element/v_footer');
    }
	
    function update_dept(){
        $id['dept_id'] = $this->input->post('dept_id');
        $data=array(
            'dept_name'	=>$this->input->post('dept_name'),
        );
        $this->model_app->updateData('departments',$data,$id);
        redirect("departments");
    }
	
//    ========================== DELETE =======================
    function del_dept(){
        $id['dept_id'] = $this->uri->segment(3);
        $this->model_app->deleteData('departments',$id);
        redirect("departments");
    }
}


