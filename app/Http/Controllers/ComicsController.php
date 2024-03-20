<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Validation\Rule;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $form_data = $request->all();
        Comic::create($request->validate(
            [
                'title' => 'required|unique:comics|max:250',
                'description' => 'nullable|string',
                'thumb' => 'active_url',
                'price' => 'required|numeric|regex:/^\d{1,3}(\.\d{1,2})?$/',
                'series' => 'required|max:50',
                'sale_date' => 'required|date_format:Y-m-d',
                'type' => 'required'
            ]
        ));
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $comic->update($request->validate(
            [
                'title' => [
                    'required',
                    Rule::unique('comics')->ignore($comic),
                    'max:250',
                ],
                'description' => 'nullable|string',
                'thumb' => 'active_url',
                'price' => 'required|numeric|regex:/^\d{1,3}(\.\d{1,2})?$/',
                'series' => 'required|max:50',
                'sale_date' => 'required|date',
                'type' => 'required'
            ]
        ));
        return redirect()->route('comics.show',  $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
