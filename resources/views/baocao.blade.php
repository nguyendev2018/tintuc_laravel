@extends("layout")
@section("noidungchinh")
<style>
    img{
        width:50%;
    }
    ul li {
        list-style:none;
    }
</style>
<div class="breadcrumb-wrap">
            <ol class="breadcrumb">
                <li><a href="?">Trang chủ</a></li>
                <li class="active">Báo cáo</li>           
            </ol>
        <h1>Phần Header </h1>
        <ul>
            <li>Thay đổi logo</li>
            <li>Thay đổi màu chữ</li>
            <li>Thay đổi bố cục</li>
        </ul>
        <h2>Trước khi thay đổi</h2>
        <img src="upload/images/img/header_before.png" alt="">
        <h2>Sau khi thay đổi</h2>
        <img src="upload/images/img/header_after.png" alt="">
        <h1>Body </h1>
        <h2>Trước khi thay đổi</h2>
        <img src="upload/images/img/bodyf_1.png" alt="">
        <img src="upload/images/img/bodyf_2.png" alt="">
        <img src="upload/images/img/bodyf_3.png" alt="">
        <img src="upload/images/img/bodyf_4.png" alt="">
        <h2>Sau khi thay đổi</h2>
        <img src="upload/images/img/body_1.png" alt="">
        <img src="upload/images/img/body_2.png" alt="">
        <img src="upload/images/img/body_3.png" alt="">
        <h1>Footer</h1>
        <h2>Trước khi thay đổi</h2>
        <img src="upload/images/img/footerf_1.png" alt="">
        <h2>Sau khi thay đổi</h2>
        <img src="upload/images/img/footer_1.png" alt="">
</div>

@endsection