<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_kegiatan_model extends CI_Model
{

    public $table = 'tbl_kegiatan';
    public $id = 'idKegiatan';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('idKegiatan', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('tema', $q);
	$this->db->or_like('tema1', $q);
	$this->db->or_like('tema2', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->or_like('jam', $q);
	$this->db->or_like('wilayah', $q);
	$this->db->or_like('tempat', $q);
	$this->db->or_like('status_kegiatan', $q);
	$this->db->or_like('kapasistas_peserta', $q);
	$this->db->or_like('alamat', $q);
	$this->db->or_like('kontak', $q);
	$this->db->or_like('poster', $q);
	$this->db->or_like('fb', $q);
	$this->db->or_like('tw', $q);
	$this->db->or_like('ig', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('idKegiatan', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('tema', $q);
	$this->db->or_like('tema1', $q);
	$this->db->or_like('tema2', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->or_like('jam', $q);
	$this->db->or_like('wilayah', $q);
	$this->db->or_like('tempat', $q);
	$this->db->or_like('status_kegiatan', $q);
	$this->db->or_like('kapasistas_peserta', $q);
	$this->db->or_like('alamat', $q);
	$this->db->or_like('kontak', $q);
	$this->db->or_like('poster', $q);
	$this->db->or_like('fb', $q);
	$this->db->or_like('tw', $q);
	$this->db->or_like('ig', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Tbl_kegiatan_model.php */
/* Location: ./application/models/Tbl_kegiatan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-01 21:17:52 */
/* http://harviacode.com */