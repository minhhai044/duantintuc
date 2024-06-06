<?php

namespace Minhhai\Duan\Controllers\Client;

use Minhhai\Duan\Commons\Controller;
use Minhhai\Duan\Commons\Helper;
use Minhhai\Duan\Models\Account;
use Minhhai\Duan\Models\Post;
use Rakit\Validation\Validator;

class LoginController extends Controller
{
    private Account $account;
    public function __construct()
    {
        $this->account = new Account();
    }
    
    public function addAcc()
    {
        $validator = new Validator;

        // make it
        $validation = $validator->make($_POST, [
            'name'                  => 'required',
            'email'                 => 'required|email',
            'password'              => 'required|min:5',
            'confirm_password'      => 'required|same:password',
        ]);

        // then validate
        $validation->validate();
        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();
            header('location:' . url('login'));
            exit;
        } else {
            $data = [
                'name'      => $_POST['name'],
                'email'     => $_POST['email'],
                'password'  => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ];
        }
        try {
            $account = $this->account->findByEmail($_POST['email']);
            if (!empty($account)) {
                throw new \Exception('Email này đã tồn tại !!!');
            }else{
                $this->account->insert($data);

                $_SESSION['status'] = true;
                $_SESSION['msg'] = 'Thêm mới thành công';
        
                header('Location: ' . url('login'));
                exit;
            }
        } catch (\Throwable $th) {
            $_SESSION['error'] = $th->getMessage();
            header('location:' . url('login'));
            exit;
        }
        
    }
    public function formLogin()
    {
        if (isset($_SESSION['account'])) {
            header('location: '. url(''));
        }
        $this->renderViewClient('login');
    }
    public function login()
    {
        if (isset($_SESSION['account'])) {
            header('location: '. url(''));
        }
        try {
            $account = $this->account->findByEmail($_POST['email']);
            if (empty($account)) {
                throw new \Exception('Email này không tồn tại !!!');
            }
            $flag = password_verify($_POST['password'], $account['password']);
            if ($flag) {
                $_SESSION['account'] = $account;
                header('location:' . url(''));
                exit;
            }
            throw new \Exception('Password không đúng !!!');
        } catch (\Throwable $th) {
            $_SESSION['error'] = $th->getMessage();
            header('location:' . url('login'));
            exit;
        }
    }
    public function logout() {
        unset($_SESSION['account']);
        header('Location: ' . url('') );
        exit;
    }
}
