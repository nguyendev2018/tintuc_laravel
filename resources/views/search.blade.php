@extends("layout")
@section("noidungchinh")

<div class="breadcrumb-wrap">
            <ol class="breadcrumb">
              <li><a href="{{URL::to('/timkiem')}}">Trang chủ</a></li>
              <li class="active">Tìm kiếm</li>
              <li class="active">{{$search}}</li>
            </ol>
            <div class="widget" style="margin-top:60px;margin:bottom:0px">
                    <h4 class="box_header" style="margin-bottom:34px">Kết quả tìm kiếm cho '{{$search}}' </h4>

                      <form  action="{{URL::to('/search')}}" method="get">
                                    <div class="input-group" >
                                      <input class="form-search__input form-control" value="{{$search}}" type="search" placeholder="Nhập từ tìm kiếm"  name="search" style="width:100%;height:50px" />
                                     <span class="input-group-prepend">
                                   <button type="submit" class=" form-search__btn icon pe-7s-search form-control-feedback search-global__btn"></button>
                                </span>
                              </div>
                               
                                </form>
                    </div>
      </div>

 <div class="section-default" style="padding:0px">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                @foreach($posts as $timkiem1)
                  <article class="post post-5 clearfix">
                    <div class="entry-media"><a href="{{ route('chitiettin',['id' =>$timkiem1->idTin,'TieuDe' => Str::slug($timkiem1->TieuDe)]) }}"><img src="<?=$timkiem1->urlHinh?>" alt="Foto" class="img-responsive" style="width:100%"/></a></div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h2 class="entry-title" ><a href="{{ route('chitiettin',['id' =>$timkiem1->idTin,'TieuDe' => Str::slug($timkiem1->TieuDe)]) }}"><?=$timkiem1->TieuDe?></a></h2>
                      </div>
                      <div class="entry-meta">
                      <span class="entry-meta__item"><a href="{{ route('chitiettin',['id' =>$timkiem1->idTin,'TieuDe' => Str::slug($timkiem1->TieuDe)]) }}" class="entry-meta__link"><?=$timkiem1->Ngay?></a></span>
                      <span class="entry-meta__item"><a href="{{ route('chitiettin',['id' =>$timkiem1->idTin,'TieuDe' => Str::slug($timkiem1->TieuDe)]) }}" class="entry-meta__link"><?=$timkiem1->SoLanXem?></a></span>
                      <?php
                                      $listykien = DB::table('ykien')->where('idTin',$timkiem1->idTin)->count();
                                      ?>
                      <span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="" class="entry-meta__link">{{$listykien}}</a></span>
                      </div>
                      <div class="entry-content">
                        <p><?=$timkiem1->TomTat?></p>
                      </div>
                      <div class="entry-footer"><a href="{{ route('chitiettin',['id' =>$timkiem1->idTin,'TieuDe' => Str::slug($timkiem1->TieuDe)]) }}" class="btn-link">Đọc tiếp</a></div>
                    </div>
                  </article>
                @endforeach
                <?php echo $posts->links(); ?>
                </div>
                @include("thongtintrai")
              </div>
            </div>
          </div>
 
         

@endsection