<?php

namespace App\Http\Controllers;

use App\File;
use App\Storage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all();
        $storages = Storage::all();
        $items_storage = Storage::all(['id', 'name']);
        return view('home', ['files' => $files, 'storages' => $storages, 'items_storage' => $items_storage]);
    }

    public function show($id)
    {
        $file = File::find($id);
        if (empty($file)) {
            abort(404);
        }
        return view('home', ['files' => $file]);
    }

    public function storeFile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => '',
        ]);

        File::create($request->all());
        return redirect('home');
    }

    public function destroyFile($id)
    {
        $file = File::find($id);
        if (empty($file)) {
            abort(404);
        }
        $file->delete();
        return redirect('home');
    }

    public function storeStorage(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => '',
        ]);

        Storage::create($request->all());
        return redirect('home');
    }

    public function destroyStorage($id)
    {
        $storage = Storage::find($id);
        if (empty($storage)) {
            abort(404);
        }
        $storage->delete();
        return redirect('home');
    }
}
