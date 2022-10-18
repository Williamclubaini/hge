<?php 
namespace Controllers;

class Smartwatch extends BaseController {

    protected mixed $output = NULL;

    public function Smartwatch()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__))),
            'items'  => $this->getItemsLimit('products', 3, 3),
        ];

        $this->include('libraries/session');
        $this->include('libraries/logout');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/hero');
        $this->view('pages/smartwatch');
        $this->view('templates/footer');
    }
    
}