<?php 

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;


class ClientController extends Controller{
	function index(){
		$data['list_produk'] =  Produk::all();
		$data['list_kategori'] =  Kategori::all();

		return view('client.index', $data);
	}
}
?>