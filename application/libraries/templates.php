<?php

class templates
{
    protected $ci;
    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function loadTemp($controler, $data)
    {
        $this->ci->load->view('templates/header', $data);
        $this->ci->load->view('templates/aside', $data);
        $this->ci->load->view($controler, $data);
        $this->ci->load->view('templates/footer');
    }
}
