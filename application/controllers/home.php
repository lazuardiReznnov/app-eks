<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'HALAMAN HOME';
        $controler = 'home/index';
        $this->templates->loadTemp($controler, $data);
    }
}
