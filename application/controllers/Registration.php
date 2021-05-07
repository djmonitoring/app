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
        $this->load->view('header');
        $this->load->view('registration_form');
        $this->load->view('footer');
    }


    public function reg()
    {

        $this->form_validation->set_rules('lastname','last name','trim|required|min_length[5]|max_length[30]');
        $this->form_validation->set_rules('firstname','first name','trim|required|min_length[5]|max_length[30]');
        $this->form_validation->set_rules('initial','Middle initial','trim|required|min_length[1]|max_length[2]');
        $this->form_validation->set_rules('birthday','birthday','trim|required|min_length[8]|max_length[20]');
        $this->form_validation->set_rules('age','age','trim|required|min_length[1]|max_length[3]');
        $this->form_validation->set_rules('address','address','trim|required|min_length[5]|max_length[50]');

        if($this->form_validation->run()==FALSE){
            $this->index();
        }else {
            $lastname = $this->input->post("lastname");
            $firstname = $this->input->post("firstname");
            $initial = $this->input->post("initial");
            $birthday= $this->input->post("birthday");
            $age = $this->input->post("age");
            $address = $this->input->post("address");

        
            $isDone= $this->registration->getRegister($lastname, $firstname, $initial, $birthday, $age, $address);
    
        if($isDone === TRUE){
            $this->load->view('welcome_message');
        }
    
    

        }
    }

}
