<?php

// application/controllers/Company.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

    public function load_common_views($view_name, $data) {

        // load the header template
        $this->load->view('templates/header', $data);

        // load the topbar template
        $this->load->view('templates/topbar');

        // load the navbar template
        $this->load->view('templates/navbar');

        // load the view for the requested page
        $this->load->view($view_name, $data);

        // load the footer template
        $this->load->view('templates/footer');

        // load the script template
        $this->load->view('templates/script');
    }

    public function index() {
        // load the Company_model
        $this->load->model('Company_model');

        // get the company data
        $data['company_data'] = $this->Company_model->get_company_data();

        // set the title for the page
        $data['title'] = 'Home page';

        // load common views
        $this->load_common_views('index', $data);
    }

    public function about() {
        // load the Company_model
        $this->load->model('Company_model');
    
        // get the company data
        $data['company_data'] = $this->Company_model->get_company_data();
    
        // get the company team data
        $company_id = isset($data['company_data']['company_id']) ? $data['company_data']['company_id'] : 1; // get the company ID from the company data
        $data['company_team'] = $this->Company_model->get_company_team($company_id);
    
        // set the title for the page
        $data['title'] = 'About us';
    
        // load common views
        $this->load_common_views('about', $data);
    }
    

    public function services($id = 1)
    {
    // load the Company_model
    $this->load->model('Company_model');

    // get the company data
    $data['company_data'] = $this->Company_model->get_company_data();

    // get the company services
    $data['services'] = $this->Company_model->get_company_services($id);

    $data['title'] = 'Services';

    // load common views
    $this->load_common_views('services', $data);
    }

    
}


