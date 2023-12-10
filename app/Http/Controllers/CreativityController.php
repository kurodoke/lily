<?php

namespace App\Http\Controllers;

use App\Models\Creativity;
use App\Http\Requests\StoreCreativityRequest;
use App\Http\Requests\UpdateCreativityRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class CreativityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $creativities = Creativity::select('id', 'creativity_name')->orderBy('id')->get();
        return view('admin.managemen.kreatifitas.index', compact('creativities'));
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
    public function store(StoreCreativityRequest $request) : RedirectResponse
    {
        $validated = $request->validated();

        Creativity::create([
            "creativity_name" => $validated['creativity_name'],
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
            'data' => Creativity::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Creativity $creativity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCreativityRequest $request, string $id) : RedirectResponse
    {
        $validated = $request->validated();

        Creativity::find($id)->update([
            "creativity_name" => $validated['creativity_name'],
        ]);

        return redirect()->back()->with('success', ['title' => 'Edit','message' => 'Berhasil Mengedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        Creativity::find($id)->delete();

        return redirect()->back()->with('success', ['title' => 'Hapus','message' => 'Berhasil Menghapus']);
    }
}
