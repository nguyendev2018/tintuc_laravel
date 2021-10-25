<?php

namespace App\Http\Controllers;
use App\ykien;
use Illuminate\Http\Request;

class YkienController extends Controller
{
    public function index() {
        $ds = ykien::all();
       return view('quantri.ykien.index', compact('ds'));
   }

    public function create(){
        return view('quantri.ykien.create');
    }
    public function store(Request $request)
    {
        $tl = new ykien([
            'idTin' => $request->get('idTin'),
            'Email' => $request->get('Email'),
            'Ngay' => $request->get('Ngay'),
            'NoiDung' => $request->get('NoiDung'),
            'HoTen' => $request->get('HoTen'),
            'AnHien' => $request->get('AnHien'),
            'idTin' => $request->get('idTin'),

        ]);
        $tl->save();
        return redirect('/ykien')->with('success','Ý kiến đã được lưu');
    }
    public function show($id) {
        //
    }
    public function edit($id) {
        $row = ykien::find($id);
        return view('quantri.ykien.edit',compact('row'));
    }
    public function update(Request $request, $id)
    {
            $yk = ykien::find($id);
         
            $yk ->NoiDung = $request->get('NoiDung');
           
            $yk ->AnHien = $request->get('AnHien');
            $yk ->save();
            return redirect('/ykien')->with('success','Cập nhật thành công !');

    }
    public function destroy($id)  {
        $yk = ykien::find($id);
        $yk->delete();
        return redirect('/ykien')->with('success', 'Đã xóa xong');
}


}
