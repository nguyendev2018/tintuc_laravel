<?php
              $cactheloai = DB::table('theloai')->select('idTL', 'TenTL')
              ->orderby('ThuTu','asc')->where('AnHien','=','1')->where('lang','=','vi')
              ->limit(5)->get();
                     
              $tinmoi = DB::table('tin')->select('idTin', 'TieuDe', 'Ngay','Ten','urlHinh')
              ->orderby('Ngay','desc')
              ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
              ->where('tin.AnHien','=','1')
              ->where('tin.lang','=','vi')
              ->offset(0)->limit(3)->get();
         
    ?>
<footer class="footer">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="footer__first-section"><a href="?" class="footer__logo"><img src="upload/images/logo4.png" alt="logo" class="img-responsive" style="width: 132px;
    height: 126px;"></a>
                    <div class="footer__info">Chúng tôi chọn lọc và lấy những thông tin mới nhất phù hợp với mọi lựa tuổi mọi sở thích của mỗi cá nhân và có nhiều thể loại khác nhau cho người dùng dễ đọc và nắm bắt thông tin trong nước</div>
                  </div> 
                  <div class="decor-right"></div>
                   <div class="clearfix">
                    <div class="footer-wrap-section">
                   
                      <div class="footer-contacts__item"><i class="icon fa fa-location-arrow"></i>Nguyễn Tri Phương Quận 1</div>
                      <div class="footer-contacts__item"><i class="icon fa fa-phone"></i>0800.123.9876  /  0800.123.9899</div>
                      <div class="footer-contacts__item"><i class="icon fa fa-envelope"></i>nguyen_news@gmail.com</div>
                      <div class="footer-contacts__item"><i class="icon fa fa-print"></i>123.456.0000</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                <section class="section-area">
                      <h3 class="footer__title ui-title-inner">Tin tức gần đây</h3>
                      <div class="decor-right decor-right_sm"></div>
                      @foreach($tinmoi as $tm)
                                <article class="post post-3 post-3_mod-b clearfix">
                                  <div class="entry-media"><a href="{{action('TinController@chitiettin',['id'=>$tm ->idTin])}}" ><img src="{{$tm->urlHinh}}" alt="Foto" class="img-responsive"></a></div>
                                  <div class="entry-main">
                                    <div class="entry-header">
                                      <h2 class="entry-title"><a href="{{action('TinController@chitiettin',['id'=>$tm ->idTin])}}">{{$tm->TieuDe}}</a></h2>
                                    </div>
                                    <div class="entry-meta"><span class="category color-4">{{$tm->Ten}}</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">34</a></span></div>
                                  </div>
                                </article>
                      @endforeach     
                    </section>               
                </div>
                <div class="col-md-4">
                      <h2 class="widget-title ui-title-inner text-right" style="color:white">Thẻ menu</h2>
                      <div class="decor-right"></div>
                      <div class="widget-content">
                        <ul class="list-tags list-unstyled">
                       @foreach($cactheloai as $mottheloai)
                      <li class="list-tags__item"><a href="tintheotheloai/{{$mottheloai->idTL}}" class="list-tags__link">{{$mottheloai->TenTL}}</a></li>
                      @endforeach   
                        </ul>
                      </div>
                      <div class="ft_connected">
                      <h2 class="widget-title ui-title-inner text-right" style="color:white">Liên hệ</h2>
                      <div class="decor-right"></div>

                    <p>Bạn có thể theo dõi chúng tôi qua một số mạng xã hội để có hiểu rõ và nắm bắt các thông tin mới nhất </p>
                    <ul>
                      <li><a class="fa fa-facebook" href=""></a></li>
                      <li><a class="fa fa-twitter" href=""></a></li>
                      <li><a class="fa fa-google-plus" href=""></a></li>
                      <li><a class="fa fa-linkedin" href=""></a></li>
                      <li><a class="fa fa-tumblr" href=""></a></li> 
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          
           
          </footer>
          <!-- end wrap-content-->
       