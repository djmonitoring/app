<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registration_model2 extends CI_Model {

    var $current_db;

    public function __construct() {
        parent::__construct();
        $this->load->database('default');
    }

    public function insert($table, $data) {
        $this->db->insert($table, $data);
        $id = $this->db->insert_id();
        return $id;
    }

    public function fetch_all_data($table, $orderby, $sort) {
        $this->db->select('*');
        $this->db->order_by($orderby, $sort);
        return $this->db->get($table)->result_array();
    }

    public function fetch_data_multiple($table, $field, $find){
        $this->db->select('*');
        $this->db->where($field, $find);
        return $this->db->get($table)->result_array();
    }

    public function fetch_data_single($table, $field, $find){
        $this->db->select('*');
        $this->db->where($field, $find);
        return $this->db->get($table)->row_array();
    }

    public function getRegister($lastname, $firstname, $initial, $birthday, $age, $address)
    {
        $this->db->query("INSERT INTO personal (`lastname`,`firstname`,`initial`,`birthday`,`age`,`address`) VALUES ('$lastname','$firstname','$initial','$birthday','$age','$address')");
        return TRUE;
    }

}