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

    public function manage()
    {
        $edit = ($this->input->post('id') == 0) ? false : true;

        if($edit) {
            $this->contactmod->editcontact();
            $this->session->set_flashdata('message', 'success edit data');
        }else{
            $this->contactmod->addcontact();
            $this->session->set_flashdata('message', 'success add data');
        }

        redirect('/home/');
    }

    public function edit($id)
    {
        $allcontact = $this->contactmod->getallcontact();
        $contact = $this->contactmod->getcontact($id);
        $this->load->view('contact', [
            'contact' => $allcontact,
            'data' => $contact[0]
        ]);
    }

    public function delete($id)
    {
        $this->contactmod->deletecontact($id);
        redirect('/home/');
    }
}
