<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tin;
use App\ykien;
use App\Middleware\Quantri;
class TintucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $ds=tin::select('idTin','TieuDe','TomTat','Ngay','AnHien','TinNoiBat','idTL','idLT','SoLanXem')
        ->orderBy('idTin','desc')
        ->paginate(5);
        return view('quantri.tintuc.index', compact('ds'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('quantri.tintuc.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $arr= explode("/",$request->get('Ngay'));
        if (count($arr)==3) $n = $arr[2]."-". $arr[1]."-".$arr[0];
        else $n = date("Y-m-d");
        $t = new tin([
            'TieuDe' => $request->get('TieuDe'),
            'TomTat' => $request->get('TomTat'),
            'Ngay' => $n,
            'idTL' => $request->get('idTL'),
            'idLT' => $request->get('idLT'),
            'lang' => $request->get('lang'),
            'AnHien' => $request->get('AnHien'),
            'TinNoiBat' => $request->get('TinNoiBat'),
            'urlHinh' => 'upload/images/'.$request->get('urlHinh'),
            'tags' => $request->get('tags'),
            'Content' => $request->get('Content'),
        ]);
        $t->save();
        return redirect('/tintuctuc')->with('success','Tin đã được lưu');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=tin::find($id);
        return  \view('quantri.tintuc.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $arr= explode("/",$request->get('Ngay'));
        if (count($arr)==3) $n = $arr[2]."-". $arr[1]."-".$arr[0];
        else $n = date("Y-m-d");
        $t = tin::find($id);
        $t->TieuDe =   $request->get('TieuDe');
        $t->TomTat = $request->get('TomTat');
        $t->Ngay = $n;
        $t->idTL = $request->get('idTL');
        $t->idLT = $request->get('idLT');
        $t->lang = $request->get('lang');
        $t->AnHien = $request->get('AnHien');
        $t->TinNoiBat = $request->get('TinNoiBat');
        $t->urlHinh =  'upload/images/'.$request->get('urlHinh');
        $t->tags = $request->get('tags');
        $t->Content = $request->get('Content');
        $t->save();
        return redirect('/tintuc')->with('success','Cập nhật tin thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)  {
        $yk = ykien::where('idTin', $id)->get();
       if($yk->isNotEmpty()){
        return redirect('/tintuc')->with('danger', 'không xóa được khi có ý kiến ');

       }else {
        tin::destroy($id);
        return redirect('/tintuc')->with('success', 'Đã xóa xong');

       }



    }

}
