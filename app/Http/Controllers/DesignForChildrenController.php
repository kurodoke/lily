<?php

namespace App\Http\Controllers;

use App\Models\DesignForChildren;
use App\Http\Requests\StoreDesignForChildrenRequest;
use App\Http\Requests\UpdateDesignForChildrenRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class DesignForChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $design = DesignForChildren::select('id', 'design_name')->orderBy('id')->get();
        return view('managemen.design.index', compact('design'));
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
    public function store(StoreDesignForChildrenRequest $request) : RedirectResponse
    {
        $validated = $request->validated();

        DesignForChildren::create([
            "design_name" => $validated['design_name'],
        ]);
        
        return redirect()->back()->with('success', ['title' => 'Tambah','message' => 'Berhasil Menambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : JsonResponse
    {
        return response()->json([
            'code' => Response::HTTP_OK,
            'message' => 'success',
            'data' => DesignForChildren::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DesignForChildren $designForChildren)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDesignForChildrenRequest $request, string $id) : RedirectResponse
    {
        $validated = $request->validated();

        DesignForChildren::find($id)->update([
            "design_name" => $validated['design_name'],
        ]);

        return redirect()->back()->with('success', ['title' => 'Edit','message' => 'Berhasil Mengedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        DesignForChildren::find($id)->delete();

        return redirect()->back()->with('success', ['title' => 'Hapus','message' => 'Berhasil Menghapus']);
    }
}
