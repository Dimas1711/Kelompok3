<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function dashboard()
	{
        $this->load->view("template/header");
        $this->load->view("template/admin");
        $this->load->view("template/footer");
	}
}