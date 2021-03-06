<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Artikel_model extends CI_Model
{
    private $_table = "artikel";

    public function getAll()
    {
        $this->db->select('artikel.*, user.nama');
        $this->db->join('user', 'user.id_user = '.$this->_table.'.id_user');
        return $this->db->get($this->_table)->result();
    }

    public function getLimit($limit)
    {
        $this->db->select('artikel.*, user.nama');
        $this->db->join('user', 'user.id_user = '.$this->_table.'.id_user');
        $this->db->order_by('id_artikel', 'DESC');
        return $this->db->get($this->_table, $limit)->result();
    }

    // pakai group by - SELECT kategori FROM `artikel` GROUP BY kategori
    public function getKategori()
    {
        $this->db->select('kategori');        
        $this->db->group_by('kategori');
        return $this->db->get($this->_table)->result();
    }

    // get where yang dipilih - SELECT * FROM `artikel` where kategori = 1

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_artikel" => $id])->row();
    }

    public function limit()
    {
        return $this->db->order_by('id_artikel', 'DESC')->get($this->_table)->limit();

        // $this->db->get('artikel')->order_by('id_artikel', 'desc')->limit(15); // Limit, 15 entries

        // $this->db->order_by('id_artikel', 'DESC')->limit(3);
        // SELECT * FROM `artikel` ORDER BY id_artikel DESC LIMIT 3
    }

    public function getRecords()
    {
        // return $this->db->select()->from($this->_table)->order_by('id_artikel', 'desc');
        // $this->db->order_by("id_artikel", "asc");
        // $query = $this->db->get($this->_table);
        // return $query->result();
        return $this->db->order_by("id_artikel", "desc")->get($this->_table)->result();

        // $this->db->order_by('id_artikel', 'DESC')->get($this->_table)->limit(3)
    }

    public function jumlah()
    {
        return $this->db->get($this->_table)->num_rows('*');
    }

    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }

    public function update($data)
    {
        $id = ['id_artikel' => $this->input->post('id')];

        $this->db->update($this->_table, $data, $id);
    }

    public function delete($id)
    {
        $this->db->delete($this->_table, array('id_artikel' => $id));
    }

    // paging
    public function getListArtikel($limit, $start)
    {
        $query = $this->db->get('artikel', $limit, $start)->result();
        return $query;
    }
}
