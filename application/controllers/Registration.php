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

    public function test_update() {
        $json = array();
        
        // Single where
        $field = array(
            "Id" => 1
        );
        // Double where
        $field = array(
            "Id" => 1,
            "lastname" => 'hd1234'
        );


        $data = array(
            "lastname" => 'hd12345'
        );

        $json["result"] = $this->registration->update("personal", $field, $data);

        echo json_encode($json);
    }

    public function test_delete() {
        $json = array();
        
        $field = array(
            "Id" => 1
        );

        $json["result"] = $this->registration->delete("personal", $field);

        echo json_encode($json);
    }

}
