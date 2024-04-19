<?php

namespace App\Controllers;
use App\Models\ConatctModel;
use App\Models\LectureModel;
use App\Models\MathModel;
use App\Models\PhysicsModel;
class Home extends BaseController
{
    public function index(): string
    {
        $model = new LectureModel();
        $data['lecturedata'] = $model->select('*')->findAll();
        return view('header').view('welcome_message', $data).view('footer');
        // return view('welcome_message', $data);

    }
    public function contact(){
        return view('header').view('contactus').view('footer');
    }
    public function aboutus(){
        return view('header').view('aboutus').view('footer');
    }
     public function team(){
        return view('header').view('team').view('footer');
    }
    public function bsc(){
        $model = new MathModel();
        $data['bsc'] = $model->select('*')->findAll();
        return view('header').view('bsc',$data).view('footer');
    }
    public function msc(){
        $model = new PhysicsModel();
        $data['msc'] = $model->select('*')->findAll();
        return view('header').view('msc',$data).view('footer');
    }
    public function insert(){
       

        $data = [
            'name'=> $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'subject'    => $this->request->getPost('subject'),
            'message'    => $this->request->getPost('message'),
        ];
        $model = new ConatctModel();
        $model->insert($data);
        $session = session();
        $session->setFlashdata('success', 'Thank you for your message. We will contact you soon.');
    
        return redirect()->to(base_url('/'));
    }
    

}
