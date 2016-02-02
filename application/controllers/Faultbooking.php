<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faultbooking extends CI_Controller {
    /***
     * Index page for controller Faultbooking
     */
public function index()
	{
		$this->load->view('fault_booking_form');
	}
}