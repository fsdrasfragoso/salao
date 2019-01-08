<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FileEntry;
class FileEntriesController extends Controller
{
   protected $fillable = ['filename', 'mime', 'path', 'size'];
    
    public function uploadFile(Request $request) {
        $file = Input::file('file');
        $filename = $file->getClientOriginalName();

        $path = hash( 'sha256', time());

        if(Storage::disk('uploads')->put($path.'/'.$filename,  File::get($file))) {
            $input['filename'] = $filename;
            $input['mime'] = $file->getClientMimeType();
            $input['path'] = $path;
            $input['size'] = $file->getClientSize();
            $file = FileEntry::create($input);

            return response()->json([
                'success' => true,
                'id' => $file->id
            ], 200);
        }
        return response()->json([
            'success' => false
        ], 500);
    }
    
    public function index() {
    $files = FileEntry::all();

    return view('file', compact('files'));
}

}
