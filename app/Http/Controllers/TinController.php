<?php

namespace App\Http\Controllers;
use DB;
use App\ykien;
use App\tin;
use Illuminate\Http\Request;

class TinController extends Controller
{
    public function index(){
        
        return view("index");
    }
    public function chitiettin($id){
        $tin =DB::table("tin")->join('loaitin','tin.idLT','loaitin.idLT')->where("idTin",$id)->where("tin.AnHien",1)->first();
        $cmt = DB::table("ykien")->where("idTin",$id)->where("AnHien",1)->get();
        $listykien = DB::table('ykien')->where('idTin',$id)->count();
        $id_LT = $tin->idLT;
        $tinlienquan = DB::table("tin")
        ->join('loaitin','tin.idLT','loaitin.idLT')
        ->where("tin.idLT",$id_LT)->where("tin.AnHien",1)
        ->get();
        $post = tin::findOrFail($id);
        $post->increment('SoLanXem');
        $post->save();
        $data = ['tin'=>$tin,'bl'=>$cmt,'listykien'=>$listykien,'tinlienquan'=>$tinlienquan];
        return view("chitiettin", $data);
    }
    public function tintrongloai($idLT,$pageNum=1){
        $kq= DB::table("tin")->select('idTin','TieuDe','TomTat','urlHinh','Ngay','SoLanXem')
        ->where("idLT",$idLT)->where("AnHien",1)->paginate(5);
        $TenLT= DB::table("loaitin")->where("idLT",$idLT)->value("Ten");
        $idTL = DB::table("loaitin")->where("idLT",$idLT)->value("idTL");
        $listykien = DB::table('ykien')->where('idTin',$idLT)->count();
        $TenTL= DB::table("theloai")->where("idTL",$idTL)->value("TenTL");
        
        $data = ['listtin'=>$kq,'idTL'=>$idTL,'TenLT'=>$TenLT,'TenTL'=>$TenTL,'idLT'=>$idLT,'listykien'=>$listykien];
        return view("tintrongloai",$data);
    }
    public function tintheotheloai($idTL,$pageNum=1){
        $tintheotheloai = DB::table('tin')->select('idTin', 'TieuDe',"TenTL", 'Ngay','urlHinh','SoLanXem','TomTat')
        ->join('theloai', 'tin.idTL', '=', 'theloai.idTL')
        ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
        ->offset(0)->limit(4)->paginate(5);
        $TenTL= DB::table("theloai")->where("idTL",$idTL)->value("TenTL");
        $listykien = DB::table("ykien")->where("idTin",$idTL)->count();
        $data =['tintheotheloai'=>$tintheotheloai,'TenTL'=>$TenTL,'listykien'=>$listykien];
        return view("tintheotheloai",$data);
    }
   
    public function search(Request $request){
        $search = $request->get('search');
        $posts = DB::table('Tin')->where("TieuDe","like","%".$search."%")->paginate(5);

        return view("search",['posts'=>$posts],['search'=>$search]);
    }
    function lienhe(){
        $d=array('title'=>'Lien He');
        return view('lienhe',$d);
    }
    function baocao(){
        
        return view('baocao');
    }
    function ykien(Request $request,$id){
        $data=array(
            'HoTen' => $request -> name,
            'Email' => $request -> email,
            'NoiDung' => $request -> content,
            'idTin'=>$id
        );
        ykien::create($data);
        return redirect("tin/$id");
    }
}
