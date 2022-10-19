<?php 
namespace Controllers;

class Review extends BaseController {

    protected mixed $output = NULL;

    public function review()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__))),
            'items'  => $this->getData('products'),
        ];

        $this->include('libraries/session');
        $this->include('libraries/logout');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/hero');
        $this->view('pages/review', $data);
        $this->view('templates/footer');
    }
    
}