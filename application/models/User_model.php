<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getUserJabatan()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $take_data = $data['user']['jabatan_id'];
        $q = "SELECT `user`.*, `user_jabatan`.`jabatan`
                FROM `user` JOIN `user_jabatan`
                ON  `user`.`jabatan_id` = `user_jabatan`.`id`
                WHERE `user`.`jabatan_id` = $take_data
                ";

        return $this->db->query($q)->row_array();
    }

    public function getAllJabatan()
    {
        $q = "SELECT * FROM user_jabatan";

        return $this->db->query($q)->result_array();
    }

    public function editProfile()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


        //cek apakah ada image
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|svg';
            $config['max_size'] = '2048';
            $config['upload_path'] = 'assets/img/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {

                $old_image = $data['user']['image'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('user');
            }
        }

        $data = [
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'nip' => $this->input->post('nip'),
            'mobile_phone' => $this->input->post('mobile_phone'),
            'jabatan_id' => $this->input->post('jabatan')
        ];
        $this->db->where('email', $this->input->post('email'));
        $this->db->update('user', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil Berhasil Diperbaharui!</div>');
        redirect('user');
    }
}
