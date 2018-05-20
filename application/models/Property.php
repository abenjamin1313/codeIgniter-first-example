<?php
class Property extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }
    
    public function get()
    {
        return "4 bedroom 2 story house";
    }

    public function get_version()
    {
       $result_set = $this->db->query('SELECT VERSION()');
       return $result_set;
    }

    public function all()
    {
        $result_set = $this->db->get('properties');
        return $result_set->result_array();
    }
}