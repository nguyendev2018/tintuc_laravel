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
        <th class="wd-15p">IDTL</th>
                  <th class="wd-15p">TênTL</th>
                  <th class="wd-20p">Thứ Tự</th>
                  <th class="wd-15p">Ẩn Hiện</th>
                  <th class="wd-10p">Ngôn Ngữ</th>
                  <th class="wd-25p">Hiện Menu</th>
                  <th class="wd-25p">Chỉnh</th>
                  <th class="wd-25p">Xóa</th>
        </tr>
    </thead>
    <tbody>
                    @foreach($ds as $row)
                <tr>
                    <td>{{$row->idTL}}</td>
                    <td>{{$row->TenTL}}</td>
                    <td>{{$row->ThuTu}}</td>
                    <td>{{($row->AnHien)?"Đang hiện":"Đang ẩn"}}</td>
                    <td>{{($row->HienMenu)?"Hiện trên menu":"Ẩn trên menu"}}</td>
                    <td>{{($row->lang=="vi")?"Tiếng việt":"Tiếng anh"}}</td>
                    <td>
                        <a href="{{route('theloai.edit',$row->idTL)}}" class="btn btn-primary">Chỉnh</a>
                    </td>
                    <td>
                        <form action="{{route('theloai.destroy',$row->idTL)}}"method="post">
                            {{csrf_field()}}
                            {!! method_field('delete') !!}
                            <button onclick="return confirm('Xóa thiệt hông?');" class="btn btn-danger" type="submit">Xóa</button>
                        </form>
                    </td>
                </tr>
                    @endforeach
              </tbody>
</table>