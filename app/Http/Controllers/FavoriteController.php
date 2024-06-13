<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function store($ptoduct_id)
    {
        Auth::user()->favorite_products()->attach($ptoduct_id);

        return back();
    }

    public function destroy($ptoduct_id)
    {
        Auth::user()->favorite_products()->detach($ptoduct_id);

        return back();
    }
}
