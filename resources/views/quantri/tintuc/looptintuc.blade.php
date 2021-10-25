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
        <th width=120px>idTin/Ngày</th>
        <th > Tiêu đề/Tóm tắt </th>
        <th width=180px>Chỉnh/Xóa</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($ds as $row)
            <tr>
                    <td>
                        <div>idTin: {{ $row->idTin}}</div>
                        <div>{{$row->Ngay}}</div>
                        <div>Xem: {{$row->SoLanXem}}</div>
                    </td>
                    <td>
                        <h5>{{$row->TieuDe}} </h5>
                        <p>{{$row->TomTat}} </p>
                    </td>
                    <td>
                        <div class="anhien">{{ ($row->AnHien==1)? "Tin đang hiện":"Tin đang ẩn" }}</div>
                        <div class="nb">@if ($row->TinNoiBat==1) Tin nổi bật @else Tin bình thường @endif</div>
                        <form method="post" action="{{ route('tintuc.destroy' , $row->idTin)}}">
                            {{ csrf_field()}} {!! method_field('delete') !!}
                            <a href="{{ route('tintuc.edit',$row->idTin)}}" class="btn btn-primary"> Chỉnh </a>
                            <button onclick="return confirm('Xóa nha?'); " class="btn btn-danger" type="submit">Xóa</button>
                        </form>

                    </td>

            </tr>
        @endforeach


    </tbody>
  </table>
  {{$ds->links() }}
