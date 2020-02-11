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

    public function unitlist()
    {
        $data['title'] = 'HALAMAN UNIT DATA';
        $controler = 'unit/unitlist';

        $this->templates->loadTemp($controler, $data);
    }
}
