<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        $data = Guru::all();
        return view('dataguru', compact ('data'));
    }

    public function tambahguru(){
        return view('tambahguru');
    }

    public function inputguru(Request $request){
        Guru::create($request->all());
        return redirect()->route('guru');
    }

    public function tampilguru($id){
        $data = Guru::find($id);
        return view('tampilguru',compact('data'));
    }

    public function hapus($id){
        $data = Guru::find($id);
        $data->delete();
        return redirect('guru');
    }

    public function updateguru(Request $request, $id){
        $data=Guru::find($id);
        $data->update($request->all());
        return redirect()->route('guru');
    }
}