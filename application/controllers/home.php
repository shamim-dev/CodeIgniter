<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{

//--Load Model----------------

	public function __construct()
	{
          parent::__construct();
          $this->load->model('home_model');

    }


//----------------------
	public function index()
	{
		$this->load->view('home_page');
	}

	public function reg()
	{
		$this->load->view('reg_form');
		
	}

	public function all_users()
	{
		 $data['reza']=$this->home_model->all_users();
		 $this->parser->parse('u_view',$data);
		//$this->load->view('reg_form');
		
	}
        
        public function show($id)
	{
                 
		 $data=$this->home_model->u_show($id);
		 $this->parser->parse('u_show',$data);
		//$this->load->view('reg_form');
		
	}



	public function reg_data()
	{
		if($this->input->get_post('submit'))
		{
			//echo "this is reg_data function";

			/*$reg_data['users']=$this->input->get_post('username');
			$reg_data['passwd']=$this->input->get_post('passwd');
			$reg_data['email']=$this->input->get_post('email');
			$reg_data['mobile']=$this->input->get_post('mobile');
			$reg_data['address']=$this->input->get_post('address');*/

			$reg_data= array(
					'u_name'=>$this->input->get_post('username'),
					'passwd'=>$this->input->get_post('passwd'),
					'email'=>$this->input->get_post('email'),
					'mobile'=>$this->input->get_post('mobile'),
					'address'=>$this->input->get_post('address')

					);

			//var_dump($reg_data);
			//$this->home_model->reg_insert($reg_data);
			$this->home_model->reg_insert($reg_data);
		}
			
		else
		{
			echo "something is wrong";
		}
	}

	public function login()
	{
		
		if($this->input->get_post('submit'))
		{
			echo "this is login function";
		}
		else
		{
			echo "something is wrong";
		}
	}

	public function edit($id)
	{
		//echo "user id: ".$id;
		$result = $this->home_model->edit($id);
		 $this->parser->parse('edit',$result);
	
	}
	public function delete($id)
	{
               echo "<script>confim('Are you sure to delete?');</script>";
               
		 $this->home_model->delete($id);
		//echo "user id: ".$id;
	}
        
        

	public function edit_data()
	{
		if($this->input->get_post('submit'))
		{
			//echo "this is reg_data function";

			$reg_data['users']=$this->input->get_post('username');
			$reg_data['passwd']=$this->input->get_post('passwd');
			$reg_data['email']=$this->input->get_post('email');
			$reg_data['mobile']=$this->input->get_post('mobile');
			$reg_data['address']=$this->input->get_post('address');
			$reg_data['id']=$this->input->get_post('id');

			//var_dump($reg_data);
			$this->home_model->update($reg_data);
		}
			
		else
		{
			echo "something is wrong";
		}
	}



}
