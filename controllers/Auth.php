<?php
class Auth extends Controller{
    public function __construct(){
     Parent::__construct();
     $this->loadModel('Auth');
    }
    public function login(){
        $email = Request::get('email');
        if($email)
        {
            Session::set('user', ['email'=> $email, 'name'=>'Sandeep']);
            Request::redirect('/dashboard');
        }
        else if(Session::get('user'))
            Request::redirect('/dashboard');
        else
            $this->view->loadView('/auth/login');   
    }
    public function register(){
      $this->view->loadView('/auth/register'); 
    }
    public function logout(){
        Session::delete('user');
        Request::redirect('/dashboard');
      }
}
?>