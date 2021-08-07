<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getRoleByID($id)
    {
        $q = "SELECT `user_role`.* 
                FROM `user_role`
                WHERE `user_role`.`id` = $id
                ";

        return $this->db->query($q)->row_array();
    }

    public function editRole()
    {
        $data = [
            'role' => htmlspecialchars($this->input->post('role', true))
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_role', $data);
    }

    public function deleteRole($id)
    {
        $this->db->delete('user_role', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Berhasil Dihapus.</div>');
    }
}
