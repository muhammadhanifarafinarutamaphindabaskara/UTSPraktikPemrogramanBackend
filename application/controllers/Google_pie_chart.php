<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Google_pie_chart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_google_pie_chart', 'Mchart');
    }
    public function index()
    {
        $data["title"] = "Membuat Chart dengan Google Pie Chart";
        $data["dataProduk"] = $this->Mchart->get_data_produk();
        $this->load->view("op/dashboard", $data);
    }
}
