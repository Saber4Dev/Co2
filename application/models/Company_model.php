<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_model{

    //Retreive services data from table table Company
    public function get_company_data()
    {
        $query = $this->db->get('company');
        return $query->result_array();
    }

    //Retreive services data from table table Sevices by company id
    public function get_company_services($company_id)
    {
        $this->db->where('company_id', $company_id);
        $query = $this->db->get('services');
        return $query->result_array();
    }

    //get team data from table team
    public function get_company_team($company_id)
    {
        $this->db->where('company_id', $company_id);
        $query = $this->db->get('team');
        return $query->result_array();
    }



    
}

