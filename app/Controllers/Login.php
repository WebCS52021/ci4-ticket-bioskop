<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [
            'title'=> 'Login',
        ];

        return view('pages/login', $data);
    }

    public function auth()
    {
        $session = session();
        $model = new User();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['id'],
                    'user_name'     => $data['name'],
                    'user_email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}