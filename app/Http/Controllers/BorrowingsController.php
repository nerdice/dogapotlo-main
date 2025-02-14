<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BorrowingsController extends Controller
{
    public function index() {
        $users = User::with('books')->get();
        return view('borrowings.index', compact('users'));
    }
}
