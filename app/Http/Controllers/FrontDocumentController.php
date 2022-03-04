<?php

namespace App\Http\Controllers;
use App\Document;
use App\Http\Requests\FrontDocumentRequest;

class FrontDocumentController extends Controller
{
    //В контроллере создать свой метод который выводит форму для поиска документов.
    public function index()
    {
        $FrontDocument = Document::all();
        return view('FrontDocument', compact('FrontDocument'));
    }

    public function create(){
        return view('FrontDocument.create');
    }


    //В контроллере создать метод, который будет обрабатывать форму.
    public function store() {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
        ]);
        Document::create($data);
        return redirect()->route('FrontDocument');
     }

     public function show(Document $doc) {
        return view('FrontDocument.show', compact('doc'));
    }

    public function edit(Document $doc) {
        return view('FrontDocument.edit', compact('doc'));
    }

    public function update(Document $doc) {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
        ]);
        $doc->update($data);
        return redirect()->route('FrontDocument.show', $doc->id);
    }

    public function delete(Document $doc) {
        return view('FrontDocument.delete', compact('doc'));
    }


}
