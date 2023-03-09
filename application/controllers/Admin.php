<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['link'] = 'admin';
        $data['active_menu'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    // Role Ctrl

    public function role()
    {
        $this->form_validation->set_rules('role', 'Role', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Role';
            $data['link'] = 'admin/role';
            $data['active_menu'] = 'Admin';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['role'] = $this->db->get('user_role')->result_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'role' => htmlspecialchars($this->input->post('role', true))
            ];

            $this->db->insert('user_role', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Baru Telah Ditambahkan.</div>');
            redirect('admin/role');
        }
    }

    public function editRole($id)
    {
        $this->form_validation->set_rules('role', 'Role', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Role';
            $data['link'] = 'admin/role';
            $data['active_menu'] = 'Admin';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['role'] = $this->Admin_model->getRoleByID($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit-role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->editRole();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Berhasil Diubah.</div>');
            redirect('admin/role');
        }
    }

    public function deleteRole($id)
    {
        $this->Admin_model->deleteRole($id);
        redirect('admin/role');
    }

    public function roleaccess($role_id)
    {
        $data['title'] = 'Role';
        $data['link'] = 'admin/role';
        $data['active_menu'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id!=1');
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akses Diubah!</div>');
    }

    // Menu ctrl

    public function menu()
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Manajemen Menu';
            $data['link'] = 'admin/menu';
            $data['active_menu'] = 'Admin';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['menu'] = $this->db->get('user_menu')->result_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/menu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'menu' => htmlspecialchars($this->input->post('menu', true)),
                'icon' => htmlspecialchars($this->input->post('icon', true))
            ];
            $this->db->insert('user_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Baru Telah Ditambahkan.</div>');
            redirect('admin/menu');
        }
    }

    public function editMenu($id)
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Manajemen Menu';
            $data['link'] = 'admin/menu';
            $data['active_menu'] = 'Admin';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['menu'] = $this->Admin_model->getMenuByID($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit-menu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->editMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Berhasil Diubah.</div>');
            redirect('admin/menu');
        }
    }

    public function deleteMenu($id)
    {
        $this->Admin_model->deleteMenu($id);
        redirect('admin/menu');
    }

    // Submenu ctrl

    public function submenu()
    {
        $this->form_validation->set_rules('menu_id', 'Menu ID', 'required|trim');
        $this->form_validation->set_rules('title', 'Nama Submenu', 'required|trim');
        $this->form_validation->set_rules('url', 'Url', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Manajemen Submenu';
            $data['link'] = 'admin/submenu';
            $data['active_menu'] = 'Admin';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['menu'] = $this->db->get('user_menu')->result_array();
            $data['submenu'] = $this->Admin_model->getSubMenu();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'menu_id' => htmlspecialchars($this->input->post('menu_id', true)),
                'title' => htmlspecialchars($this->input->post('title', true)),
                'url' => htmlspecialchars($this->input->post('url', true)),
                'is_active' => htmlspecialchars($this->input->post('is_active', true))
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu Baru Telah Ditambahkan.</div>');
            redirect('admin/submenu');
        }
    }

    public function editSubmenu($id)
    {
        $this->form_validation->set_rules('menu_id', 'Menu ID', 'required|trim');
        $this->form_validation->set_rules('title', 'Nama Submenu', 'required|trim');
        $this->form_validation->set_rules('url', 'Url', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Manajemen Submenu';
            $data['link'] = 'admin/submenu';
            $data['active_menu'] = 'Admin';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['menu'] = $this->db->get('user_menu')->result_array();
            $data['submenu'] = $this->Admin_model->getSubmenuByID($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit-submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->editSubmenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu Berhasil Diubah.</div>');
            redirect('admin/submenu');
        }
    }

    public function deleteSubmenu($id)
    {
        $this->Admin_model->deleteSubmenu($id);
        redirect('admin/submenu');
    }

    public function icon()
    {
        $data['title'] = 'Icon Font Awesome';
        $data['link'] = 'admin/icon';
        $data['active_menu'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/icon', $data);
        $this->load->view('templates/footer');
    }

    // User ctrl

    public function user()
    {
        $data['title'] = 'Manajemen User';
        $data['link'] = 'admin/user';
        $data['active_menu'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['user_detail'] = $this->Admin_model->getUserDetail();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/user', $data);
        $this->load->view('templates/footer');
    }

    public function editUser($id)
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('mobile_phone', 'Nomor Handphone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Manajemen User';
            $data['link'] = 'admin/user';
            $data['active_menu'] = 'Admin';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['user_detail'] = $this->Admin_model->getUserDetailByID($id);
            $data['jabatan'] = $this->User_model->getAllJabatan();
            $data['role'] = $this->Admin_model->getAllRole();


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit-user', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Admin_model->editUser();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User Berhasil Diubah.</div>');
            redirect('admin/user');
        }
    }

    public function deleteUser($id)
    {
        $this->Admin_model->deleteUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User Berhasil Dihapus.</div>');
        redirect('admin/user');
    }

    public function setupSatker()
    {
        $this->form_validation->set_rules('nama_satker', 'Nama Satuan Kerja', 'required|trim');
        $this->form_validation->set_rules('alamat_satker', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Pengaturan Satuan Kerja';
            $data['link'] = 'admin/setupSatker';
            $data['active_menu'] = 'Admin';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['satker'] = $this->db->get('setup_satker')->result_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/setup-satker', $data);
            $this->load->view('templates/footer');
        }
    }

    public function editSatker()
    {
        $data['satker'] = $this->db->get('setup_satker')->row_array();

        //cek apakah ada image
        $upload_image = $_FILES['logo_satker']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|svg';
            $config['max_size'] = '2048';
            $config['upload_path'] = 'assets/img/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo_satker')) {

                $old_image = $data['satker']['logo_satker'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('logo_satker', $new_image);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('admin/setupSatker');
            }
        }

        $data = [
            'nama_satker' => $this->input->post('nama_satker'),
            'alamat_satker' => $this->input->post('alamat_satker'),
            'kota_satker' => $this->input->post('kota_satker'),
            'no_tlp' => $this->input->post('no_tlp'),
            'no_hp' => $this->input->post('no_hp'),
            'email_satker' => $this->input->post('email_satker'),
            'situs' => $this->input->post('situs'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('setup_satker', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil Satuan Kerja Berhasil Diperbaharui!</div>');
        redirect('admin/setupSatker');
    }
}
