<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
    function __construct(){
        parent::__construct();
	// jika ada func auto load       
    }

    function index(){
        $this->load->view('home');
    }

    public function nothing(){
        $this->load->view('nothing');
    }
} 
    
