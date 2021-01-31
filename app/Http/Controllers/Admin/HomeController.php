<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home', [
            'title' => 'Beranda',
            'author' => Author::count(),
            'book' => Book::count(),
            'borrow_history' => BorrowHistory::isBorrowed()->count(),
            'user' => User::count(),
        ]);
    }
}
