<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function shows(): View|Factory|Application
    {
        $shows = Show::all();
        return view('shows.shows', ['shows' => $shows]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|Factory|Application
    {
        return view('shows.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Application|Redirector|RedirectResponse
    {
        $data = $request->validate([
            'title' => 'required',
            'rating' => 'required|numeric',
            'is_active' => 'required|boolean',
            'release_date' => 'required|date',
            'description' => 'required',
        ]);

        Show::create($data);
        return redirect(route('shows'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View|Factory|Application
    {
        $show = Show::find($id);
        return view('shows.show', ['show' => $show]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View|Factory|Application
    {
        $show = Show::find($id);
        return view('shows.edit', compact('show'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): Application|Redirector|RedirectResponse
    {
        $data = $request->validate([
            'title' => 'required',
            'rating' => 'required|numeric',
            'is_active' => 'required|boolean',
            'release_date' => 'required|date',
            'description' => 'required',
        ]);

        $show = Show::find($id);
        $show->update($data);
        return redirect(route('shows'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Show::destroy($id);
        return redirect()->route('shows');
    }
}
