@extends('quantri.layoutquantri') @section('pagetitle', 'Sửa quyền hạn khách hàng') @section('main') @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br /> @endif

<form method="post" action="{{ route('user.update',$row->id) }}">
    {{ csrf_field()}} {!! method_field('patch') !!}
    <div class="col-9 mg-l-30">
       
        <div class="d-flex justify-content-around">
            <div class="d-flex form-group mg-b-20 ">
                <label class="radiobox">
                    <input name="idgroup" type="radio" value="1" @if($row->AnHien ==1) checked @endif>
                    <span>Admin</span>
                </label> &nbsp;
                <label class="radiobox">
                    <input name="idgroup" type="radio" value="0" @if($row->AnHien ==0) checked @endif >
                    <span>Khách hàng</span>
                </label>
            </div>
        <button type="submit" class="btn btn-default">LƯU DATABASE</button>

</form>
@endsection