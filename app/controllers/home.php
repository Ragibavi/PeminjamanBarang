<?php 

class Home extends Controller {

    public function index(){
        $data['name'] = 'Ragibavi';
        $data['job'] = 'Programmer';
        $date['title'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['title'] = 'Page';
        $data['image'] = 'juan.jpg';
        $data['name'] = 'Ragibavi';
        $data['job'] = 'Programmer';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }
}