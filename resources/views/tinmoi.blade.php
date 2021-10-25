<?php
    $tinmoi = DB::table('tin')->select('idTin', 'TieuDe', 'Ngay','Ten','urlHinh','TomTat')
    ->orderby('Ngay','desc')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
    ->offset(0)->limit(8)->get();

?>
<section class="section-type-a">
            <div class="wrap-title-bg">
              <h2 class="ui-title-bg">Tin mới trong ngày </h2>
            </div>
            <div data-jarallax="{&quot;type&quot;: &quot;scroll-opacity&quot;, &quot;speed&quot;: &quot;.2&quot;}" style="background-image: url(media/content/bg/1.jpg)" class="section-default section-bg section-bg_dark jarallax">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="section__inner">
                      <div id="slider-1" class="slider-pro slider-thumbnails">
                        <div class="sp-slides">  
                        @foreach($tinmoi as $tm)
                          <div class="sp-slide">
                            <article class="post post-2 post-2_mod-a clearfix">
                              <div class="entry-media">
                                <a href="{{action('TinController@chitiettin',['id'=>$tm->idTin])}}" >
                                  <img  src="<?=$tm->urlHinh?>" alt="Foto" class="img-responsive" style="width: 50%;
                        height: 260px;object-fit:cover"/></a>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase"><a href="{{action('TinController@chitiettin',['id'=>$tm->idTin])}}"><?=$tm->TieuDe?></a>
                                  </h2>
                                </div>
                                <div class="entry-meta">
                                  <span class="entry-meta__item">
                                    <a href="" class="entry-meta__link">{{$tm->Ngay}}</a>
                                  </span>
                                  <?php
                                   $listykien = DB::table('ykien')->where('idTin',$tm->idTin)->count();
                                  ?>
                                  <span class="entry-meta__item">
                                    <i class="icon pe-7s-comment">{{$listykien}}</i>
                                  </span>
                                </div>
                                <div class="entry-content">
                                  <p><?=$tm->TomTat?></p>
                                </div>
                              </div>
                            </article>               
                          </div>  
                          @endforeach
                        </div>
                        <div class="sp-thumbnails" style="height:150px">
                        @foreach($tinmoi as $tm)
                          <div class="sp-thumbnail">
                            <article class="post post-2 post-2_mod-b clearfix">
                              <div class="entry-media">
                                <img src="{{$tm -> urlHinh}}" alt="Foto" style="width:137px" class="img-responsive"/>
                              </div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title text-uppercase" style="margin:0">{{$tm -> TieuDe}}</h2>
                                </div>
                                <div class="entry-meta">
                                  <span class="entry-meta__item">{{$tm->Ngay}}</span>
                                  <?php
                                   $listykien = DB::table('ykien')->where('idTin',$tm->idTin)->count();
                                  ?>
                                  <span class="entry-meta__item">
                                    <i class="icon pe-7s-comment"></i>
                                        {{$listykien}}
                                    </span>
                                  </div>
                              </div>
                            </article>
                          </div>
                        @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>