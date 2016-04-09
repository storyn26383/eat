<?php

namespace App\Http\Controllers;

use Auth;
use App\Eat;
use App\Http\Requests\EatRequest;

class EatController extends Controller
{
    public function index()
    {
        return view('eat.index', [
            'eats' => Eat::paginate(),
        ]);
    }

    public function create()
    {
        return view('eat.create');
    }

    public function store(EatRequest $request)
    {
        Auth::user()->eats()->create($request->all());

        return redirect(route('eat.index'));
    }
}