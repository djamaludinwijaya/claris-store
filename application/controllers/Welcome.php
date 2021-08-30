<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$data['kategori'] = $this->model_kategori->tampil_data()->result();

		$this->load->view("templates/header");
		$this->load->view("templates/sidebar", $data);
		$this->load->view("dashboard", $data);
		$this->load->view("templates/footer");
	}

	public function tampil_kategori($id)
	{
		$data['kategori'] = $this->model_kategori->tampil_data()->result();
		$data['kategori_produk'] = $this->model_barang->tampil_per_id($id, 'tb_barang')->result();
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar", $data);
		$this->load->view("user/kategori", $data);
		$this->load->view("templates/footer");
	}
}
