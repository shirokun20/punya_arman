<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {


        $this->load->view('templates/user_header.php');
        $this->load->view('user/v_tampilkasuser.php');
        $this->load->view('templates/user_footer.php');
    }
}
