<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    // Role Manajemen

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

    // Menu Manajemen

    public function getMenuByID($id)
    {
        $q = "SELECT `user_menu`.* 
                FROM `user_menu`
                WHERE `user_menu`.`id` = $id
                ";

        return $this->db->query($q)->row_array();
    }

    public function editMenu()
    {
        $data = [
            'menu' => htmlspecialchars($this->input->post('menu', true)),
            'icon' => htmlspecialchars($this->input->post('icon', true))
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);
    }

    public function deleteMenu($id)
    {
        $this->db->delete('user_menu', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Berhasil Dihapus.</div>');
    }

    // Menu Manajemen

    public function getSubMenu()
    {
        $q = "SELECT `user_sub_menu`.*, `user_menu`.`menu` 
                FROM `user_sub_menu` JOIN `user_menu`
                ON  `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";

        return $this->db->query($q)->result_array();
    }

    public function getSubMenuById($id)
    {
        $q = "SELECT `user_sub_menu`.*, `user_menu`.`menu` 
                FROM `user_sub_menu` JOIN `user_menu`
                ON  `user_sub_menu`.`menu_id` = `user_menu`.`id`
                WHERE `user_sub_menu`.`id` = $id
                ";

        return $this->db->query($q)->row_array();
    }

    public function editSubmenu()
    {
        $data = [
            'menu_id' => htmlspecialchars($this->input->post('menu_id', true)),
            'title' => htmlspecialchars($this->input->post('title', true)),
            'url' => htmlspecialchars($this->input->post('url', true)),
            'is_active' => htmlspecialchars($this->input->post('is_active', true))
        ];
        $this->db->where(
            'id',
            $this->input->post('id')
        );
        $this->db->update('user_sub_menu', $data);
    }

    public function deleteSubmenu($id)
    {
        $this->db->delete('user_sub_menu', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu Berhasil Dihapus.</div>');
    }
}
