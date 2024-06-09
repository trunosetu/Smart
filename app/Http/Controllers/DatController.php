<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\DataSensor;

 
class DatController extends Controller
{
    public function index(){
    	$nama = "Diki Alfarabi Hadi";
 
    	$pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
 
    	return view('bio',['nama' => $nama , 'matkul' => $pelajaran]);
    }
	public function data()
    {
        $dataSen = DataSensor::orderBy('created_at','desc')->get();
        return view('dashboard.dashboard', compact('dataSen'));
    }
	public function data2()
    {
        
        $gus = DataSensor::orderBy('created_at')->get();
        return view('dashboard.dashboard', compact('gus'));
        
    }
}