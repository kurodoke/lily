<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoretagRequest;
use App\Http\Requests\UpdatetagRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $tags = Tag::select('id', 'tag_name')->orderBy('id')->get();
        return view('managemen.tag.index', compact('tags'));
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
    public function store(StoretagRequest $request) : RedirectResponse
    {
        $validated = $request->validated();

        Tag::create([
            "tag_name" => $validated['tag_name'],
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
            'data' => Tag::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetagRequest $request, string $id) : RedirectResponse
    {
        $validated = $request->validated();

        Tag::find($id)->update([
            "tag_name" => $validated['tag_name'],
        ]);

        return redirect()->back()->with('success', ['title' => 'Edit','message' => 'Berhasil Mengedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        Tag::find($id)->delete();

        return redirect()->back()->with('success', ['title' => 'Hapus','message' => 'Berhasil Menghapus']);
    }
}
