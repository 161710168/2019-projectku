<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikels;
use App\barangs;
use App\galeris;
use App\kategoris;
use App\kategoriartikels;
use App\testimonis;
class FrontEndController extends Controller
{ 

    public function index ()
    {
    	return view('frontend.index');
    }

    public function artikels ()
    {
    	$artikels = artikels::all();
    	return view('frontend.blog', compact('artikels'));
    }
    public function filter_artikels($id)
    {
        $kategoriartikelp = artikels::where('kategoriartikel_id','=',$id)->get();
        return view('frontend.blog', compact('kategoriartikelp'));
    }
    public function galeris ()
    {
        $galeris = galeris::all();
        $img->resize(128, null, function ($constraint) {
            $constraint->aspectRatio();
          });
    	return view('frontend.galeri', compact('galeris'));
    }
    public function testimonis ()
    {
    	$testimonis = testimonis::all();
    	return view('frontend.testimoni', compact('testimonis'));
    }
    public function kategoris ()
    {
    	$kategoris = kategoris::all();
    	return view('frontend.produk', compact('kategoris'));
    }
    public function kategoriartikels ()
    {
    	$kategoriartikels = kategoriartikels::all();
    	return view('frontend.blog', compact('kategoriartikels'));
    }
    
    public function barangs()
    {
        $kategorip = barangs::orderBy('created_at','DESC')->paginate(6);
        return view('frontends.produk',compact('kategorip'));
    }
    public function filter_barangs($id)
    {
        $kategorip = barangs::where('kategori_id','=',$id)->get();
        return view('frontends.produk', compact('kategorip'));
    }
    
    public function single(artikels $artikels)
    {
    return view('frontend.single',compact('artikels'));
    }
    public function singleproduk(barangs $barangs)
    {
    
    return view('frontend.singleproduk',compact('barangs'));
    }
    

}
