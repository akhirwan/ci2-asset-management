<?php
class Assets extends CI_Controller{
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
            'title'			=>'IT Assets',
            'active_assets'	=>'active',
            'asset_kd'		=>$this->model_app->getKodeAssets(),
            'asset_data'	=>$this->model_app->getAllDataAssets(),
            'cat_data'		=>$this->model_app->getAllData('categories'),
            'area_data'		=>$this->model_app->getAllData('areas'),
            'config'		=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('assets/v_assets');
        $this->load->view('element/v_footer');
    }

    function asset_by_user(){
        $id= $this->uri->segment(3);
        $data=array(
            'title'				=>'IT Assets',
            'active_assets'		=>'active',
            'asset_kd'			=>$this->model_app->getKodeAssets(),
            'asset_data'		=>$this->model_app->getAllDataAssets(),
            'asset_user_data'	=>$this->model_app->getUserDataAssets(),
            'cat_data'			=>$this->model_app->getAllData('categories'),
            'area_data'			=>$this->model_app->getAllData('areas'),
            'config'			=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('assets/v_asset_user');
        $this->load->view('element/v_footer');
    }

//
//    ===================== INSERT =====================
    function add_asset(){
        $data=array(
            'title'			=>'IT Assets :: Add',
            'active_assets'	=>'active',
            'asset_kd'		=>$this->model_app->getKodeAssets(),
            'asset_data'	=>$this->model_app->getAllData('assets'),
            'user_data'		=>$this->model_app->getAllData('persons'),
            'cat_data'		=>$this->model_app->getAllData('categories'),
            'area_data'		=>$this->model_app->getAllData('areas'),
            'config'		=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('assets/add_asset');
        $this->load->view('element/v_footer');
    }
	
    function insert_asset(){
        $data=array(
            'ast_id'	=> $this->input->post('ast_id'),
            'ast_name'	=> $this->input->post('ast_name'),
            'ast_desc'	=> $this->input->post('ast_desc'),
            'cat_id'	=> $this->input->post('cat_id'),
            'person_id'	=> $this->input->post('person_id'),
            'area_id'	=> $this->input->post('area_id'),
        );
        $this->model_app->insertData('assets',$data);
        redirect("Assets");
    }

    function add_spec(){
        $id= $this->uri->segment(3);
        $data=array(
            'title'			=>'IT Assets :: Add Specification',
            'active_assets'	=>'active',
            'asset_data_id'	=>$this->model_app->getDataAssets($id),
            'cat_data'		=>$this->model_app->getAllData('categories'),
            'area_data'		=>$this->model_app->getAllData('areas'),
            'config'		=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('assets/add_spec');
        $this->load->view('element/v_footer');
    }
	
	function insert_spec(){
		$id= $this->uri->segment(3);
        $data=array(
            'ast_id'	=> $this->input->post('astid'),
            'attr'		=> $this->input->post('attr'),
            'value'		=> $this->input->post('value'),
        );
        $this->model_app->insertData('asset_spec',$data);
        redirect("Assets");
    }
		
	//multiple save
    function insert_spec_batch(){
        /*$data = array(
            'check_kode'=>$this->input->post('check_kode'),
            'startdate'=>$this->input->post('startdate'),
            'open_period'=>$this->input->post('open_period'),
            'close_period'=>$this->input->post('close_period'),
            'status'=>$this->input->post('status'),
            'bg_color'=>$this->input->post('bg_color'),
            'userkode'=>$this->session->userdata('ID'),
        );
        $this->model_app->insertData("checklists",$data);*/
		
			$post = $this->input->post();
            $result = array();
            $total_post = count($post['ast_id']);
			
            foreach($post['astid'] AS $key => $val)
            {
                $result[] = array(
                    'ast_id'  	=> $post['astid'][$key],
                    'attr'  	=> $post['attr'][$key],
                    'value'  	=> $post['value'][$key]
                );
				
			}
			$this->model_app->post_spec($result);

            
            
        redirect('assets');
    }

//    ======================== EDIT =======================
    function edit_asset(){
        $id= $this->uri->segment(3);
        $data=array(
			'title'			=>'IT Assets :: Edit User',
            'active_assets'	=>'active',
            //'asset_data'	=>$this->model_app->getAllData('assets'),
            'asset_data_id'	=>$this->model_app->getDataAssets($id),
            'user_data'		=>$this->model_app->getAllData('persons'),
            'cat_data'		=>$this->model_app->getAllData('categories'),
            'area_data'		=>$this->model_app->getAllData('areas'),
            'config'		=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('assets/edit_asset');
        $this->load->view('element/v_footer');
    }
	
    function update_asset(){
        $id['ast_id'] = $this->input->post('ast_id');
        $data=array(
            'ast_name'	=> $this->input->post('ast_name'),
            'ast_desc'	=> $this->input->post('ast_desc'),
            'cat_id'	=> $this->input->post('cat_id'),
            'person_id'	=> $this->input->post('person_id'),
            'area_id'	=> $this->input->post('area_id'),
        );
        $this->model_app->updateData('assets',$data,$id);
        redirect("Assets");
    }

    function edit_spec(){
        $id= $this->uri->segment(3);
        $data=array(
			'title'			=>'IT Assets :: Detail',
            'active_assets'	=>'active',
            //'asset_data'	=>$this->model_app->getAllData('assets'),
            'asset_data_id'	=>$this->model_app->getDataAssets($id),
            'spec_data_id'	=>$this->model_app->getDataSpec($id),
            'spec_data_by_id'	=>$this->model_app->getDataSpecbyId($id),
            'cat_data'		=>$this->model_app->getAllData('categories'),
            'area_data'		=>$this->model_app->getAllData('areas'),
            'config'		=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('assets/edit_spec');
        $this->load->view('element/v_footer');
    }
	
	function update_spec(){
        $id['ast_id'] = $this->input->post('ast_id');
        $data=array(
            'ast_name'	=> $this->input->post('ast_name'),
            'ast_desc'	=> $this->input->post('ast_desc'),
            'cat_id'	=> $this->input->post('cat_id'),
            'person_id'	=> $this->input->post('person_id'),
            'area_id'	=> $this->input->post('area_id'),
        );
        $this->model_app->updateData('assets',$data,$id);
        redirect("Assets");
    }
	
    //multiple save
    function update_spec_batch(){
        /*$data = array(
            'check_kode'=>$this->input->post('check_kode'),
            'startdate'=>$this->input->post('startdate'),
            'open_period'=>$this->input->post('open_period'),
            'close_period'=>$this->input->post('close_period'),
            'status'=>$this->input->post('status'),
            'bg_color'=>$this->input->post('bg_color'),
            'userkode'=>$this->session->userdata('ID'),
        );
        $this->model_app->insertData("checklists",$data);*/
		
			$post = $this->input->post();
            $result = array();
            $total_post = count($post['ast_id']);
			
            foreach($post['astid'] AS $key => $val)
            {
                $result[] = array(
                    'ast_id'  	=> $post['astid'][$key],
                    'attr'  	=> $post['attr'][$key],
                    'value'  	=> $post['value'][$key]
                );
				
			}
			$this->model_app->post_spec($result);

            
            
        redirect('assets');
    }


//    ======================== DETAIL =======================
    function detail_asset(){
        $id= $this->uri->segment(3);
        $data=array(
			'title'				=>'IT Assets :: Detail',
            'active_assets'	=>'active',
            //'asset_data'		=>$this->model_app->getAllData('assets'),
            'asset_data_id'		=>$this->model_app->getDataAssets($id),
            'spec_data_id'		=>$this->model_app->getDataSpec($id),
            'spec_data_by_id'	=>$this->model_app->getDataSpecbyId($id),
            'asg_data'			=>$this->model_app->getDataAssignmentsbyAsset($id),
            'cat_data'			=>$this->model_app->getAllData('categories'),
            'area_data'			=>$this->model_app->getAllData('areas'),
            'config'			=>$this->model_app->getAllData('config'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('assets/detail_asset');
        $this->load->view('element/v_footer');
    }
	
//    ========================== DELETE =======================
    function del_asset(){
        $id['ast_id'] = $this->uri->segment(3);
        $this->model_app->deleteData('assets',$id);
        redirect("assets");
    }
	
    function del_spec(){
        $id['id'] = $this->uri->segment(3);
        $this->model_app->deleteData('asset_spec',$id);
        redirect("Assets");
    }
	
}

