<?php
defined('BASEPATH') or exit('No direct script access allowed');

class unit_model extends CI_Model
{
    private $table1 = 'type_unit';
    private $table2 = 'merk_unit';
    private $table3 = 'model_unit';

    public function getAllDatatu()
    {
        return $this->db->get($this->table1)->result_array();
    }
}
