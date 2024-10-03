<?php
namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Rekomendasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    public function authentikasi(Request $request){
        $validasi = $request->validate([
            'email' =>['required'],
            'password' =>['required'],
        ]);
        if (Auth::attempt($validasi)) {
            if (Auth::user()->levels_id == 1) {
                return redirect('/dashboard');
            }else {
                return redirect('/home');
            }
            return redirect('home')->with('pesan', 'login anda berhasil');
        }
        return redirect()->back()->with('pesan', 'login anda gagal');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function home(){
        $data['rekomendasi'] = Rekomendasi::all();
        // $data['deskripsi'] =
        return view('home', $data);
    }
    public function adm(){
        return view('home');
    }
    public function game(){
        return view('game');
    }
    public function robot(){
        return view('robot');
    }
    public function gameanak(){
        return view('gameanak');
    }
    public function gamedewasa(){
        return view('gamedewasa');
    }
    public function harta(){
        return view('harta');
    }
    public function talking(){
        return view('talking');
    }
    public function about(){
        return view('about');
    }

    public function super(){
        return view('super');
    }
    public function show(){
        $data['user'] = User::orderby('name', 'desc')->with('Level')->get();
        // dd($data['user'][0]->Level->nm_level);
        $data['total_user'] = $data ['user']->count();
        return view('user', $data);
    }
    public function search(Request $request){
        $data['rekomendasi'] = Rekomendasi::where('name', $request->cari)->orwhere('deskripsi', $request->cari->get());
        $data['total_user'] = $data['user']->count();
        return view('/dashboard', $data);
    }
    public function create(){
        $data['levels'] = Level::all();
        return view('rekomendasi-create', $data);
    }
    public function add(Request $request){
        $validateData = $request->validate([
            'name' =>['required', 'min:3'],
            'deskripsi' =>['required'],
            'gambar' =>['image']
        ]);
        $filename ='';
        if ($request->file('gambar')) {
            $extfile = $request->file('gambar')->getClientOriginalExtension();
            $filename = time().".". $extfile;
            $request->file('gambar')->storeAs('gambar', $filename);
        }
        $user= Rekomendasi::create([
            'name' =>$request->name,
            'deskripsi' => $request->deskripsi,
            // 'levels_id' => $request->levels_id,
            'gambar' => $filename
        ]);
        return redirect('/dashboard');
    }
    public function delete(Request $request){
        $rekomendasi = User::find($request->id);
        $delete = User::where('id', $request->id)->delete();
        return redirect('/user');
    }
    public function edit(Request $request){
        $data['rekomendasi'] = User::find($request->id);
        return view('rekomendasi-', $data);
    }
    public function update(Request $request){
        $update = User::where('id',$request->id)->update([
            'name' =>$request->name,
            'email'=>$request->email,
            'password'=>$request->password ? bcrypt($request->password): DB::raw('password'),
        ]);
        $rekomendasi = User::findOrFail($request->id);
        if ($rekomendasi->gambar) {
            Storage::delete('gambar'. $rekomendasi->foto);
        }
        return redirect('/user');
    }
}
