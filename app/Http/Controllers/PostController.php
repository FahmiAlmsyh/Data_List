<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

public function __construct(){
    $this->middleware('auth');
    $this->middleware('is_admin');
    $this->middleware('verified');
}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // if(!Auth::check()){
        //     return redirect('login');
        // }

        $data = Siswa::get();

        $data = [
            'data' => $data,
        ];
        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::check()){
            return redirect('login');
        }

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!Auth::check()){
            return redirect('login');
        }

        // $nama = $request->input('nama');
        // $kelas = $request->input('kelas');
        // $sekolah = $request->input('sekolah');

     

        Siswa::create([
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'sekolah' => $request->input('sekolah'),
        ]);

        return redirect('posts')->with('success', 'Data berhasil disimpan.');
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
        if(!Auth::check()){
            return redirect('login');
        }

        $siswa = Siswa::where('id', $id)->first();

        $data = [
            'posts' => $siswa
        ];

        return view('posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(!Auth::check()){
            return redirect('login');
        }
        

        // $nama = $request->input('nama');
        // $kelas = $request->input('kelas');

        Siswa::where('id', $id)
        ->update([
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'sekolah' => $request->input('sekolah'),
    ]);

    return redirect("posts");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if(!Auth::check()){
            return redirect('login');
        }

        Siswa::selectById($id)->delete();

        return redirect('posts');
    }
}
