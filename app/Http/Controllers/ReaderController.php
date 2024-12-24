<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reader= Reader::latest()->get();
        return view('readers.index', compact('reader'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('readers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name'=>'required',
            'birthday' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        $reader = Reader::create($request->all());
        return redirect() -> route('readers.index')
            ->with ('success','Reader added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reader = Reader::findOrFail($id);
        return view('readers.show',compact('reader'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reader = Reader::findOrFail($id);
        return view('readers.edit',compact('reader'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'birthday' => 'required',
            'address' => 'required',
            'phone' => 'required',
        
        ]);
        $reader = Reader::findOrFail($id);
        $reader->update([
            'name' => $request->name,
            'birthday' => $request->birthday,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);
        return redirect()->route('readers.index')->with('success','Cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reader = Reader::findOrFail($id);
        $reader -> delete();
        return redirect()->route('readers.index')->with('success','Xóa thành công.');
    }
}
