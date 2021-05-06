<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'date'));
        // $this->load->library();
        $this->load->model('registration_model2', 'registration');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('signin');
        $this->load->view('footer');
    }

}