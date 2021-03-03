<?php
class Assignments extends CI_Controller{
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
            'title'					=>'Assignments',
            'active_assignments'	=>'active',
            'asg_kd'				=>$this->model_app->getKodeAssign(),
            'asg_data'				=>$this->model_app->getAllDataAssignments(),
            'stat_data'				=>$this->model_app->getAllData('status'),
            'config'				=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('assignments/v_assignments');
        $this->load->view('element/v_footer');
    }

//
//    ===================== INSERT =====================
    function add_assign(){
        $data=array(
            'title'					=>'Assignments :: Add',
            'active_assignments'	=>'active',
            'asg_kd'				=>$this->model_app->getKodeAssign(),
            'asg_data'				=>$this->model_app->getAllData('assignments'),
            'stat_data'				=>$this->model_app->getAllData('status'),
			'asset_data'			=>$this->model_app->getAllData('assets'),
            'config'				=>$this->model_app->getAllData('config'),
            'today'					=>date('ymd'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('assignments/add_assignment');
        $this->load->view('element/v_footer');
	}
	
    function add_assign_by_asset(){
        $id= $this->uri->segment(3);
        $data=array(
            'title'					=>'Assignments :: Add',
            'active_assignments'	=>'active',
            'asg_kd'				=>$this->model_app->getKodeAssign(),
            'asg_data'				=>$this->model_app->getAllData('assignments'),
            'stat_data'				=>$this->model_app->getAllData('status'),
			'asset_data'			=>$this->model_app->getAllData('assets'),
			'asset_data_id'			=>$this->model_app->getDataAssets($id),
            'config'				=>$this->model_app->getAllData('config'),
            'today'					=>date('ymd'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('assignments/add_assignment_by_asset');
        $this->load->view('element/v_footer');
	}
	
	function insert_assign(){
        $data=array(
            'asg_id'			=>$this->input->post('asg_id'),
            'complaint_date'	=>$this->input->post('complaint_date'),
            'complaints'		=>$this->input->post('complaints'),
            'service_start'		=>$this->input->post('service_start'),
            'service_end'		=>$this->input->post('service_end'),
            'stat_id'			=>$this->input->post('stat_id'),
            'support_by'		=>$this->input->post('support_by'),
            'support_by_last'	=>$this->input->post('support_by_last'),
            'ast_id'			=>$this->input->post('ast_id'),
        );
        $this->model_app->insertData('assignments',$data);
        redirect("assets");
    }


//    ======================== EDIT =======================
    function edit_assign(){
        $id= $this->uri->segment(3);
        $data=array(
			'title'					=>'Assignments :: Update',
            'active_assignments'	=>'active',
            'asg_kd'				=>$this->model_app->getKodeAssign(),
            'asg_data'				=>$this->model_app->getAllData('assignments'),
            'asg_data_id'			=>$this->model_app->getDataAssignments($id),
            'stat_data'				=>$this->model_app->getAllData('status'),
			'asset_data'			=>$this->model_app->getAllData('assets'),
            'config'				=>$this->model_app->getAllData('config'),
            'today'					=>date('ymd'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('assignments/edit_assignment');
        $this->load->view('element/v_footer');
    }
	
    function update_assign(){
        $id['asg_id'] = $this->input->post('asg_id');
        $data=array(
            'complaint_date'	=>$this->input->post('complaint_date'),
            'complaints'		=>$this->input->post('complaints'),
            'service_start'		=>$this->input->post('service_start'),
            'service_end'		=>$this->input->post('service_end'),
            'stat_id'			=>$this->input->post('stat_id'),
            'support_by'		=>$this->input->post('support_by'),
            'support_by_last'	=>$this->input->post('support_by_last'),
            'ast_id'			=>$this->input->post('ast_id'),
        );
        $this->model_app->updateData('assignments',$data,$id);
        redirect("assignments");
    }
	
//    ========================== DELETE =======================
    function del_assign(){
        $id['asg_id'] = $this->uri->segment(3);
        $this->model_app->deleteData('assignments',$id);
        redirect("assignments");
    }
}


