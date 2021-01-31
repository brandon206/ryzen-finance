<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Account $account)
    {
        return $account->categories;
    }
    public function show(Account $account, Category $category)
    {
        return $category;
    }
}
