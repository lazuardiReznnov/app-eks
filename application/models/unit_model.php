<?php
defined('BASEPATH') or exit('No direct script access allowed');

class unit_model extends CI_Model
{
    private $table1 = 'type_unit';
    private $table2 = 'merk_unit';
    private $table3 = 'model_unit';
    private $table4 = 'unit';

    public function getAllDatatu()
    {
        return $this->db->get($this->table1)->result_array();
    }
    public function getDataTuByid($id_tu)
    {
        return $this->db->get_where($this->table1, ['id_tu' => $id_tu])->row();
    }
    public function getUnitByTu($id_tu, $limit, $start)
    {
        $this->db->select('unit.id_unit');
        $this->db->select('unit.id_mu');
        $this->db->select('unit.nopol');
        $this->db->select('unit.img_unit');
        $this->db->select('model_unit.id_mu');
        $this->db->select('model_unit.id_tu');
        $this->db->select('model_unit.id_merk');
        $this->db->select('model_unit.model_name');
        $this->db->from($this->table4);
        $this->db->join('model_unit', 'unit.id_mu = model_unit.id_mu', 'inner');
        $this->db->limit($limit, $start);
        $this->db->where('id_tu', $id_tu);
        return $this->db->get()->result_array();
    }

    public function countUnit($id_tu)
    {
        $this->db->select('unit.id_unit');
        $this->db->select('unit.id_mu');
        $this->db->select('Model_unit.id_mu');
        $this->db->from($this->table4);
        $this->db->join($this->table3, 'unit.id_mu = model_unit.id_mu', 'inner');
        $this->db->where('id_tu', $id_tu);
        return $this->db->get()->num_rows();
    }
}
