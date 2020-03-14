<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Labors extends CI_Controller {

	public $data = [];

	public function index($value='')
	{   
		$this->data['users'] = $this->ion_auth->users()->result();
		$this->__randerview('admin/labors/index',$this->data);
	}

	

 public function delete($id){
 	
 $this->db->where('id', $id);
 $this->db->delete('users');

 $this->session->set_flashdata('message', 'Record deleted successfully');
			redirect("labors/index", 'refresh');

}
 


	public function edit_action($id){
		$query = $this->db->get_where('users', array('id' => $id));
		$result['data'] = $query->result();
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('father_name', 'Name of father', 'required');
		$this->form_validation->set_rules('mother_name', 'Name of mother', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('company', 'Company name', 'required');
		$this->form_validation->set_rules('bloodgroup', 'Blood group', 'required');
		$this->form_validation->set_rules('emergency_phone', 'Emergency mobile no', 'required');
		$this->form_validation->set_rules('phone', 'Mobile No', 'required');


		if ($this->form_validation->run() == TRUE)
		{ 
			$data = $this->input->post();

			$object = [
				'first_name' => $data['first_name'],
				'last_name' => $data['last_name'],
				'father_name' => $data['father_name'],
				'mother_name' => $data['mother_name'],
				'email' => $data['email'],
				'company' => $data['company'],
				'bloodgroup' => $data['bloodgroup'],
				'emergency_phone' => $data['emergency_phone'],
				'phone' => $data['phone']
			];

			$this->db->where('id', $id);
			$this->db->update('users', $object);

			$this->session->set_flashdata('message', 'Record updated successfully');
			redirect("labors/index", 'refresh');
		}else{
			$this->__randerview('admin/labors/edit', $result);
		}
	}

	public function edit($id = ''){
		$query = $this->db->get_where('users', array('id' => $id));
		$result['data'] = $query->result();

		$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

		$this->__randerview('admin/labors/edit',$result);
	}

	public function create()
	{
		// validate form input
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('father_name', 'Name of father', 'required');
		$this->form_validation->set_rules('mother_name', 'Name of mother', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('company', 'Company name', 'required');
		$this->form_validation->set_rules('bloodgroup', 'Blood group', 'required');
		$this->form_validation->set_rules('emergency_phone', 'Emergency mobile no', 'required');
		$this->form_validation->set_rules('phone', 'Mobile No', 'required');

		if ($this->form_validation->run() == TRUE)
		{ 

			$data = $this->input->post();


			 $config['upload_path']          = './uploads/';
             $config['allowed_types']        = 'gif|jpg|png';
             $this->load->library('upload', $config);
             $this->upload->do_upload('picture');
             $upload_data = $this->upload->data(); 
             $file_name = $upload_data['file_name'];

			$object = [
				'first_name' => $data['first_name'],
				'last_name' => $data['last_name'],
				'father_name' => $data['father_name'],
				'mother_name' => $data['mother_name'],
				'email' => $data['email'],
				'company' => $data['company'],
				'picture' => $upload_data['file_name'],
				'bloodgroup' => $data['bloodgroup'],
				'emergency_phone' => $data['emergency_phone'],
				'phone' => $data['phone']
			];


			$this->db->insert('users', $object);

			$this->session->set_flashdata('message', 'One Record entered successfully');
			redirect("labors/index", 'refresh');
		}
		else
		{
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->data['first_name'] = [
				'name' => 'first_name',
				'id' => 'first_name',
				'type' => 'text',
				'value' => $this->form_validation->set_value('first_name'),
			];
			$this->data['last_name'] = [
				'name' => 'last_name',
				'id' => 'last_name',
				'type' => 'text',
				'value' => $this->form_validation->set_value('last_name'),
			];
			$this->data['identity'] = [
				'name' => 'identity',
				'id' => 'identity',
				'type' => 'text',
				'value' => $this->form_validation->set_value('identity'),
			];
			$this->data['email'] = [
				'name' => 'email',
				'id' => 'email',
				'type' => 'text',
				'value' => $this->form_validation->set_value('email'),
			];
			$this->data['company'] = [
				'name' => 'company',
				'id' => 'company',
				'type' => 'text',
				'value' => $this->form_validation->set_value('company'),
			];
			$this->data['phone'] = [
				'name' => 'phone',
				'id' => 'phone',
				'type' => 'text',
				'value' => $this->form_validation->set_value('phone'),
			];
		 $this->__randerview('admin/labors/create',$this->data);
		}
	}

}

/* End of file Labors.php */
/* Location: ./application/controllers/Labors.php */