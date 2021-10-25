<?php

namespace App\Http\Controllers;
use App\theloai;
use Illuminate\Http\Request;

class TheloaiController extends Controller
{
    public function index() {
        $ds = Theloai::all();
       return view('quantri.theloai.index', compact('ds'));
   }

    public function create(){
        return view('quantri.theloai.create');
    }
    public function store(Request $request)
    {
        $tl = new theloai([
            'lang' => $request->get('lang'),
            'TenTL' => $request->get('TenTL'),
            'ThuTu' => $request->get('ThuTu'),
            'AnHien' => $request->get('AnHien'),
            'HienMenu' => $request->get('HienMenu'),

        ]);
        $tl->save();
        return redirect('/theloai')->with('success','Thể loại đã được lưu');
    }
    public function show($id) {
        //
    }
    public function edit($id) {
        $row = theloai::find($id);
        return view('quantri.theloai.edit',compact('row'));
    }
    public function update(Request $request, $id)
    {
            $tl = Theloai::find($id);
            $tl -> TenTL = $request->get('TenTL');
            $tl ->ThuTu = $request->get('ThuTu');
            $tl ->AnHien = $request->get('AnHien');
            $tl ->lang = $request->get('lang');
            $tl ->HienMenu = $request->get('HienMenu');
            $tl ->save();
            return redirect('/theloai')->with('success','Cập nhật thành công !');

    }
    public function destroy($id)  {
        $tl = theloai::find($id);
        $tl->delete();
        return redirect('/theloai')->with('success', 'Đã xóa xong');
}


}
