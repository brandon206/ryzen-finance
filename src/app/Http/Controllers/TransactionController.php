<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Category;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index(Category $category)
    {
        return $category->transactions;
    }
    public function show(Transaction $transaction)
    {
        return $transaction;
    }
}
