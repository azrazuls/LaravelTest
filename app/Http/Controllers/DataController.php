<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Data;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $datas = Data::all();
        return view('datas.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('datas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
    $input = $request->except('_token');

        // Convert 'Yes' to 1 and 'No' to 0
        $input['publish'] = isset($input['publish']) && $input['publish'] == 'Yes' ? 1 : 0;

        Data::create($input);

        return redirect('data')->with('flash_message', 'Product Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $data = Data::find($id);
        return view('datas.show')->with('datas', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $data = Data::find($id);
        return view('datas.edit')->with('datas', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $data = Data::find($id);

        // Exclude the "_token" field from the $input array
        $input = $request->except(['_token']);

        // Check if 'publish' key is present and set it to true if 'Yes' is selected
        $input['publish'] = isset($input['publish']) && $input['publish'] == '1';

        $data->update($input);

        return redirect('data')->with('flash_message', 'Product Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Data::destroy($id);
        return redirect('data')->with('flash_message', 'Product deleted!');
    }

    public function search(Request $request)
{
    $search_text = $request->input('search');

    // If there is a search term, filter the data
    if (!empty($search_text)) {
        $datas = Data::where('name', 'LIKE', '%' . $search_text . '%')->get();
    } else {
        // If no search term, get all data
        $datas = Data::all();
    }

    return view('datas.index', compact('datas', 'search_text'));
}



}
