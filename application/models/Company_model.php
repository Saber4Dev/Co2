<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_model{

    public function get_company_data()
    {
    $query = $this->db->get('company');
    return $query->result_array();
    }

    public function get_company_services($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('services');
    }
    
}

