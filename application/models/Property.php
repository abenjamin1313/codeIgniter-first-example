<?php
class Property extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function get()
    {
        return "4 bedroom 2 story house";
    }

    public function connection_test()
    {
        $this->load->database('default', TRUE);
    }
}