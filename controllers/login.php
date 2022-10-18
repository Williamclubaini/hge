<?php 
namespace Controllers;

class Login extends BaseController {

    protected mixed $output = [];

    public function Login()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__)))
        ];

        if(isset($_POST['login'])){

            $db_data = $this->getData('users');

            $attempt = $this->count('loginattempts');

            $attempts =  $attempt[0]->num;

            $key = array_search($_POST['name'],array_column($db_data,'fname'));

            if (gettype($key)=='boolean') {

                if ($attempts == 3) {

                    $this->output['name'] = 'You have Exceeded Login Limit Attempts Wait for 10 minutes';
                    $this->deleteAll('loginattempts');
                    $this->output['lock'] = true;

                }  else {

                    $this->insertData('loginattempts',['attempt'], [1]);
                    $this->output['name'] = 'Username does not exist';
                }
                

            } else{
                

                if ($_POST['password'] == $db_data[$key]->password)
                {
                    
                    $this->login_redirect('home', $db_data[$key]->fname);
                     

                } else {

                    if ($attempts == 3) {

                        $this->output['pass'] = 'You have Exceeded Login Limit Attempts Wait for 10 minutes';
                        $this->deleteAll('loginattempts');
                        $this->output['lock'] = true;
    
                    } else {
    
                        $this->insertData('loginattempts',['attempt'], [1]);
                        $this->output['pass'] = 'Incorrect password!';
                    }

                }

            }
            
        }

        // $this->view('templates/header', $data);
        $this->view('pages/login', NULL, $this->output);
        
    }
    
}