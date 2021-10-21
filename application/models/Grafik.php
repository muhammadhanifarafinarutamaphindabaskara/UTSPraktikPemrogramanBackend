<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Model
{
    public function dataDiagram()
    {
        $query = "SELECT akses, COUNT(*) as total FROM userlogin GROUP BY akses";
        $result = $this->db->query($query)->result();
        return $result;
    }
}
