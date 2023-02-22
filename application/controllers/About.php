<?php
// application/controllers/Company.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

    public function index()
    {

    // load the index view and pass the data
    $this->load->view('about');

    }
}