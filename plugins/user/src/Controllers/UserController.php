<?php

namespace Huyle\User\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Huyle\User\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('User/Index');
    }
}
