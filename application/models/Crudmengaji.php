<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crudmengaji extends CI_Model
{
    function getDataKomentar($halMapel)
    {
        $query = $this->db->get_where('komentar', ['halaman_mapel' => $halMapel]);
        return $query->result();
    }

    function insertDataKomentar($data)
    {
        $this->db->insert('komentar', $data);
    }

    function deleteDataKomentar($idKomen)
    {
        $this->db->where('id_komentar', $idKomen);
        $this->db->delete('komentar');
    }

    function updateDataKomentar($idKomen, $data)
    {
        $this->db->where('id_komentar', $idKomen);
        $this->db->update('komentar', $data);
    }

    function getDataRating()
    {
        $query = $this->db->get('rating');
        return $query->result();
    }

    function insertRating($data)
    {
        $this->db->insert('rating', $data);
    }
}
