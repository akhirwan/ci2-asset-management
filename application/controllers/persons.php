<?php
class Persons extends CI_Controller{
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
            'title'				=>'Users Management',
            'active_persons'	=>'active',
            'person_kd'			=>$this->model_app->getKodePersons(),
            //'person_data'		=>$this->model_app->getAllData('persons'),
            'person_data'		=>$this->model_app->getAllDataPersons(),
            'person_active'		=>$this->model_app->getActiveDataPersons(),
            'person_inactive'	=>$this->model_app->getInactiveDataPersons(),
            'dept_data'			=>$this->model_app->getAllData('departments'),
            'lvl_data'			=>$this->model_app->getAllData('levels'),
            'config'			=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('persons/v_persons');
        $this->load->view('element/v_footer');
    }

    function profile(){
		$id= $this->uri->segment(3);
        $data=array(
            'title'				=>'Profile',
            'active_persons'	=>'active',
            'person_data'		=>$this->model_app->getProfile(),
            'asset_user_data'	=>$this->model_app->getUserDataAssets(),
            'dept_data'			=>$this->model_app->getAllData('departments'),
            'lvl_data'			=>$this->model_app->getAllData('levels'),
            'config'			=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('persons/profile');
        $this->load->view('element/v_footer');
    }

//
//    ===================== INSERT =====================
   function add_person(){
        $data=array(
            'title'				=>'Users Management :: Add User',
            'active_persons'	=>'active',
            'person_kd'			=>$this->model_app->getKodePersons(),
            //'person_data'		=>$this->model_app->getAllData('persons'),
            'person_data'		=>$this->model_app->getAllDataPersons(),
            'dept_data'			=>$this->model_app->getAllData('departments'),
            'lvl_data'			=>$this->model_app->getAllData('levels'),
            //'person_data_id'	=>$this->model_app->getDataPersons($id),
            'config'			=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('persons/add_person');
        $this->load->view('element/v_footer');
   }

   function insert_person(){
        $data=array(
            'person_id'	=>$this->input->post('person_id'),
            'nik'		=>$this->input->post('nik'),
            'user_name'	=>$this->input->post('user_name'),
			//'pwd'		=>$this->encrypt->encode(md5($this->input->post('pwd')),$key),
			'pwd'		=>md5($this->input->post('pwd')),
            'full_name'	=>$this->input->post('full_name'),
            'email'		=>$this->input->post('email'),
            'dept_id'	=>$this->input->post('dept_id'),
            'lvl_id'	=>$this->input->post('lvl_id'),
        );
        $this->model_app->insertData('persons',$data);
        redirect("persons");
    }


//    ======================== EDIT =======================
    function edit_profile(){
        $id= $this->uri->segment(3);
        $data=array(
            'title'				=>'Profile',
            'active_persons'	=>'active',
            'person_data'		=>$this->model_app->getProfile(),
            'asset_user_data'	=>$this->model_app->getUserDataAssets(),
            'dept_data'			=>$this->model_app->getAllData('departments'),
            'lvl_data'			=>$this->model_app->getAllData('levels'),
            'config'			=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('persons/edit_profile');
        $this->load->view('element/v_footer');
    }
	
    function update_profile(){
        $id['person_id'] = $this->input->post('person_id');
		//Password has been changed OR first time password set
		if($this->input->post('pwd')!='')
		{
			$data=array(
				'nik'		=>$this->input->post('nik'),
				'user_name'	=>$this->input->post('user_name'),
				'pwd'		=>md5($this->input->post('pwd')),
				'full_name'	=>$this->input->post('full_name'),
				'email'		=>$this->input->post('email'),
				'dept_id'	=>$this->input->post('dept_id'),
				'lvl_id'	=>$this->input->post('lvl_id'),
			);
		}
		else //Password not changed
		{
			$data=array(
				'nik'		=>$this->input->post('nik'),
				'user_name'	=>$this->input->post('user_name'),
				'full_name'	=>$this->input->post('full_name'),
				'email'		=>$this->input->post('email'),
				'dept_id'	=>$this->input->post('dept_id'),
				'lvl_id'	=>$this->input->post('lvl_id'),
			);
		}
        /*$data=array(
            'nik'		=>$this->input->post('nik'),
            'user_name'	=>$this->input->post('user_name'),
			'pwd'		=>md5($this->input->post('pwd')),
            'full_name'	=>$this->input->post('full_name'),
            'pwd' 		=>$this->input->post('pwd'),
            'email'		=>$this->input->post('email'),
            'dept_id'	=>$this->input->post('dept_id'),
            'lvl_id'	=>$this->input->post('lvl_id'),
        );*/
        $this->model_app->updateData('persons',$data,$id);
        redirect("persons/profile");
    }
	
    function edit_person(){
        $id= $this->uri->segment(3);
        $data=array(
            'title'				=>'Users Management :: Edit User',
            'active_persons'	=>'active',
            'person_kd'			=>$this->model_app->getKodePersons(),
            //'person_data'		=>$this->model_app->getAllData('persons'),
            'person_data'		=>$this->model_app->getAllDataPersons(),
            'dept_data'			=>$this->model_app->getAllData('departments'),
            'lvl_data'			=>$this->model_app->getAllData('levels'),
            'person_data_id'	=>$this->model_app->getDataPersons($id),
            'config'			=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('persons/edit_person');
        $this->load->view('element/v_footer');
    }
	
    function update_person(){
        $id['person_id'] = $this->input->post('person_id');
		//Password has been changed OR first time password set
		if($this->input->post('pwd')!='')
		{
			$data=array(
				'nik'		=>$this->input->post('nik'),
				'user_name'	=>$this->input->post('user_name'),
				'pwd'		=>md5($this->input->post('pwd')),
				'full_name'	=>$this->input->post('full_name'),
				'email'		=>$this->input->post('email'),
				'dept_id'	=>$this->input->post('dept_id'),
				'lvl_id'	=>$this->input->post('lvl_id'),
			);
		}
		else //Password not changed
		{
			$data=array(
				'nik'		=>$this->input->post('nik'),
				'user_name'	=>$this->input->post('user_name'),
				'full_name'	=>$this->input->post('full_name'),
				'email'		=>$this->input->post('email'),
				'dept_id'	=>$this->input->post('dept_id'),
				'lvl_id'	=>$this->input->post('lvl_id'),
			);
		}
        /*$data=array(
            'nik'		=>$this->input->post('nik'),
            'user_name'	=>$this->input->post('user_name'),
			'pwd'		=>md5($this->input->post('pwd')),
            'full_name'	=>$this->input->post('full_name'),
            'pwd' 		=>$this->input->post('pwd'),
            'email'		=>$this->input->post('email'),
            'dept_id'	=>$this->input->post('dept_id'),
            'lvl_id'	=>$this->input->post('lvl_id'),
        );*/
        $this->model_app->updateData('persons',$data,$id);
        redirect("persons");
    }
	
//    ========================== DELETE =======================
    /*function del_person(){
        $id['person_id'] = $this->uri->segment(3);
        $this->model_app->deleteData('persons',$id);
        redirect("persons");
    }*/
	
    function del_person(){
        $id['person_id'] = $this->uri->segment(3);
		$data=array(
			'inactive'		=> 1,
			);
        $this->model_app->updateData('persons',$data,$id);
        redirect("persons");
    }
}


