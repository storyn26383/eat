<?php

namespace App\Http\Controllers;

use Auth;
use App\Eat;
use App\Http\Requests\EatRequest;

class EatController extends Controller
{
    public function __construct()
    {
        $this->middleware('eat', [
            'only' => ['edit', 'update', 'destroy']
        ]);
    }

    public function index()
    {
        return view('eat.index', [
            'eats' => Eat::with('user')->paginate(),
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

    public function edit(Eat $eat)
    {
        return view('eat.edit', compact('eat'));
    }

    public function update(EatRequest $request, Eat $eat)
    {
        $eat->update($request->all());

        return redirect(route('eat.index'));
    }

    public function destroy(Eat $eat)
    {
        $eat->delete();

        return back();
    }
}
