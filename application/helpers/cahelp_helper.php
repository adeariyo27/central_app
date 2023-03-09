<?php
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Anda Belum Login! Silahkan Login Terlebih Dahulu</div>');
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}


function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $result = $ci->db->get_where('user_access_menu', [
        'role_id' => $role_id,
        'menu_id' => $menu_id
    ]);

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

// Konvesi yyyy-mm-dd -> dd-mm-yyyy dan memberi nama bulan
function tgl_eng_to_ind($tgl) 
{
    $ci = get_instance();
    $tanggal	= explode('-',$tgl);
    $kdbl		= $tanggal[1];

    if ($kdbl == '01')	{
        $nbln = 'Januari';
    }
    else if ($kdbl == '02') {
        $nbln = 'Februari';
    }
    else if ($kdbl == '03') {
        $nbln = 'Maret';
    }
    else if ($kdbl == '04') {
        $nbln = 'April';
    }
    else if ($kdbl == '05') {
        $nbln = 'Mei';
    }	
    else if ($kdbl == '06') {
        $nbln = 'Juni';
    }
    else if ($kdbl == '07') {
        $nbln = 'Juli';
    }
    else if ($kdbl == '08') {
        $nbln = 'Agustus';
    }
    else if ($kdbl == '09') {
        $nbln = 'September';
    }
    else if ($kdbl == '10') {
        $nbln = 'Oktober';
    }
    else if ($kdbl == '11') {
        $nbln = 'November';
    }
    else if ($kdbl == '12') {
        $nbln = 'Desember';
    }
    else {
        $nbln = '';
    }
    
    $tgl_ind = $tanggal[0]." ".$nbln." ".$tanggal[2];
    return $tgl_ind;
}
