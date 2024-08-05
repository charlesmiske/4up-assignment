<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lists;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = lists::query()
        ->orderBy('created_at', 'DESC')->paginate(20);
        return view('list', ['listData' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string'
        ]);
        $data['active'] = 1;
        try {
            lists::create($data);
            return to_route('list.index')->with('success', 'Successfully added list');
        } catch (\Exception $e) {
            return to_route('list.index')->with('fail', $e->getMessage());
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
