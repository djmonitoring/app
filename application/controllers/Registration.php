<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'date'));
        // $this->load->library();
        $this->load->model('registration_model2', 'registration');
    }

    public function index() {
        $this->load->view('registration_form');
    }

    public function registration_new() {
        $json = array();

        $lastname = "test";
        $data["lastname"] = $lastname;
        $id = $this->registration->insert("personal", $data);
        
        $json["result"] = $id;
        echo json_encode($json);
    }
}