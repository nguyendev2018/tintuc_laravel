<?php
    $cactheloai = DB::table('theloai')->select('idTL', 'TenTL')
    ->orderby('ThuTu','asc')->where('AnHien','=','1')->where('lang','=','vi')
    ->limit(5) ->get();
?>

                                        <aside class="sidebar">
                                            <section class="widget wow">
                                                <h2 class="widget-title ui-title-inner text-right">Danh sách</h2>
                                                <div class="decor-right"></div>
                                                <div class="widget-content">
                                                    <ul class="list list-mark-1 list-mark-1_mod-a">
                                                    @foreach ($cactheloai as $mottheloai)
                                                        <li><a href="tintheotheloai/{{$mottheloai->idTL}}">{{$mottheloai->TenTL}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </section>
                                            <section class="widget wow">
                                                <h2 class="widget-title ui-title-inner text-right">Video giới thiệu</h2>
                                                <div class="decor-right"></div>
                                                <div class="widget-content">
                                                    <div id="accordion" class="panel-group acc-type-a acc-type-a_mod-a">
                                                        <div class="panel panel-default">
                                                            <div id="vi-ac_1" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    <iframe width="100%" height="240" src="https://www.youtube.com/embed/bO6yXVI6Ysw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                            <div class="panel-heading">
                                                                <div class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#vi-ac_1"><span class="acc-type-a__title"><i class="icon fa fa-play"></i>Kênh 14 thời sự</span><span class="acc-type-a__author">BY anderson</span></a></div>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="text-right"><a href="home.html" class="acc-type-a__link btn-link">all videos</a></div>
                                                </div>
                                            </section>
                                        </aside>
                                    </div>