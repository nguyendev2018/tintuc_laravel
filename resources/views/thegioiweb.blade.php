<?php
      $TenTL=  DB::table('theloai')->where("idTL",$idTL)->value("TenTL");
      $tgw = DB::table('tin')->select('idTin', 'TieuDe', 'urlHinh','Ngay','Ten','TomTat')
      ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
      ->orderby('Ngay','desc')->where('tin.AnHien','=','1')->where('tin.idTL','=',$idTL)
      ->offset(0)->limit(5)->get();
      $tgw3 = DB::table('tin')->select('idTin', 'TieuDe', 'urlHinh','Ngay','Ten','TomTat')
      ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
      ->orderby('Ngay','asc')->where('tin.AnHien','=','1')->where('tin.idTL','=',$idTL)
      ->offset(0)->limit(4)->get();
?>
<div class="container wow">
            <div class="row">
              <div class="col-xs-12">
                <section class="section-type-c">
                  <div class="wrap-title-bg">
                    <h2 class="ui-title-bg"><?=$TenTL?></h2>
                  </div>
                  <div data-min480="1" data-min768="2" data-min992="4" data-min1200="4" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
                    @foreach($tgw as $tgw2)
                    <article class="post post-4 clearfix">
                      <div class="entry-media">
                      <a href="{{action('TinController@chitiettin',['id'=>$tgw2->idTin])}}" class="prettyPhoto">
                      <img src="<?= $tgw2->urlHinh?>" alt="Foto" class="img-responsive"style="width:100%;    height: 300px;
                      object-fit: cover;"/>
                      </a>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a style="color:white" href="{{action('TinController@chitiettin',['id'=>$tgw2->idTin])}}"><?= $tgw2->TieuDe?></a></h2>
                        </div>
                      </div>
                    </article>
                   @endforeach
                  </div>
                </section>
              </div>
            </div>
          </div>
          <div class="section-type-g wow" style="padding-top:50px ;padding-bottom:100px; margin-top:0px;">
            <div class="container">
            <div class="row">
              @foreach($tgw3 as $tgw4)
                <div class="col-md-6">
                  <article class="post post-3 post-3_mod-d clearfix">
                    <div class="entry-media"><a href="{{action('TinController@chitiettin',['id'=>$tgw4->idTin])}}" ><img src="<?= $tgw4->urlHinh?>" alt="Foto" class="img-responsive" /></a></div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h2 class="entry-title"><a href="{{action('TinController@chitiettin',['id'=>$tgw4->idTin])}}"><?= $tgw4->TomTat?></a></h2>
                      </div>
                      <div class="entry-meta">
                      <span class="category color-4"><?=$TenTL?></span>
                      <?php 
                     $listykien = DB::table('ykien')->where('idTin',$tgw4->idTin)->count();
                ?>
                        <span class="entry-meta__item">
                          <i class="icon pe-7s-comment"></i>
                          <a href="" class="entry-meta__link">   {{$listykien}}</a>
                        </span>
                      </div>
                    </div>
                  </article>
                </div>
               @endforeach
              </div>
          </div>