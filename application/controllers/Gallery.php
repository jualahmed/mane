<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
	}

	public function index(){

		$this->db->select("*");
		    $this->db->from("gallery");
		    $this->db->order_by("id", "desc");
		    $query = $this->db->get();
		    $this->data['data'] =  $query->result();
		    $this->__randerview('admin/gallery/index',$this->data);

		
	}

	public function delete($id){
		 $this->db->where('id', $id);
	 $this->db->delete('gallery');

	 $this->session->set_flashdata('message', 'One gallery deleted');
				redirect("gallery/index", 'refresh');
	}

	public function edit_action($id){

		$config['upload_path']          = './assets/images/gallery';
             $config['allowed_types']        = 'gif|jpg|png';
             $this->load->library('upload', $config);

             $this->upload->do_upload('name');
             $upload_data = $this->upload->data(); 
             $file_name = $upload_data['file_name'];

			$object = [
				
				'name' => $file_name,
				
			];

			$this->db->where('id', $id);
			$this->db->update('gallery', $object);
			$this->session->set_flashdata('message', 'Record updated successfully');
			redirect("gallery/index", 'refresh');
	}

	public function edit($id){
		$query = $this->db->get_where('gallery', array('id' => $id));
		$result['data'] = $query->result();

		$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
		$this->__randerview('admin/gallery/edit',$result);
	}


	public function create(){
		$this->__randerview('admin/gallery/create');
	}
	public function create_action(){
	$config['upload_path']          = './assets/images/gallery';
	$config['allowed_types']        = 'gif|jpg|png';
	$this->load->library('upload', $config);

	$this->upload->do_upload('name');
	$upload_data = $this->upload->data(); 
	$file_name = $upload_data['file_name'];

	$object = [
	'name' => $file_name,


	];
	$this->db->insert('gallery', $object);

	$this->session->set_flashdata('message', 'Image uploaded successfully');
	redirect("gallery/index", 'refresh');

	}
}
	?>





















