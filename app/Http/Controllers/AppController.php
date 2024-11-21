<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function showPage(Request $r) {
        $data = Application::get();
    }
}
