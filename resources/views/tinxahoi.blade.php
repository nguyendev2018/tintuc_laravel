<?php
      $TenTL=  DB::table('theloai')->where("idTL",$idTL)->value("TenTL");
      $tinmoi = DB::table('tin')->select('idTin', 'TieuDe', 'urlHinh','Ngay','Ten','TomTat')
      ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
      ->orderby('Ngay','desc')->where('tin.AnHien','=','1')->where('tin.idTL','=',$idTL)
      ->offset(0)->limit(5)->get();
?>
<div class="col-md-12 wow">
                      <div class="title-category clearfix">
                        <h2 class="title-category__title ui-title-inner color-4"><?=$TenTL?></h2>
                      </div>
                      <div class="decor-right bg-4"></div>
                      <article class="post post-2 post-2_mod-c clearfix">
                        <div class="entry-media" style="height:240px"><a href="{{action('TinController@chitiettin',['id'=>$tinmoi[0]->idTin])}}"  ><img style="object-fit:cover;height:100%" src="<?= $tinmoi[0]->urlHinh?>" alt="Foto" class="img-responsive"/></a>
                        </div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <h2 class="entry-title text-uppercase"><a href="{{action('TinController@chitiettin',['id'=>$tinmoi[0]->idTin])}}"><?= $tinmoi[0]->TieuDe?></a></h2>
                          </div>
                          <div class="entry-meta"><span class="entry-meta__item"><a href="" class="entry-meta__link">{{$tinmoi[0]->Ngay}}</a></span>
                          <?php 
                     $listykien = DB::table('ykien')->where('idTin',$tinmoi[0]->idTin)->count();
                ?>
                          <span class="entry-meta__item">
                            <i class="icon pe-7s-comment"></i>
                            <a href="" class="entry-meta__link">{{$listykien}}</a>
                          </span>
                        </div>
                          <div class="entry-content">
                            <p><?= $tinmoi[0]->TomTat?></p>
                          </div>
                          <div class="entry-footer"><a href="{{action('TinController@chitiettin',['id'=>$tinmoi[0]->idTin])}}" class="btn-link">Đọc tiếp</a></div>
                        </div>
                      </article>
                      @foreach($tinmoi as $tm)
                      <article class="post post-3 post-3_mod-c clearfix">
                        <div class="entry-media"><a href="{{action('TinController@chitiettin',['id'=>$tm->idTin])}}"><img src="<?= $tm->urlHinh?>" alt="Foto" class="img-responsive"/></a></div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <h2 class="entry-title"><a href="{{action('TinController@chitiettin',['id'=>$tm->idTin])}}"><?= $tm->TieuDe?></a></h2>
                          </div>
                          <div class="entry-meta"><span class="entry-meta__item">
                            <i class="icon pe-7s-comment"></i>
                            <a href="" class="entry-meta__link">
                            <?php 
                     $listykien = DB::table('ykien')->where('idTin',$tm->idTin)->count();
                ?>
                            {{$listykien}}
                            </a>
                          </span>
                        </div>
                        </div>
                      </article>
                        @endforeach
                    </div>