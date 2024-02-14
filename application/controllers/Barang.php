<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Barang';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('inventory/barang');
        $this->load->view('templates/auth_footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Barang';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('inventory/tambahBarang', $data);
        $this->load->view('templates/auth_footer');
    }
}
