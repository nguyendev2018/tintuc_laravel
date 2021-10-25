@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@elseif(session('danger'))
<div class="alert alert-danger">
    {{ session('danger') }}
</div>
@endif
<table id="datatable1" class="table display responsive nowrap">
    <thead>
        <tr>
            <th class="wd-15p">Id loại tin</th>
            <th class="wd-15p">Tên Loại Tin</th>
            <th class="wd-20p">Thứ Tự</th>
            <th class="wd-15p">Ngôn Ngữ</th>
            <th class="wd-10p">Ẩn hiện</th>
            <th class="wd-25p">Tên thể loại</th>
            <th class="wd-25p">Chỉnh</th>
            <th class="wd-25p">Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ds as $row)
        <tr>
            <td>{{$row->idLT}}</td>
            <td>{{$row->Ten}}</td>
            <td>{{$row->ThuTu}}</td>
            <td>{{($row->lang=="vi")?"Tiếng việt":"Tiếng anh"}}</td>
            <td>{{($row->AnHien)?"Đang hiện":"Đang ẩn"}}</td>
            <td>
                @php $idTL = $row->idTL; $tl = App\theloai::find($idTL); if($tl!=null) echo $tl->TenTL; @endphp
            </td>
            <td>
                <a href="{{route('loaitin.edit',$row->idLT)}}" class="btn btn-primary">Chỉnh</a>
            </td>
            <td>
                <form action="{{route('loaitin.destroy',$row->idLT)}}" method="post">
                    {{csrf_field()}} {!! method_field('delete') !!}
                    <button onclick="return confirm('Xóa nha?');" class="btn btn-danger" type="submit">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>