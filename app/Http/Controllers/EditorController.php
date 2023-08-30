<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Content;


class EditorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $this->validate($request, [
                'file' => 'regex:/^[a-zA-Z0-9_\-]*$/',
                'folder' => 'regex:/^[a-zA-Z0-9_\-]*$/',
                'access_level' => 'numeric'
            ]);
            $data = $request->input('json');
            $folder = $request->input('folder');
            $file = $request->input('file');
            $access_level = $request->input('access_level');

            $oldContent = Content::where('folder', $folder)
                ->where('file', $file)
                ->where('access_level', $access_level)
                ->orderBy('version', 'DESC')
                ->first();

            $content = new Content();
            $content->folder = $request->input('folder');
            $content->file = $request->input('file');
            $content->content = json_encode($data);
            $content->post_status = 1;
            $content->access_level = $oldContent->access_level;
            $content->version = $oldContent->version + 1;
            $content->created_by = auth()->user()->id;

            $content->save();
            $oldContent->delete();
            return 'DONE';
        }else {
            return 'FAIL';
        }
    }


    /**
     * Show the application dashboard.
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $this->validate($request, [
            'file' => 'regex:/^[\w-]*$/',
            'folder' => 'regex:/^[\w-]*$/',
            'access_level' => 'numeric'
        ]);
        $folder = $request->input('folder');
        $file = $request->input('file');
        $access_level = $request->input('access_level');
        if($folder && $file) {
            $content = Content::where('folder', $folder)
                ->where('file', $file)
                ->where('access_level', $access_level)
                ->orderBy('version', 'DESC')
                ->first();
            if($content) {
                return response()->json(json_decode($content->content));
            }
        }

        return response()->json(json_decode("[]"));
    }

    /**
     * Show the application dashboard.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function upload(Request $request)
    {
        if(Auth::check()){
            $folder = $request->input('folder');
            $file = $request->file('file');
            $file_name = uniqid().'.'.$file->extension();
            $name = '/content/'.$folder.'/'.$file_name;
            Storage::disk("public")->put($name, file_get_contents($file));
            return '/storage'.$name;
        }
    }

    /**
     * Show the application dashboard.
     * @param Request $request
     * @return mixed
     */
    public function isEditor(Request $request)
    {
        if(Auth::check()){
            return true;
        }else{
            return false;
        }
    }
}
