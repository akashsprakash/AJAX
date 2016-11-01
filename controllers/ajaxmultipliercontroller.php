<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class AjaxMultiplierController extends CI_Controller 
    {
        /**
         *function to load ajaxmultiplier
         *@param void
         *@return null
         */
        public function index()
        {
            $this->load->view("ajaxmultiplier");
        }

        /**
         *Function call from AJAX
         *@param void
         *@return sum
         */
        // Function call from AJAX
        public function multiplier() 
        {
            // ensuring post request and ajax request
            if ($this->input->post() && $this->input->is_ajax_request()){
                $credentials = array(
                    'number1' => $this->input->post('number1'),
                    'number2' => $this->input->post('number2'));
                $sum = $credentials['number1'] * $credentials['number2'];
            //Either you can print value or you can send value to database
                // returns sum to ajax
                echo json_encode($sum);
            }
            // if not post request or ajax request, ajaxmultiplier loaded
            else{
                $this->load->view("ajaxmultiplier");
            }
        }
    }
?>