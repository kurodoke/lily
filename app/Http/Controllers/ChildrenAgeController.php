<?php

namespace App\Http\Controllers;

use App\Models\ChildrenAge;
use App\Http\Requests\StoreChildrenAgeRequest;
use App\Http\Requests\UpdateChildrenAgeRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ChildrenAgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $ages = ChildrenAge::select('id', 'age_min', 'age_max')->orderBy('id')->get();
        return view('managemen.umur.index', compact('ages'));
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
    public function store(StoreChildrenAgeRequest $request) :RedirectResponse
    {
        $validated = $request->validated();

        ChildrenAge::create([
            "age_min" => $validated['age_min'],
            "age_max" => $validated['age_max'],
        ]);
        
        return redirect()->back()->with('success', ['title' => 'Tambah','message' => 'Berhasil Menambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id) : JsonResponse
    {
        return response()->json([
            'code' => Response::HTTP_OK,
            'message' => 'success',
            'data' => ChildrenAge::findOrFail($id),
        ]);
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
    public function update(UpdateChildrenAgeRequest $request, string $id) : RedirectResponse
    {
        $validated = $request->validated();

        ChildrenAge::find($id)->update([
            "age_min" => $validated['age_min'],
            "age_max" => $validated['age_max'],
        ]);

        return redirect()->back()->with('success', ['title' => 'Edit','message' => 'Berhasil Mengedit']);
    }

    /** 
     * Remove the specified resource from storage.
     */
    public function destroy(String $id) : RedirectResponse
    {
        ChildrenAge::find($id)->delete();

        return redirect()->back()->with('success', ['title' => 'Delete','message' => 'Berhasil Menghapus']);
    }
}
