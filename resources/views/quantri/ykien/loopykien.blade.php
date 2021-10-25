<div class="col-sm-12">
      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
      @endif
    </div>
<table id="datatable1" class="table display responsive nowrap">
    <thead>
        <tr>
      
                  <th class="wd-15p">id ý kiến</th>
                  <th class="wd-15p">idTin</th>
                  <th class="wd-20p">Ngày</th>
                  <th class="wd-15p">Nội Dung</th>
                  <th class="wd-10p">Email</th>
                  <th class="wd-25p">Họ Tên</th>
                  <th class="wd-25p">Ẩn Hiện</th>
                  <th class="wd-25p">Chỉnh</th>
                  <th class="wd-25p">Xóa</th>
        </tr>
    </thead>
    <tbody>
                    @foreach($ds as $row)
                <tr>
                    <td>{{$row->idYKien}}</td> 
                    <td>{{$row->idTin}}</td> 
                    <td>{{$row->Ngay}}</td>
                    <td>{{$row->NoiDung}}</td> 
                    <td>{{$row->Email}}</td> 
                    <td>{{$row->HoTen}}</td> 
                    <td>{{($row->AnHien)?"Đang hiện":"Đang ẩn"}}</td>
                    <td>
                        <a href="{{route('ykien.edit',$row->idYKien)}}" class="btn btn-primary">Chỉnh</a>
                    </td>
                    <td>
                        <form action="{{route('ykien.destroy',$row->idYKien)}}"method="post">
                            {{csrf_field()}}
                            {!! method_field('delete') !!}
                            <button onclick="return confirm('Xóa thiệt hông?');" class="btn btn-danger" type="submit">Xóa</button>
                        </form>
                    </td>
                </tr>
                    @endforeach
              </tbody>
</table>