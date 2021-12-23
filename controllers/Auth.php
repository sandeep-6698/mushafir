<?php
class Auth extends Controller{
    public function __construct(){
     Parent::__construct();
     $this->loadModel('Auth');
    }
    public function login(){
        $email = Request::get('email');
        $pass = Request::get('password');
        if($email and $pass)
        {
            $auth = $this->model->findByEmail($email);
            if($auth)
            {
                $auth = $auth[0];
                if(md5($pass) == $auth['password']){
                    $this->loadModel('User');
                    $user = $this->model->me($auth['id'])[0];
                    $user['role'] = $auth['role'];
                    Session::set('user', $user);
                    $redirect = Request::get('redirect');
                    Request::redirect($redirect);
                }
                else{
                    $alert = ['type'=>'danger', 'message'=>"Invalid email or password!"];
                    $this->view->loadView('/auth/login',['alert'=>$alert]); 
                }
            }
            else{
                $alert = ['type'=>'danger', 'message'=>"Invalid email or password!"];
                $this->view->loadView('/auth/login',['alert'=>$alert]);   
            }
        }
        else if(Session::get('user'))
            Request::redirect('/dashboard');
        else
            $this->view->loadView('/auth/login');   
    }
    public function register(){
    if(Request::get('email'))
    {
        $userData = ['email' => Request::get('email'), 'password'=> md5(Request::get('password'))];
        $auth = $this->model->findByEmail(Request::get('email'));
        if(!$auth){
            $this->model->register($userData);
            $auth = $this->model->findByEmail(Request::get('email'))[0];
            $dp = $this->uploadFile('pf_image');
            $registerData = [
                'name' => Request::get('name'), 
                'email' => Request::get('email'), 
                'gender'=> Request::get('gender'),
                'dob'=> Request::get('dob'),
                'city'=> Request::get('city'),
                'pf_image'=> $dp,
                'auth_id'=>$auth['id']
            ];
            $this->loadModel('User');
            $this->model->register($registerData);
            Request::redirect('/auth/login');
        }
        else{
            $alert = ['type'=>'info', 'message'=>"Email is already taken!"];
            $this->view->loadView('/auth/register', ['alert'=>$alert]); 
        }
    }
    else
      $this->view->loadView('/auth/register'); 
    }
    public function logout(){
        Session::delete('user');
        Request::redirect('/dashboard');
      }
}
?>