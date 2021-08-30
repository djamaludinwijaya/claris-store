<?php
class Model_barang extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->join('tb_kategori', 'tb_barang.id_kategori = tb_kategori.id_kategori');
        $result = $this->db->get();
        return $result;
    }

    public function tampil_per_id($id, $table)
    {
        return $this->db->get_where($table, ['id_kategori' => $id]);
    }

    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('id_brg', $id)
            ->limit(1)
            ->get('tb_barang');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return [];
        }
    }

    public function detail_brg($id_brg)
    {
        $result = $this->db->where('id_brg', $id_brg)
            ->get('tb_barang');

        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
