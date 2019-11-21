<?php

class Contact_model extends CI_Model
{
    public $name;
    public $phone;
    public $email;
    
    public function getallcontact()
    {
        $data = $this->db->from('contact')->order_by('id', 'desc')->get()->result();
        return $data;
    }

    public function getcontact($id)
    {
        $data = $this->db->get_where('contact', ['id' => $id])->result();
        return $data;
    }

    public function addcontact()
    {
        $this->name = $_POST['name'];
        $this->phone = $_POST['phone'];
        $this->email = $_POST['email'];

        $this->db->insert('contact', $this);
    }

    public function editcontact()
    {
        $this->name = $_POST['name'];
        $this->phone = $_POST['phone'];
        $this->email = $_POST['email'];

        $this->db->update('contact', $this, ['id' => $_POST['id']]);
    }

    public function deletecontact($id)
    {
        $this->db->delete('contact', ['id' => $id]);
    }
}


?>