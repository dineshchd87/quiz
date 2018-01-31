<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        
        
    }

    public function index() {
        
        
        
        
        $this->data['view_file'] = 'public/index';

        $this->load->view('public/default', $this->data);
    }

}
