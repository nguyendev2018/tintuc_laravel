@extends('quantri.layoutquantri')
@section('pagetitle', 'Sửa Ý Kiến')
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

<form method="post" action="{{ route('ykien.update', $row->idYKien) }}">
{{ csrf_field()}}
    {!! method_field('patch') !!}
<div class="col-9 mg-l-30">
        
        <div class="d-flex justify-content-around">
            <div class="d-flex form-group mg-b-20">
                <label class="radiobox">
                      <input name="AnHien" @if ($row->AnHien == 1)  @endif type="radio" value="1" checked>
                      <span>Hiện</span>
                </label> &nbsp;
                <label class="radiobox">
                      <input name="AnHien" @if ($row->AnHien == 0)  checked @endif type="radio" value="0" >
                      <span>Ẩn</span>
                </label>
            </div>
        </div>
        <div class="form-group mg-b-20">
            <textarea id="NoiDung" name="NoiDung" rows="3" placeholder="Nhập nội dung  của tin" class="form-control"> {{$row->NoiDung}}</textarea>
            <script src="{{asset('lib')}}/highlightjs/highlight.pack.js"></script>
            <script src="{{asset('lib')}}/medium-editor/medium-editor.js"></script>
            <script src="{{asset('lib')}}/summernote/summernote-bs4.min.js"></script>
            <link href="{{asset('lib')}}/highlightjs/github.css" rel="stylesheet">
            <link href="{{asset('lib')}}/summernote/summernote-bs4.css" rel="stylesheet">
            <script>
                $(function() {
                    $('#NoiDung').summernote({
                        height: 250,
                    })
                });
            </script>
        </div>
        <button type="submit" class="btn btn-default" style="cursor: pointer;">LƯU DATABASE</button>

</form>
@endsection
