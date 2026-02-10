<?php

class hello extends CI_Controller{
    public function index()
    {
        $data['nama'] = "FAJAR RAIHANDHIKA GANTENG";
        $this->load->view('hello_view',$data);
    }
    public function namasaya()
    {
        $data['nama'] = "Adit";
        $this->load->view('hello_view',$data);
    }
}
