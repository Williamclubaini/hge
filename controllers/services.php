<?php 
namespace Controllers;

class Services extends BaseController {

    protected mixed $output = NULL;

    public function services()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__)))
        ];

        $this->include('libraries/session');
        $this->include('libraries/logout');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/hero');
        $this->view('templates/services');
        $this->view('templates/footer');
    }
    
}