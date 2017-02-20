   
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
 {

    public function reg_insert($data)
	 {
		
          $this->db->insert('users',$data);
          redirect('home/reg','refresh');

          
		/*$submited_data= array(
			'u_name'=>$data['users'],
			'passwd'=>$data['passwd'],
			'email'=>$data['email'],
			'mobile'=>$data['mobile'],
			'address'=>$data['address']

			);*/

		//$this->db->insert('users',$submited_data);
		//$data['msg']="data insert successful";
		//$msg="data insert successful"
		/*redirect('home/reg','refresh');*/
		//echo "submitted successfully";

		//print_r($submited_data);
		
	 }

	 public function all_users()
	 {
        $data = $this->db->get('users');
        return $data->result_array();
	 }
         
          public function u_show($id)
	 {
                $rule = array('id'=>$id);
	 	$this->db->select('*');
	 	$this->db->where($rule);
	 	$data = $this->db->get('users');
	 	return $data->row_array(); 
	 }


	 public function edit($id)
	 {
	 	$rule = array('id'=>$id);
	 	$this->db->select('*');
	 	$this->db->where($rule);
	 	$data = $this->db->get('users');
	 	return $data->row_array();  
                
	 } 

	 public function delete($id)
	 {
	 	$rule = array('id'=>$id);
	 	$this->db->where($rule);
	    $this->db->delete('users');
	    redirect('home/all_users','refresh');
	 	//return $data->row_array();
	 }

	 public function update($data)
	 {
	 	$submited_data= array(
			'u_name'=>$data['users'],
			'passwd'=>$data['passwd'],
			'email'=>$data['email'],
			'mobile'=>$data['mobile'],
			'address'=>$data['address']

			);
	 	$id = $data['id'];
	 	$rule = array('id'=>$id);
        $this->db->where($rule);
		$this->db->update('users',$submited_data);
		//$data['msg']="data insert successful";
		//$msg="data insert successful"
		//redirect('home/login','refresh');
                redirect('home/all_users','refresh');
	 }

}
