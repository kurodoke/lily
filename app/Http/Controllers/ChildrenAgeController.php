<?php

namespace App\Http\Controllers;

use App\Models\ChildrenAge;
use App\Http\Requests\StoreChildrenAgeRequest;
use App\Http\Requests\UpdateChildrenAgeRequest;
use Illuminate\Contracts\View\View;

class ChildrenAgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('managemen.umur.index');
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
    public function store(StoreChildrenAgeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ChildrenAge $childrenAge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChildrenAge $childrenAge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChildrenAgeRequest $request, ChildrenAge $childrenAge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChildrenAge $childrenAge)
    {
        //
    }
}
