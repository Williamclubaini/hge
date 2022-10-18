<?php 
namespace Controllers;

class Search extends BaseController {

    protected mixed $output = NULL;

    public function Search()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__)))
        ];

        if (isset($_POST['find'])) {

            $data['items'] = $this->find($_POST['search']);
        
        }

        $this->include('libraries/session');
        $this->include('libraries/logout');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/hero');
        $this->view('templates/search');
        $this->view('pages/search', $data);
        $this->view('templates/footer');
    }
    
}