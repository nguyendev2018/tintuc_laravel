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
    
                  <th class="wd-15p">id</th>
                  <th class="wd-15p">Tên</th>
                  <th class="wd-20p">Email</th>
                 
                  <th class="wd-15p">Tên thường</th>
                  <th class="wd-10p">Địa chỉ</th>
                  <th class="wd-25p">Hoạt động</th>
                  <th class="wd-25p">Phân quyền </th>
                
                  <th class="wd-25p">Xóa</th>
        </tr>
    </thead>
    <tbody>
                    @foreach($ds as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                 
                    <td>{{$row->username}}</td>
                    <td>{{$row->diachi}}</td>
                    <td>{{$row->active}}</td>
                 @if ($row->idgroup==1)
                    <td>
                        <a href="{{route('updateidgroup',[$row->id,0])}}" class="btn btn-primary">admin</a>
                    </td>
                    @else
                    <td>
                        <a href="{{route('updateidgroup',[$row->id,1])}}" class="btn btn-primary">user</a>
                    </td>
                    @endif
                    <td>
                        <form action="{{route('user.destroy',$row->id)}}"method="post">
                            {{csrf_field()}}
                            {!! method_field('delete') !!}
                            <button onclick="return confirm('Xóa thiệt hông?');" class="btn btn-danger" type="submit">Xóa</button>
                        </form>
                    </td>
                   
                   
                </tr>
                    @endforeach
              </tbody>
</table>