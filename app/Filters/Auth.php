<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // jika user belum login
        if(!session()->get('logged_in') && !in_array(uri_string(), ["login/auth", "login", "register", "register/save"])){
            // maka redirct ke halaman login
            return redirect()->to('/login');
        } else if(session()->get('logged_in') && in_array(uri_string(), ["login/auth", "login", "register", "register/save"])) {
            return redirect()->to('/');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}