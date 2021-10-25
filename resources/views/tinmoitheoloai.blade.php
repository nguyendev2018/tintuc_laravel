<?php
    $tinmoi = DB::table('tin')->select('idTin', 'TieuDe', 'Ngay','Ten','urlHinh')
    ->orderby('Ngay','desc')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
    ->offset(0)->limit(4)->get();
?>

     <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <section class="section-type-a wow">
                  <div class="wrap-title-bg">
                    <h2 class="ui-title-bg">Tin mới theo loại</h2>
                  </div>
                  <div data-min480="1" data-min768="2" data-min992="2" data-min1200="4" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
                @foreach($tinmoi as $tm)
                <article class="post post-1 clearfix">
                      <div class="entry-media"><a href="{{action('TinController@chitiettin',['id'=>$tm->idTin])}}" ><img src="<?=$tm->urlHinh?>" alt="Foto" class="img-responsive"/></a>
                        <h2 class="entry-title" ><a style="color:white" href="{{action('TinController@chitiettin',['id'=>$tm->idTin])}}"><?=$tm->TieuDe?></h2></a>
                      </div>
                      <span class="label bg-1"><?=$tm->Ten?></span>
                      <div class="entry-meta">
                        <span class="entry-meta__item">
                          <a href="" class="entry-meta__link"><?=date('H:m',strtotime($tm->Ngay))?></a>
                        </span>
                        <?php 
                     $listykien = DB::table('ykien')->where('idTin',$tm->idTin)->count();
                ?>
                      <span class="entry-meta__item">
                        <i class="icon pe-7s-comment"></i>
                        {{$listykien}}
                      </span>
                      </div>
                   </article>   
                    @endforeach 
                  </div>
                </section>
              </div>
            </div>
          </div>
   