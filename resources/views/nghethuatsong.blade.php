<?php
      $TenTL=  DB::table('theloai')->where("idTL",$idTL)->value("TenTL");
      $tinmoi = DB::table('tin')->select('idTin', 'TieuDe', 'urlHinh','Ngay','Ten','TomTat')
      ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
      ->orderby('Ngay','desc')->where('tin.AnHien','=','1')->where('tin.idTL','=',$idTL)
      ->offset(0)->limit(5)->get();
    

?>
<div class="section-type-c wow">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <section class="section-area">
                    <h2 class="ui-title-block"><span class="ui-title-block__subtitle text-uppercase"><?=$TenTL?></span></h2>
                    <div class="decor-right"></div>
                    <div class="tab-content">
                      <div id="tab-1" class="tab-pane fade in active">
                        <div class="row">
                          <div class="col-md-6">
                            <article class="post post-2 post-2_mod-d clearfix">
                              <div class="entry-media"><a href="{{action('TinController@chitiettin',['id'=>$tinmoi[0]->idTin])}}" ><img src="<?= $tinmoi[0]->urlHinh?>" alt="Foto" class="img-responsive"/></a>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase"> <a href="{{action('TinController@chitiettin',['id'=>$tinmoi[0]->idTin])}}"><?= $tinmoi[0]->TieuDe?></a></h2>
                                </div>
                                <div class="entry-meta">
                                  <span class="entry-meta__item">
                                    <a href="{{action('TinController@chitiettin',['id'=>$tinmoi[0]->idTin])}}" class="entry-meta__link">{{$tinmoi[0]->Ngay}}</a>
                                  </span>
                                  <?php 
                     $listykien = DB::table('ykien')->where('idTin',$tinmoi[0]->idTin)->count();
                ?>
                                <span class="entry-meta__item">
                                  <i class="icon pe-7s-comment"></i>
                                  <a href="{{action('TinController@chitiettin',['id'=>$tinmoi[0]->idTin])}}" class="entry-meta__link">{{$listykien}}</a>
                                </span>
                              </div>
                                <div class="entry-content">
                                  <p><?= $tinmoi[0]->TomTat?></p>
                                </div>
                                <div class="entry-footer"><a href="{{action('TinController@chitiettin',['id'=>$tinmoi[0]->idTin])}}" class="btn-link">Đọc tiếp</a></div>
                              </div>
                            </article>
                          
                          </div>
                          <div class="col-md-6">
                          @foreach($tinmoi as $tm)
                            <article class="post post-3 post-3_mod-a clearfix">
                              <div class="entry-media"><a href="{{action('TinController@chitiettin',['id'=>$tm->idTin])}}"><img src="<?= $tm->urlHinh?>" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="{{action('TinController@chitiettin',['id'=>$tm->idTin])}}"><?= $tm->TieuDe?></a></h2>
                                </div>
                                <div class="entry-meta">
                                 <?php 
                                  $listykien = DB::table('ykien')->where('idTin',$tm->idTin)->count();
                              ?>
                                  <span class="entry-meta__item">
                                  <i class="icon pe-7s-comment"></i>
                                <a href="{{action('TinController@chitiettin',['id'=>$tm->idTin])}}" class="entry-meta__link">{{$listykien}}</a>
                              </span>
                            </div>
                              </div>
                            </article>
                           @endforeach
                         
                          </div>
                        </div>
                      </div>
                     
                    </div>
                  </section>
                </div>
                <div class="col-md-4">
                  <aside class="sidebar">
                    <section class="widget">
                    <h2 class="ui-title-block ui-title-inner text-right"><span class="ui-title-block__subtitle text-uppercase">Theo dõi</span></h2>
                        <div class="decor-right"></div>
                      <div class="widget-content">
                        <ul class="list-subscription list-unstyled">
                          <li class="list-subscription__item bg-9"><span class="list-subscription__name">FB</span><span class="list-subscription__number">250,642</span> <a href="https://www.facebook.com/profile.php?id=100021618003988" class="list-subscription__link"><i class="icon fa fa-facebook"></i></a></li>
                          <li class="list-subscription__item bg-10"><span class="list-subscription__name">yt</span><span class="list-subscription__number">920,497</span> <a href="https://www.youtube.com/channel/UCE_EtB_SMks9jNlMdJFPIyA?view_as=subscriber" class="list-subscription__link"><i class="icon fa fa-youtube-play"></i></a></li>
                        </ul>
                      </div>
                    </section>
                    <div class="widget"><a href="home.html" class="banner"><img src="upload/images/newspaper.jpg" alt="banner" class="img-responsive center-block"></a></div>
                  
                  </aside>
                </div>
              </div>
            </div>
          </div>