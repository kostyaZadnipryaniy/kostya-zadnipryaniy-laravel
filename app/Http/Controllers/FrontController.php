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
            'value' => '',
        ]);
        return view('Front.store');
    }

    public function update()
    {
        $front = Front::find(3);
        $front->update([
            'comment' =>'new',
            'value' => 2,
        ]);
        return 'update';
    }

    public function delete(){
       $front = Front::find(2);
       $front->delete();
       return 'delete';
        //  $front = Front::withTrashed()->find(2);
        //  $front->restore();
        // return 'delete';

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
