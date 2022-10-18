<?php 
namespace Controllers;

class postHandler extends BaseController {
    
    public function contactUs()
    {
        if(isset($_POST['contact'])) {
            
            $this->VALIDATE_STRING($_POST['name'], 'name');
            $this->VALIDATE_EMAIL($_POST['email']);
            $this->VALIDATE_STRING($_POST['subject'], 'subject');
            $this->VALIDATE_STRING($_POST['message'], 'message');

            if (count($this->data) == 4) {

                if ($this->insertData('contact_us', ['name', 'email', 'subject', 'message'], 
                                      $this->data) == true) {

                    $this->output = [

                                'alert' => 1,
                                'text' => 'Successfully Sent',
                                'icon' => 'success',
                                'timer' => 2500
                    ];

                } else {

                    $this->output = [

                                'alert' => 1,
                                'text' => 'Failed to send, please try again later',
                                'icon' => 'error',
                                'timer' => 3000
                    ];

                }

            } else {

                $this->output = $this->error;
            }
        }
    }
}