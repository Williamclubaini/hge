<?php 
namespace Controllers;

class Register extends BaseController {

    protected mixed $output = [];

    public function register()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__)))
        ];

        if(isset($_POST['register'])){

            $db_data = $this->getData('users');

            $key = array_search($_POST['email'],array_column($db_data,'email'));

            if (gettype($key)=='boolean') {

                $user = [$_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['password']];
                $this->insertData('users',array('fname','lname','email','password'), $user);
                
                $this->login_redirect('home', $_POST['email']);
            

            } else{
                

                $this->output['email'] = 'Email already exist';

            }
            
        }

        // $this->view('templates/header', $data);
        $this->view('pages/register', NULL, $this->output);
        
    }
    
}