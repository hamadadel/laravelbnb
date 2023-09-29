<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookableIndexResource;
use App\Http\Resources\BookableShowResource;
use Illuminate\Http\Request;
use App\Models\Bookable;
use Illuminate\Database\Eloquent\Collection;

class BookableController extends Controller
{
    public function index()
    {
        // return Bookable::select('*')->offset(0)->limit(100)->get();
        return BookableIndexResource::collection(Bookable::select('*')->offset(0)->limit(100)->get());
    }

    public function show($id)
    {
        // return Bookable::findOrFail($id);
        return new BookableShowResource(Bookable::findOrFail($id));
    }
}
