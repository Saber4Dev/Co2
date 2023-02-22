<?php
// application/controllers/Company.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

    // public function __construct() {
    //     parent::__construct();
    //     $this->load->model('Company_model');

    // }



    public function index()
    {
        // $this->load->model('Company_model');
        // $company_data = $this->Company_model->get_company_data();

        // load the Company_model
          $this->load->model('Company_model');

         // get the company names
        $data['company_data'] = $this->Company_model->get_company_data();
         
         // pass the company names to the view
        //$data['company_names'] = $company_names;

        // load the header template
        $this->load->view('templates/header');
        
        // load the index view and pass the data
        $this->load->view('index', $data);
        
        // load the footer template
        $this->load->view('templates/footer');
       
    }

    public function services($id) {
        $data['services'] = $this->Company_model->get_company_services($id)->result();
        $this->load->view('templates/header');
        $this->load->view('services', $data);
        $this->load->view('templates/footer');
    }



}

