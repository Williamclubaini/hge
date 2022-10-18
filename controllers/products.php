<?php 
namespace Controllers;

class Products extends BaseController {

    protected mixed $output = NULL;

    public function products()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__))),
            'items'  => $this->getItems('products', 'type', ['latest']),
        ];

        $this->include('libraries/session');
        $this->include('libraries/logout');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/hero');
        $this->view('templates/products', $data);
        $this->view('templates/footer');
    }
    
}