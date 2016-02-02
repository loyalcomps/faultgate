<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faults extends CI_Controller {
    
    public function index() {
        $data = array();
        
        $this->load->model('customer');
        $customer = new Customer();
        $customer->load(1);
        $data['customer'] = $customer;
        
        $this->load->model('fault');
        $fault = new Fault();
        $fault->load(1);
        $data['fault'] = $fault;
        
        $this->load->view('fault', $data);
    }
}