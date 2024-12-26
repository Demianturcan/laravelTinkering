<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function films(): View|Factory|Application
    {
        //$films = Film::getAll();
        $films = Film::all();
        return view('films.films', ['films' => $films]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|Factory|Application
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request): Application|Redirector|RedirectResponse
    {

       $data=$request->validate([
           'title'=>'required',
           'director'=>'required',
           'year'=>'required|numeric',
       ]);
       Film::create($data);
       return redirect(route('films'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::find($id);
        return view('films/show', ['film' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $film = Film::find($id);
        return view('films.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): Application|Redirector|RedirectResponse
    {
        $data = $request->validate([
            'title'=>'required',
            'director'=>'required',
            'year'=>'required|numeric',
        ]);

        $film = Film::find($id);
        $film->update($data);
        return redirect(route('films'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Film::destroy($id);
        return redirect(route('films'));
    }


}
