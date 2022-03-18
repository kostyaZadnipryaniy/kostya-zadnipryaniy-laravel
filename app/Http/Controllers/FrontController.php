<?php

namespace App\Http\Controllers;
use App\Front;

class FrontController extends Controller{

    public function index()
    {
        $front = Front::all();
        return view('Front.index', compact('front'));
    }

    public function create(){
        
        return view('Front.create');
    }
    
    public function store(){
        $data = request()->validate([
            'comment' => 'string',
            'value' => 'integer',
        ]);
        Front::create($data);
        return redirect()->route('Front.index');
    }

    public function show(Front $front){
        return view('Front.show', compact('front'));
    }

    public function edit(Front $front){
        return view('Front.edit', compact('front'));
    }

    public function update(Front $front)
    {
        $data = request()->validate([
            'comment' => 'string',
            'value' => 'integer',
        ]);
        $front->update($data);
        return redirect()->route('Front.show', $front->id);
    }

    public function destroy(Front $front)
    {
        $front->delete();
        return redirect()->route('Front.index');
    }


    public function firstOrCreate(){
        $frontArray = [
            'comment' =>'some',
            'value' => 9,
        ];
        $fr = Front::firstOrCreate(['comment' =>'some',], [
            'comment' =>'some',
            'value' => 9,
        ]);

        return 'everything';
    }
    public function updateOrCreate(){
        $frontArray = [
            'comment' =>'somme',
            'value' => 11,
        ];
        $fr = Front::updateOrCreate(['comment' =>'somme',], [
            'comment' =>'somme',
            'value' => 9,
        ]);

        return 'everything';
    }

}
