<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Index', [
            'name' => 'John Doe',
        ]);
    }

    public function show()
    {
      return inertia('Show');
    }
}
