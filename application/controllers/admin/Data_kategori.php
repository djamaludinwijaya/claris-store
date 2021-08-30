<?php
class Data_kategori extends CI_Controller
{
    public function index()
    {
        $data['kategori'] = $this->model_kategori->tampil_data()->result();
        $this->load->view("templates/header");
        $this->load->view('admin/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }


    public function tambah_aksi()
    {
        $nama_kategori = $this->input->post('nama_kategori');
        $data = [
            'nama_kategori' => $nama_kategori,
        ];
        $this->model_kategori->tambah_kategori($data, 'tb_kategori');
        redirect('admin/data_kategori');
    }

    public function edit()
    {
        echo json_encode($this->model_kategori->tampil_by_id($this->input->post('id')));
    }

    public function update_aksi()
    {
        $id_kategori    = $this->input->post('id_kategori');
        $nama_kategori  = $this->input->post('nama_kategori');

        $data = [
            'nama_kategori' => $nama_kategori,
        ];

        $where = [
            'id_kategori'   => $id_kategori
        ];

        $this->model_kategori->update_kategori($where, $data, 'tb_kategori');
        redirect('admin/data_kategori');
    }

    public function hapus_kategori($id_kategori)
    {
        $where = ['id_kategori' => $id_kategori];
        $this->model_kategori->hapus_kategori($where, 'tb_kategori');
        redirect('admin/data_kategori');
    }
}
