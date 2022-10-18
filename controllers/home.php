<?php 
namespace Controllers;

class Home extends BaseController {

    protected mixed $output = [];

    public function Home()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__))),
            'items'  => $this->selectlimit('products', 'type', ['latest'], 3, 0),
            'header' => 'Home Gym Equipment',
            'msg' => 'Hi, Guest',
            'btn' => TRUE,
        ];

        if (isset($_POST['find'])) {
            $fetch = $this->find($_POST['search']);
            $this->redirect('search', $fetch);
            
        }  


        $this->include('libraries/session');
        $this->include('libraries/logout');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/hero', $data, $this->output);
        $this->view('pages/home', $data);
        $this->view('templates/footer');
    }
    
}