<?php
class model_kategori extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_kategori');
    }

    public function tambah_kategori($data, $table)
    {
        $this->db->insert($table, $data);
    }


    public function tampil_by_id($id)
    {
        $result = $this->db->where('id_kategori', $id)
            ->limit(1)
            ->get('tb_kategori');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return [];
        }
    }

    public function update_kategori($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_kategori($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function data_elektronik()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'elektronik']);
    }

    public function data_pakaian_pria()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'pakaian pria']);
    }

    public function data_pakaian_wanita()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'pakaian wanita']);
    }

    public function data_pakaian_anak_anak()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'pakaian anak anak']);
    }

    public function data_peralatan_olahraga()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'peralatan olahraga']);
    }
}
