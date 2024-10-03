<?php

namespace App\Http\Controllers;

use App\Models\Rekomendasi;
use App\Http\Requests\StoreRekomendasiRequest;
use App\Http\Requests\UpdateRekomendasiRequest;
use App\Models\Level;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RekomendasiController extends Controller
{
    public function show(){
        $data['rekomendasi'] = Rekomendasi::all();
        $data['total'] = $data['rekomendasi']->count();
        $data['pengguna']= Auth::user()->name;
        return view('dashboard', $data);
    }
    public function create(){
        $data['levels'] = Level::all();
        // $data['user']
        return view('user-create', $data);
    }
    // public function add(Request $request){
    //     $filename = '';
    //     if ($request -> file('gambar')) {
    //         $ext = $request->file('gambar')->getClientOriginalExtension();
    //         $filename = time().'.'.$ext;
    //         $request->file('gambar')->storeAs('gambar', $filename);
    //     }
    //     Rekomendasi::create([
    //         'name'=>$request->name,
    //         'rekomendasi' =>$request->rekomendasi,
    //         'deskripsi'=>$request->deskripsi,
    //         'gambar'=>$filename
    //     ]);
    //     return redirect('dashboard');
    // }
    public function add(Request $request){
        $validateData = $request->validate([
            'name' =>['required', 'min:3'],
            'email' =>['required', 'email'],
            'levels_id' =>'required',
            'gambar' =>'image'
        ]);
        $filename ='';
        if ($request->file('gambar')) {
            $extfile = $request->file('gambar')->getClientOriginalExtension();
            $filename = time().".". $extfile;
            $request->file('gambar')->storeAs('gambar', $filename);
        }
        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password'=>$request->password ? bcrypt($request->password): DB ::raw('password'),
            'levels_id'=>$request->levels_id
        ]);
        return  redirect('/rekomendasi-create');
    }
    public function delete(Request $request){
        $hapus = Rekomendasi::find($request->id);
        // Storage::delete('/gambar/', $hapus->gambar);
        $hapus->delete();
        return redirect('dashboard');
    }

    public function search(Request $request){

        $data['rekomendasi'] = Rekomendasi::where('name','Like','%'.$request->cari.'%')
        ->orwhere('deskripsi','LIKE','%'.$request->cari.'%')->get();

        return view('dashboard', $data);
    }
    public function edit(Request $request){
        $data['rekomendasi'] = Rekomendasi::find($request->id);
        return view('rekomendasi-update', $data);
    }
    public function update(Request $request){
        $rekomendasi = Rekomendasi::where('id', $request->id)->first();

        if ($request->gambar) {
            Storage::delete('/gambar/'.$rekomendasi->gambar);

            $filename ='';
            if ($request->file('gambar')) {
                $ext =$request->file('gambar')->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $request->file('gambar')->storeAs('/gambar', $filename);
            }
            Rekomendasi::where('id',$request->id)->update([
                'name' =>$request->name,
                'deskripsi'=>$request->deskripsi,
                'gambar'=>$filename
            ]);
            return redirect('dashboard');
        }else {
            Rekomendasi::where('id',$request->id)->update([
                'name'=>$request->name,
                'deskripsi'=>$request->deskripsi,
            ]);
            return redirect('dashboard');
        }
        return redirect('dashboard');
    }


}
