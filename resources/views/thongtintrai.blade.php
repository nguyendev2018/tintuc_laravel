<?php
$tinnoibat = DB::table('tin')->select('idTin', 'TieuDe', 'Ngay','Ten','urlHinh')
->orderby('Ngay','desc')
->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
->Where("TinNoiBat","=","1")
->offset(0)->limit(3)->get();
$tinmoitl = DB::table('tin')->select('idTin', 'TieuDe', 'Ngay','TenTL','urlHinh')
    ->orderby('Ngay','desc')
    ->join('theloai', 'tin.idTL', '=', 'theloai.idTL')
    ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
    ->offset(0)->limit(4)->get();
    ?>
     <div class="col-md-4">
                  <aside class="sidebar">
                    
                       <section class="widget">
                      <h2 class="widget-title ui-title-inner text-right">Tin nổi bật</h2>
                      <div class="decor-right"></div>
                      <div class="widget-content">
                     @foreach($tinnoibat as $tnb)
                        <article class="post post-3 post-3_mod-a clearfix">
                          <div class="entry-media"><a href="{{action('TinController@chitiettin',['id'=>$tnb->idTin])}}" ><img src="{{$tnb->urlHinh}}"  class="img-responsive"/></a></div>
                          <div class="entry-main">
                            <div class="entry-header">
                              <h2 class="entry-title"><a href="{{action('TinController@chitiettin',['id'=>$tnb->idTin])}}">{{$tnb->TieuDe}}</a></h2>
                            </div>
                            <div class="entry-meta"><span class="category color-4"></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">6</a></span></div>
                          </div>
                        </article>
                    @endforeach
                      </div>
                    </section>
                    <section class="widget">
                      <h2 class="widget-title ui-title-inner text-right">Tin mới</h2>
                      <div class="decor-right"></div>
                      <div class="widget-content">
                        <div class="tab-content">
                          <div id="tab-2-1" class="tab-pane fade in active">
                          @foreach($tinmoitl as $tmtl)
                            <article class="post post-3 post-3_mod-e clearfix">
                              <div class="entry-media"><a href="" class="prettyPhoto"><img src="{{$tmtl->urlHinh}}" alt="Foto" class="img-responsive"/></a></div>
                              <div class="entry-main">
                                <div class="entry-header">
                                  <h2 class="entry-title"><a href="news_details-1.html">{{$tmtl->TieuDe}}</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-7">{{$tmtl->TenTL}}</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                              </div>
                            </article>
                            @endforeach
                          </div>
                          
                        </div>
                      </div>
                    </section>
             </aside>
                </div>
                  
         