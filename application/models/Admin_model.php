<?php
class Admin_model extends CI_model {
    public function getAllUser($limit, $start, $keyword = null)
    {
        $this->db->order_by('id', 'DESC');
        if($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('nis', $keyword);
        }
        return $this->db->get('user', $limit, $start)->result_array();
    }

    public function getAllUnggahan($limit, $start, $keyword = null)
    {
        $this->db->order_by('id', 'DESC');
        if($keyword) {
            $this->db->like('teks', $keyword);
            $this->db->or_like('judul', $keyword);
            $this->db->or_like('nama', $keyword);
        }
        return $this->db->get('unggahan', $limit, $start)->result_array();
    }

    public function getAllDiskusi($limit, $start, $keyword = null)
    {
        $this->db->order_by('id', 'DESC');
        if($keyword) {
            $this->db->like('pesan', $keyword);
            $this->db->or_like('nama', $keyword);
        }
        return $this->db->get('diskusi', $limit, $start)->result_array();
    }

    public function hapusDataUser($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('user',['id' => $id]);
    }

    public function hapusDataUnggahan($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('unggahan',['id' => $id]);
    }

    public function hapusDataDiskusi($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('diskusi',['id' => $id]);
    }

    public function hitungUser()
    {
        return $this->db->get('user')->num_rows();
    }

    public function hitungUnggahan()
    {
        return $this->db->get('unggahan')->num_rows();
    }

    public function hitungDiskusi()
    {
        return $this->db->get('diskusi')->num_rows();
    }

    public function hitungPesanSiswa()
    {
        return $this->db->get('pesan_siswa')->num_rows();
    }
}