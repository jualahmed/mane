<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Labors extends CI_Controller {

	public $data = [];

	public function index($value='')
	{
		$this->data['users'] = $this->ion_auth->users()->result();
		$this->__randerview('admin/labors/index',$this->data);
	}

	public function create()
	{
		$this->data['title'] = $this->lang->line('create_user_heading');

		// if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		// {
		// 	redirect('auth', 'refresh');
		// }

		$tables = $this->config->item('tables', 'ion_auth');
		$identity_column = $this->config->item('identity', 'ion_auth');
		$this->data['identity_column'] = $identity_column;

		// validate form input
		$this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('company', 'company', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');

		if ($this->form_validation->run() === TRUE)
		{
			$email = strtolower($this->input->post('email'));
			$identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
			$password = $this->input->post('password');

			$object = [
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'company' => $this->input->post('company'),
				'phone' => $this->input->post('phone'),
			];
		}
		if ($this->form_validation->run() === TRUE)
		{
			$this->db->insert('users', $object);

			$this->session->set_flashdata('message', $this->ion_auth->messages());
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