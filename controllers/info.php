<?php 
namespace Controllers;

class Info extends BaseController {

    protected mixed $output = NULL;

    public function Info()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__))),
            'items'  => $this->getItemsLimit('products', 4, 4)
        ];

        $this->include('libraries/session');
        $this->include('libraries/logout');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/hero');
        $this->view('pages/info', $data);
        $this->view('templates/footer');
    }
    
}