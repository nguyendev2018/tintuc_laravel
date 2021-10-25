@extends("layout")
@section("noidungchinh")
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    margin-top: 70px;
    border:1px solid #ccc;
        padding: 30px;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>
	  <div class="container box">
  
   <form  method="post" action="lienhe/gui">
    @csrf
    <div class="form-group">
     <label>Tên của bạn</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Email của bạn</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Nội dung</label>
     <textarea name="message" class="form-control"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Gửi" />
    </div>
   </form>
   
  </div>
@endsection
