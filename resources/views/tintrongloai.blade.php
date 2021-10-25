
@extends("layout")

     @section('noidungchinh')
     <div class="breadcrumb-wrap">
            <ol class="breadcrumb">
              <li><a href="home.html">Trang chủ</a></li>
              <li class="active"><?=$TenLT?></li>
            </ol>
          </div>
          <div class="section-default">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                @foreach($listtin as $r)
                  <article class="post post-5 clearfix">
                    <div class="entry-media"><a href="{{action('TinController@chitiettin',['id'=>$r->idTin])}}" ><img src="<?=$r->urlHinh?>" alt="Foto" class="img-responsive" style="width:100%"/></a></div>
                    <div class="entry-main">
                      <div class="entry-header"><span class="category color-4"><?=$TenLT?></span>
                        <h2 class="entry-title" ><a href="{{action('TinController@chitiettin',['id'=>$r->idTin])}}"><?=$r->TieuDe?></a></h2>
                      </div>
                      <div class="entry-meta">
                      <span class="entry-meta__item"><a href="{{action('TinController@chitiettin',['id'=>$r->idTin])}}" class="entry-meta__link"><?=$r->Ngay?></a></span>
                      <span class="entry-meta__item"><a href="{{action('TinController@chitiettin',['id'=>$r->idTin])}}" class="entry-meta__link" style="text-transform: capitalize">Số lần xem :<?=$r->SoLanXem?></a></span>
                     
                      <span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="{{action('TinController@chitiettin',['id'=>$r->idTin])}}" class="entry-meta__link">{{$listykien}}</a></span>
                      </div>
                      <div class="entry-content">
                        <p><?=$r->TomTat?></p>
                      </div>
                      <div class="entry-footer"><a href="{{action('TinController@chitiettin',['id'=>$r->idTin])}}" class="btn-link">Đọc tiếp</a></div>
                    </div>
                  </article>
                @endforeach
                <?php echo $listtin->links(); ?>
                
                </div>
             @include("thongtintrai")
              </div>
            </div>
          </div>
          <title>{{$TenLT}}</title>
     @endsection
         
       
         
 