<?php
namespace Minhhai\Duan\Controllers\Admin;

use Minhhai\Duan\Commons\Controller;
use Minhhai\Duan\Commons\Helper;
use Minhhai\Duan\Models\Account;

class AccountController extends Controller{
    private Account $account;
    public function __construct(){
        $this->account = new Account();
    }
    public function index(){
        $dataAccs = $this->account->all();
        $this->renderViewAdmin('accounts.index',[
            'dataAccs'=> $dataAccs
        ]);
    }
    public function formedit($id){
        $editFormAcc = $this->account->findByID($id);
        $this->renderViewAdmin('accounts.edit',[
            'editFormAcc'=> $editFormAcc
        ]);
    }
    public function updateUser($id){
        $data = [
            'role' => $_POST['role']
        ];
        $this->account->update($id,$data);
        header('location:' .url('admin/accounts'));
    }
}