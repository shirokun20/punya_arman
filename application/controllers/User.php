<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        cek_login();
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header.php', $data);
        $this->load->view('templates/user_sidebar.php', $data);
        $this->load->view('templates/user_topbar.php', $data);
        $this->load->view('user/index.php', $data);
        $this->load->view('templates/user_footer.php');
    }
}
