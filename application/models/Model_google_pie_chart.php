<?php

class Model_google_pie_chart extends CI_Model
{
    public function get_data_produk()
    {
        $query = "SELECT COUNT(*) AS total, nama_produk FROM pembelian
                    GROUP BY nama_produk ORDER BY nama_produk DESC";

        $result = $this->db->query($query)->result_array();
        return $result;
    }
}
