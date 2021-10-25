
@extends("layout")
     @section('noidungchinh')
     <div class="breadcrumb-wrap">
            <ol class="breadcrumb">
              <li><a href="home.html">Trang chủ</a></li>
              
              <li class="active"><?=$TenTL?></li>           
            </ol>
          </div>
          <div class="section-default">
            <div class="container">
              <div class="row">
                <div class="col-md-8">@foreach($tintheotheloai as $tloai)
                  <article class="post post-5 clearfix">
                    <div class="entry-media"><a href="{{action('TinController@chitiettin',['id'=>$tloai->idTin])}}" ><img src="<?=$tloai->urlHinh?>" alt="Foto" class="img-responsive" style="width:100%"/></a></div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h2 class="entry-title" style="margin:0"><a href="{{action('TinController@chitiettin',['id'=>$tloai->idTin])}}"><?=$tloai->TieuDe?></a></h2>
                      </div>
                    
                      <div class="entry-meta">
                      <span class="entry-meta__item"><a href="" class="entry-meta__link"><?=$tloai->Ngay?></a></span>
                      <span class="entry-meta__item"><a href="" class="entry-meta__link">Số lần xem :<?=$tloai->SoLanXem?></a></span>
                     
                      <span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="" class="entry-meta__link">{{$listykien}}</a></span>
                      </div>
                      <div class="entry-content">
                        <p><?=$tloai->TomTat?></p>
                      </div>
                      <div class="entry-footer"><a href="{{action('TinController@chitiettin',['id'=>$tloai->idTin])}}" class="btn-link">Đọc tiếp</a></div>
                    </div>
                  </article>      
                @endforeach
          <?php echo $tintheotheloai ?>
                
                </div>
             @include("thongtintrai")
              </div>
            </div>
          </div>
     @endsection
         
       
         
 