<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\royalebread_584;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    // Main Roti Project
    public function dashboard()
    {
        return view("dashboard", ["key" => "Dashboard"]);
    }

    public function produk()
    {
        return view("produk", ["key" => "Produk"]);
    }

    public function keranjang()
    {
        return view("keranjang", ["key" => "Keranjang"]);
    }

    public function delivery()
    {
        return view("delivery", ["key" => "Delivery"]);
    }

    public function profile()
    {
        return view("profile", ["key" => "Profile"]);
    }

    public function rotiroyale()
    {
        $rotiroyale = royalebread_584::orderBy('id', 'desc')->get();
        return view("RotiRoyale", ["key" => "Roti_Royale", "rr" => $rotiroyale]);
    }

    public function saverotiroyale(Request $request)
    {
        $file_name = time() . "-" . $request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('foto', $file_name, 'public');
        royalebread_584::create([
            'nama' => $request->nama,
            'rasa' => $request->rasa,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'foto' => $path
        ]);

        return redirect('/Roti_Royale')->with('alert', 'Data berhasil disimpan!!!');
    }

    public function formaddrotiroyale()
    {
        return view("form-add-roti", ["key" => "Roti_Royale"]);
    }

    public function formeditrotiroyale($id)
    {
        $rotiroyale = royalebread_584::find($id);
        return view("form-edit-roti", ["key" => "Roti_Royale", "rr" => $rotiroyale]);
    }

    public function updaterotiroyale($id, Request $request)
    {
        $rotiroyale = royalebread_584::find($id);

        // Update roti details
        $rotiroyale->nama = $request->nama;
        $rotiroyale->rasa = $request->rasa;
        $rotiroyale->harga = $request->harga;
        $rotiroyale->stok = $request->stok;

        // Handle the foto upload
        if ($request->hasFile('foto')) {
            // Delete the old foto file if it exists
            if ($rotiroyale->foto) {
                Storage::disk('public')->delete($rotiroyale->foto);
            }

            // Store the new foto file
            $file_name = time() . "-" . $request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('foto', $file_name, 'public');
            $rotiroyale->foto = $path;
        }

        // Save the updated roti record
        $rotiroyale->save();
        return redirect('/Roti_Royale')->with('alert', 'Data berhasil diubah!!!');
    }

    public function deleterotiroyale($id)
    {
        $rotiroyale = royalebread_584::find($id);

        if( $rotiroyale->foto)
        {
            Storage::disk('public')->delete($rotiroyale->foto);
        }

        $rotiroyale->delete();

        return redirect('/Roti_Royale')->with('alert','Data berhasil dihapus!!!');
    }

    public function login()
    {
        return view('login');
    }

    public function formedituser()
    {

        return view('form-edit-user', ["key" => ""]);
    }

    public function updateuser(Request $request)
    {
        if($request->password_baru == $request->konfirmasi_password)
        {
            //Ambil User Login
            $user = Auth::user();

            //Ubah Passwordnya
            $user->password = bcrypt($request->password_baru);
            $user->save();

            //Kembalikan ke /user
            return redirect('/User')->with("info", "Password Berhasil Diubah");
        }
        else
        {
            return redirect('/User')->with("info", "Password Gagal Diubah");
        }
    }
}
