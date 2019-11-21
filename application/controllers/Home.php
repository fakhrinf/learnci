<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
            $this->load->model('contact_model', 'contactmod');
    }

    public function index()
    {
        $contact = $this->contactmod->getallcontact();
        $this->load->view('contact', [
            'contact' => $contact
        ]);
    }
}
