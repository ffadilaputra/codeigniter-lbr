<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function index(){

       $this->load->view('partials/header');
       $this->load->view('home');
       $this->load->view('partials/footer');
    }

    public function about(){
        $this->load->view('partials/header');
        $this->load->view('about');
        $this->load->view('partials/footer');
    }

    public function dest(){
        $this->load->view('partials/header');
        $this->load->view('dest');
        $this->load->view('partials/footer');
    }


    public function testi(){
        $this->load->view('partials/header');
        $this->load->view('testi');
        $this->load->view('partials/footer');
    }

    public function contact(){
        $this->load->view('partials/header');
        $this->load->view('contact');
        $this->load->view('partials/footer');
    }

}

