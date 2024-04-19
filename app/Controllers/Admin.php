<?php

namespace App\Controllers;
use App\Models\ConatctModel;
use App\Models\LectureModel;
use App\Models\MathModel;
use App\Models\PhysicsModel;
use App\Models\ChemistryModel;
class Admin extends BaseController
{
    public function index(): string
    {
        // return view('admin/header').view('admin/sidebar').view('admin/navbar').view('admin/signin').view('admin/footer');

        return view('admin/header').view('admin/signin').view('admin/footer');
    }
    public function page()
    {
        return view('admin/header').view('admin/sidebar').view('admin/navbar').view('admin/index').view('admin/footer');
    }

    public function logIn()
    {
        $session = \Config\Services::session();
        $model = new ConatctModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // $p = password_hash(
        //     $password, PASSWORD_BCRYPT);
        
        $data = $model->where('email', $email)->first();
        
        if ($data) {
            $pass = $data['password'];
        //    $p1= password_hash(
        //         $pass, PASSWORD_BCRYPT);;
            // echo $pass;
            // echo '<br>';
            // echo $p;
            // exit;
            $authenticatePassword = password_verify($password, $pass);
            
            if ($authenticatePassword) {
                $ses_data = [
                    'id' => $data['id'],

                    'email' => $data['email'],
                    // 'password' => $data['password'],
                ];
                $session->set($ses_data);
                // return view('admin/header').view('admin/sidebar').view('admin/navbar').view('admin/index').view('admin/footer');
                //dashboard or wherever appropriate
                return redirect()->to('/admin/page'); 
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/admin');
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/admin');
        }
    }
    public function form()
    {
        return view('admin/header').view('admin/sidebar').view('admin/navbar').view('admin/form').view('admin/footer');
    }
        
    public function lecture(){
        $data = [
            'link'=> $this->request->getPost('link'),
            'title'=> $this->request->getPost('title'),
            'teacher'=> $this->request->getPost('teacher'),
            'timer'=> $this->request->getPost('timer'),
            'category'=> $this->request->getPost('category'),
            
        ];
      $cat = $this->request->getPost('category');
      if($cat == '1')
      {
        $model = new MathModel();
        $model->insert($data);
        return redirect()->to(base_url('admin/page'));
      }
      elseif($cat == '2')
      {
        $model = new PhysicsModel();
        $model->insert($data);
        return redirect()->to(base_url('admin/page'));
      }
      elseif($cat == '3')
      {
        $model = new ChemistryModel();
        $model->insert($data);
        return redirect()->to(base_url('admin/page'));
      }else
      {
        $model = new LectureModel();
        $model->insert($data);
        return redirect()->to(base_url('admin/page'));
      }

    }
    // public function getdata() {
        
    //     $model = new LectureModel();
    //     $data['lecturedata'] = $model->select('*')->findAll();
        
    //     // echo '<pre>';
    //     // print_r($data);
    //     // exit;
    //     return view('welcome_message', $data);
    // }
    public function dashboard(): string
    {
        $model = new ConatctModel();
        $data ['student']= $model->select('*')->findAll();
        return view('admin/header').view('admin/sidebar').view('admin/navbar').view('admin/dashboard',$data).view('admin/footer');
    }
    public function lectures()
    {
        $model = new LectureModel();
        $data ['video']= $model->select('*')->findAll();
        return view('admin/header').view('admin/sidebar').view('admin/navbar').view('admin/lectures',$data).view('admin/footer');
    }
    } 
