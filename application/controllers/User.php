<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        is_logged_in();
    }

    public function index()
    {
        error_reporting(0);
        $data['title'] = 'Profil Saya';
        $data['link'] = 'user';
        $data['active_menu'] = 'User';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['jabatanByUser'] = $this->User_model->getUserJabatan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        error_reporting(0);
        $data['title'] = 'Perbaharui Profil';
        $data['link'] = 'user';
        $data['active_menu'] = 'User';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['jabatan'] = $this->User_model->getAllJabatan();
        $data['jabatanByUser'] = $this->User_model->getUserJabatan();

        $this->form_validation->set_rules('name', 'Fullname', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->User_model->editProfile();
        }
    }

    public function changePass()
    {
        $data['title'] = 'Ubah Kata Sandi';
        $data['link'] = 'user/changePass';
        $data['active_menu'] = 'User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password', 'New Password', 'required|trim|min_length[6]|matches[repeat_password]');
        $this->form_validation->set_rules('repeat_password', 'Repeat Password', 'required|trim|matches[new_password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/change-password', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata Sandi Saat Ini Salah!</div>');
                redirect('user/changepass');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Kata Sandi Baru Tidak Boleh Sama Dengan Kata Sandi Sebelumnya!</div>');
                    redirect('user/changepass');
                } else {
                    //password validasi ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $data['user']['email']);
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kata Sandi Berhasil Diperbaharui!</div>');
                    redirect('user/changepass');
                }
            }
        }
    }
}
