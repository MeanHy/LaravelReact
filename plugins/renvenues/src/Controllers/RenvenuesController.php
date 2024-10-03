<?php

namespace Huyle\Renvenues\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Huyle\Renvenues\Models\Renvenues;
use Inertia\Inertia;

class RenvenuesController extends Controller
{
    public function index()
    {
        return "Hello";
    }
}
