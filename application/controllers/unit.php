<?php
defined('BASEPATH') or exit('No direct script access allowed');

class unit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('unit_model', 'unit');
    }

    public function index()
    {
        $data['title'] = 'HALAMAN UNIT DATA';
        $controler = 'unit/index';
        $data['list_tu'] = $this->unit->getAllDatatu();
        $this->templates->loadTemp($controler, $data);
    }

    public function unitlist($id_tu)
    {
        $config['base_url'] = 'http://localhost/fauzia-eks/unit/unitlist/' . $id_tu . '/';
        $config['total_rows'] = $this->unit->countUnit($id_tu);

        $config['per_page'] = 5;

        $data['start'] = $this->uri->segment(4);
        $this->pagination->initialize($config);
        $data['title'] = 'HALAMAN UNIT DATA';
        $controler = 'unit/unitlist';
        $data['unit'] = $this->unit->getUnitByTu($id_tu, $config['per_page'], $data['start']);
        $data['tu'] = $this->unit->getDataTuByid($id_tu);

        $this->templates->loadTemp($controler, $data);
    }
}
