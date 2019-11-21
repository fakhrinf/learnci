<?php

class Contact_model extends CI_Model
{
    public $name;
    public $phone;
    public $email;
    
    public function getallcontact()
    {
        $data = $this->db->get('contact')->result();
        return $data;
    }

    public function addcontact()
    {
        $this->name = $_POST['name'];
        $this->phone = $_POST['phone'];
        $this->contact = $_POST['email'];

        $this->db->insert('contact', $this);
    }

    public function editcontact()
    {
        $this->name = $_POST['name'];
        $this->phone = $_POST['phone'];
        $this->contact = $_POST['email'];

        $this->db->update('contact', $this, ['id' => $_POST['id']]);
    }

    public function deletecontact()
    {
        $this->db->delete('contact', ['id' => $_POST['id']]);
    }
}


?>