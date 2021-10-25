<?php
      $TenTL=  DB::table('theloai')->where("idTL",$idTL)->value("TenTL");
      $tinmoi = DB::table('tin')->select('idTin', 'TieuDe', 'urlHinh','Ngay','Ten','TomTat')
      ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
      ->orderby('Ngay','desc')->where('tin.AnHien','=','1')->where('tin.idTL','=',$idTL)
      ->offset(0)->limit(5)->get();
?>
<div class="col-md-6 wow">
                      <div class="title-category clearfix">
                        <h2 class="title-category__title ui-title-inner color-5"><?=$TenTL?></h2><span class="title-category__category">Asia, europe, ...</span>
                      </div>
                      <div class="decor-right bg-5"></div>
                      <article class="post post-2 post-2_mod-c clearfix">
                        <div class="entry-media"><a href="" class="prettyPhoto"><img src="<?=$tinmoi[0]->urlHinh?>" alt="Foto" class="img-responsive"/></a>
                        </div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <h2 class="entry-title text-uppercase"><?=$tinmoi[0]->TieuDe?></h2>
                          </div>
                          <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">62</a></span></div>
                          <div class="entry-content">
                            <p><?=$tinmoi[0]->TomTat?></p>
                          </div>
                          <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Đọc tiếp</a></div>
                        </div>
                      </article>
                      @for($i=0;$i<5;$i++)
                      <article class="post post-3 post-3_mod-c clearfix">
                        <div class="entry-media"><a href="" class="prettyPhoto"><img src="<?= $tinmoi[$i]->urlHinh?>" alt="Foto" class="img-responsive"/></a></div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <h2 class="entry-title"><a href="news_details-1.html"><?= $tinmoi[$i]->TieuDe?></a></h2>
                          </div>
                          <div class="entry-meta"><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">51</a></span></div>
                        </div>
                      </article>
                   @endfor
                    </div>