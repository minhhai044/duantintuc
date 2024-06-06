<?php
namespace Minhhai\Duan\Controllers\Admin;

use Minhhai\Duan\Commons\Controller;
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
}