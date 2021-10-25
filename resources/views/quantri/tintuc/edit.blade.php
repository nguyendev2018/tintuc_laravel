@extends('quantri.layoutquantri')
@section('pagetitle', 'CHỈNH TIN TỨC') 
@section('main')
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
<div class="card pd-20 pd-sm-40">
<form  action="{{ route('tintuc.update', $row->idTin) }}"  method="post">
{{ csrf_field()}}
{!! method_field('patch') !!}
<div class="container">
  <!-- code hiện các field -->
  <div class="form-group mg-b-20">      
   <input name="TieuDe" value="{{ $row->TieuDe }}" class="form-control" placeholder="Nhập tiêu đề tin" required type="text">
</div>
<div class="form-group mg-b-20">
    <textarea name="TomTat"  placeholder="Nhập tóm tắt của tin" class="form-control" rows="3" >{{ $row->TomTat }}</textarea>
</div>
<div class="form-group mg-b-20">      
  <input name="urlHinh" value="{{ $row->urlHinh }}" class="form-control" placeholder="Nhập địa chỉ hình" required type="file">
</div>
<div class="d-flex justify-content-around">
    <div class="d-flex from-group mg-b-20"> 
        <label class="rdiobox">
            <input name="AnHien" @if ($row->AnHien == 1)  checked @endif type="radio" value="1"><span>Hiện</span>
            </input>&nbsp;
        </label>
        <label class="rdiobox">
            <input name="AnHien" @if ($row->AnHien == 0)  checked @endif type="radio" value="0"><span>Ẩn</span>
            </input>
        </label>
    </div>
    <div class="d-flex from-group mg-b-20"> 
        <label class="rdiobox">
            <input name="lang" @if ($row->lang == 'vi')  checked @endif type="radio" value="vi" ><span>Tiếng Việt</span>
            </input>&nbsp;
        </label>
        <label class="rdiobox">
            <input name="lang" @if ($row->lang == 'en')  checked @endif type="radio" value="en"><span>English</span>
            </input>
        </label>
    </div>
    <div class="d-flex from-group mg-b-20"> 
        <label class="rdiobox">
            <input name="TinNoiBat" @if ($row->TinNoiBat == 1)  checked @endif type="radio" value="1"><span>Nổi Bật</span>
            </input>&nbsp;
        </label>
        <label class="rdiobox">
            <input name="TinNoiBat" @if ($row->TinNoiBat == 0)  checked @endif type="radio" value="0"><span>Bình Thường</span>
            </input>
        </label>
    </div>
</div>
<div class="d-flex justify-content-around"> 
        <div class="d-flex form-group mg-b-20 wd-350">
            <span class="input-group-addon"><i class="icon ion-calendar tx-16 1h-0 op-6"></i></span>
        <input type="text" name="Ngay" value="{{ $row->Ngay->format('d/m/y') }}" class="form-control fc-datepicker" placeholder="Nhập ngày đưa tin">
        <script src="{{ asset('lib') }}/jquery-ui/jquery-ui.js"></script>
<script src="{{ asset('lib') }}/select2/js/select2.min.js"></script>
<script>
   $(function(){
       $('.fc-datepicker').datepicker({
           showOtherMonths: true,
           selectOtherMonths: true,
           dateFormat: 'dd/mm/yy'
       });
   })
</script>
        </div>
        <div class="d-flex form-group mg-b-20 wd-350">
        <input type="text" value="{{ $row->tags }}" name="tags" class="form-control" placeholder="Nhập tags của tin">
        </div>        
    </div>
    <div class="d-flex justify-content-around">
        <div class="form-group wd-350">
            <select name="idTL" class="form-control">
                @php
                $kq = App\theloai::select("idTL","TenTL")->get();
                @endphp
                @foreach ($kq as $rowTL)
                <option value='{{$rowTL->idTL}}'>{{$rowTL->TenTL}}</option>      
                @endforeach
            </select>
            <script>
                $(document).ready(function(){
                    $("[name='idTL']").change(function(){ 
                        var idTL= $(this).val();
                        var diachi= "/asm_gd1/public/layloaitintrong1theloai/" + idTL;
                        $("[name='idLT']").load( diachi);
                    });
                });
                </script>
            </div>
        <div class="form-group wd-350">
            <select name="idLT" class="form-control">
                <option value="0">Chọn loại tin</option>    
                @php
                $listLT = DB::select("select idLT,Ten from loaitin WHERE idTL=".$row->idTL." order by ThuTu");
                @endphp
                @foreach ($listLT as $rowLT)
                @if ($rowLT->idLT !=$rowLT->idLT)
                    <option value='{{$rowLT->idLT}}'>{{$rowLT->Ten}}</option>
                @else
                <option value='{{$rowLT->idLT}}' selected>{{$rowLT->Ten}}</option>
                @endif
                @endforeach
            </select>
        </div>  
    </div>
    <div class="form-group mg-b-20">
    <textarea id ="Content"name="Content" rows="3" placeholder="Nhập nội dung  của tin" class="form-control">{{$row->Content}}</textarea>
    <script src=" {{ asset('lib') }}/highlightjs/highlight.pack.js"></script>
    <script src=" {{ asset('lib') }}/medium-editor/medium-editor.js"></script>
    <script src=" {{ asset('lib') }}/summernote/summernote-bs4.min.js"></script>
    <link href=" {{ asset('lib') }}/highlightjs/github.css" rel="stylesheet">
    <link href=" {{ asset('lib') }}/summernote/summernote-bs4.css" rel="stylesheet">
    <script>
      $(function(){
        // Summernote editor
        $('#Content').summernote({
          height: 250,
        })
      });
    </script>
</div>
  <button type="submit" class="btn btn-default">LƯU DATABASE</button>
</div>
</form>
</div>
@endsection
