<?php

namespace App\Http\Controllers;

use App\Models\Learn;
use App\Http\Requests\StoreLearnRequest;
use App\Http\Requests\UpdateLearnRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class LearnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $learns = Learn::select('id', 'learn_name')->orderBy('id')->get();
        return view('admin.managemen.pembelajaran.index', compact('learns'));
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
    public function store(StoreLearnRequest $request) : RedirectResponse
    {
        $validated = $request->validated();

        Learn::create([
            "learn_name" => $validated['learn_name'],
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
            'data' => Learn::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Learn $learn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLearnRequest $request, string $id) : RedirectResponse
    {
        $validated = $request->validated();

        Learn::find($id)->update([
            "learn_name" => $validated['learn_name'],
        ]);

        return redirect()->back()->with('success', ['title' => 'Edit','message' => 'Berhasil Mengedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        Learn::find($id)->delete();

        return redirect()->back()->with('success', ['title' => 'Hapus','message' => 'Berhasil Menghapus']);
    }
}
