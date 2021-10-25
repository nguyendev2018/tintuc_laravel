@extends('quantri.layoutquantri')
@section('pagetitle', 'CHỈNH LOẠI TIN')
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
<form method="post" action="{{route('loaitin.update', $row->idLT)}}">
    {{ csrf_field()}}
    {!! method_field('patch') !!}
    <div class="col-9 mg-l-30">
        <div class="d-flex flex-column">
            <div class="form-group mg-b-20">
                <label>Tên loại tin: <span class="tx-danger">*</span></label>
                <input name="Ten" value="{{$row->Ten}}" placeholder="Nhập tên loại tin" class="form-control" required>
            </div>
            <div class="form-group mg-b-20">
                <label>Thứ tự:</label>
                <input type="number" value="{{$row->ThuTu}}" name="ThuTu" placeholder="Nhập thứ tự" class="form-control">
            </div>
        </div>
        <div class="d-flex justify-content-around">
            <div class="d-flex form-group mg-b-20">
                <label class="radiobox">
                      <input name="AnHien" type="radio" value="1" @if ($row->AnHien == 1) checked @endif >
                      <span>Hiện</span>
                </label> &nbsp;
                <label class="radiobox">
                      <input name="AnHien"  type="radio" value="0" @if ($row->AnHien == 0) checked @endif >
                      <span>Ẩn</span>
                </label>
            </div>
            <div class="d-flex form-group mg-b-20">
                <label class="radiobox">
                      <input name="lang"  type="radio" value="vi" @if ($row->lang == 'vi') checked @endif>
                      <span> Tiếng Việt </span>
                </label> &nbsp;
                <label class="radiobox">
                      <input name="lang" type="radio" value="en"  @if ($row->lang == 'en') checked @endif>
                      <span>Tiếng Anh</span>
                </label>
            </div>
        </div>
        <select name="idTL" class="form-control select2 mg-b-20">
                <option value="0">Chọn Thể Loại</option>
                <?php
                  $kq = DB::select('select idTL, TenTL from theloai order by ThuTu');
                  foreach($kq as $tl) {
                    ?>
                      <option value='{{$tl->idTL}}' <?=($row->idTL === $tl->idTL) ? 'selected' : '' ?>>{{$tl->TenTL}}</option>";
                    <?php
                  };
                ?>
              </select>     
        <button type="submit" class="btn btn-default">LƯU DATABASE</button>
</form>
@endsection
