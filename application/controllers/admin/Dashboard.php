<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('m_db');
		if (akses() != "admin") {
			$this->login_model->user_logout();
		}
		$this->load->model('grafik');
	}

	function index()
	{
		$meta['judul'] = "Dashboard " . ucfirst(akses());
		$this->load->view('tema/header', $meta);
		$this->load->view(akses() . '/dashboard');
		$this->load->view('tema/footer');
	}

	function graf()
	{
		$data["akses"] = $this->grafik->dataDiagram();     //call method siswaPertahun di Model_chart
        $this->load->view('admin/Dashboard', $data);
	}
}
