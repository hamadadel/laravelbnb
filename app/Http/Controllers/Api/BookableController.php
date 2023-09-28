<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bookable;

class BookableController extends Controller
{
    public function index()
    {
        return Bookable::select('*')->offset(0)->limit(100)->get();
    }

    public function show($id)
    {
        return Bookable::findOrFail($id);
    }
}
