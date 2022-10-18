<?php 
namespace Controllers;

class Contact extends BaseController {

    protected mixed $output = NULL;

    public function Contact()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__)))
        ];

        if(isset($_POST['contact'])){
        
                $userContact = [$_POST['name'],$_POST['email'],$_POST['message']];
                $this->insertData('contact',array('name','email','message'), $userContact); 
                echo '<script>alert("we have received your message successfully")</script>';       
            
        }

        $this->include('libraries/session');
        $this->include('libraries/logout');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/hero');
        $this->view('templates/contact');
        $this->view('templates/footer');
    }
    
}