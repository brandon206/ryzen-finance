<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function index()
    {
        return Account::all();
    }

    public function show(Account $account)
    {
        return Account::show($account);
    }
}
