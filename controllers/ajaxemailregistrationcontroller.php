<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class AjaxEmailRegistrationController extends CI_Controller 
    {
        /**
         *function to load ajaxemailregistration
         *@param void
         *@return null
         */
        public function index()
        {
            $this->load->view('ajaxemailregistration');
        }

        /**
         *Function call from AJAX
         *@param void
         *@return sum
         */
        // Function call from AJAX
        public function emailregisration() 
        {
            // ensuring form post and ajax request
            if ($this->input->post() && $this->input->is_ajax_request()) {
                $my_mail = 'akash@gmail.com';
                $my_pw = 'akash05';
                $credentials= array(
                    'email' => $this->input->post('mail'),
                    'password' => $this->input->post('pass_word')
                    );

                if( $my_mail === $credentials['email'] && $my_pw === $credentials['password'] ){
                    
                    echo "<h2>Success!</h2>";
                }
                else{
                    echo "Incorrect email or password.";
                }
            }
            // IF NOT FORM POST OR AJAX
            else{
                $this->load->view('ajaxemailregistration');
            }
        }
    }
?>