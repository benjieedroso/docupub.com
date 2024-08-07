<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

use League\Flysystem\Filesystem;
use Spatie\Dropbox\Client;
use Spatie\FlysystemDropbox\DropboxAdapter;

class DocumentController extends Controller
{   
    private string $path = '/dropboxpath';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Document.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {      
      
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function downloadFile(Request $request){
        $filename = $request->query->get('filename');
        $client = new Client(env('DROPBOX_TOKEN'));
        $adapter = new DropboxAdapter($client);
        $file = $adapter->getUrl("$this->path/$filename");
        dd($file);
    }
}
