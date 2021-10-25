
    @extends("layout")
   
     @section("noidungtin")
    <div class="cd-main">
        <div class="wrap-content cd-section cd-selected">
            <div class="breadcrumb-wrap">
                <ol class="breadcrumb">
                    <li><a href="?">Trang chủ</a></li>
                    <li>
                        <a href="">{{$tin ->Ten}}</a>
                    </li>
                    <li class="active">{{$tin->TieuDe}}</li>
                </ol>
            </div>
            <div class="section-type-k">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <article class="post post-full clearfix">
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h1 class="entry-title"><a href="">{{$tin->TieuDe}}</a></h1>
                                    </div>
                                    <div class="entry-meta">
                                  
                                        <span class="entry-meta__item">
                                                <span class="entry-meta__item"><a href="" class="entry-meta__link">Số lần xem :<?=$tin->SoLanXem?></a></span>
                                        <span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="" class="entry-meta__link">{{$listykien}}</a></span>
                                    </div>
                                    <div class="entry-content">
                                        <h2 class="text-content">
                                            <?php echo $tin->Content?>
                                        </h2>
                                    </div>
                                    <div class="entry-footer clearfix">
                                        <div class="post-tags">
                                            <span class="post-tags__title">tags :</span>
                                            <?php 
                                                    $tags = $tin -> tags;
                                                    $arr = explode (',',$tags);
                                            ?> @foreach($arr as $tag)
                                            <a href="" class="post-tags__link">{{$tag}}</a> @endforeach
                                        </div>
                                        <ul class="social-links social-links_mod-a list-inline">
                                            <li class="bg-14"><a href="facebook.com" class="social-links__item_link"><i class="icon fa fa-facebook"></i></a></li>
                                            <li class="bg-15"><a href="twitter.com" class="social-links__item_link"><i class="icon fa fa-twitter"></i></a></li>
                                            <li class="bg-16"><a href="plus.google.com" class="social-links__item_link"><i class="icon fa fa-google-plus"></i></a></li>
                                            <li class="bg-17"><a href="instagram.com" class="social-links__item_link"><i class="icon fa fa-instagram"></i></a></li>
                                            <li class="bg-18"><a href="rss.com" class="social-links__item_link"><i class="icon fa fa-rss"></i></a></li>
                                            <li class="bg-19"><a href="pinterest.com" class="social-links__item_link"><i class="icon fa fa-pinterest-p"></i></a></li>
                                            <li class="bg-20"><a href="mail.com" class="social-links__item_link"><i class="icon fa fa-envelope-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=" page_margin_top">
                                                    <div class="share_box clearfix">
                                                    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=280034362908821&autoLogAppEvents=1"></script>
<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="large" data-share="true"></div>
                                </div>
                            </article>
                            <section class="section-comment">
                                <h3 class="comment-title ui-title-inner ui-title-inner_spacing_sm"> Lời bình luận :<span class="comment-title__number">{{$listykien}} </span></h3>
                                <div class="decor-left"></div>
                                @foreach($bl as $binhluan)
                                <ul class="comments-list list-unstyled">
                                    <li>
                                        <article class="comment clearfix">
                                            <div class="avatar-placeholder"><img src="upload/images/181.jpg" alt="avatar" class="img-responsive"></div>
                                            <div class="comment-inner">
                                                <header class="comment-header">
                                                    <cite class="comment-author">{{$binhluan->HoTen}}</cite>
                                                    <time datetime="2012-10-27" class="comment-datetime"><?=date('H:m',strtotime($binhluan->Ngay));?></time>
                                                </header>
                                                <div class="comment-body">
                                                    <p>{{$binhluan->NoiDung}}</p>
                                                </div>
                                                <footer class="comment-footer"><a href="home.html" class="comment-btn btn btn-default btn-effect">Trả lời</a></footer>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                                @endforeach
                            </section>
                            <section class="section-reply-form">
                                <h3 class="comment-title ui-title-inner ui-title-inner_spacing_sm">Bình luận :</h3>
                                <div class="decor-left"></div> <br>
                                <form action="ykien/{{$tin->idTin}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Tên" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email" placeholder="Email" class="form-control">
                                        </div>
                                        <div class="col-xs-12">
                                            <textarea rows="5" placeholder="Nội dung" class="form-control" name="content"></textarea>
                                            <input class="form-control" type="submit">
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <div class="container wow">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <section class="section-type-c" style="padding-bottom:100px">
                                            <div class="wrap-title-bg">
                                                <h2 class="ui-title-bg">{{$tin->Ten}}</h2>
                                            </div>
                                            <div data-min480="1" data-min768="2" data-min992="4" data-min1200="4" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
                                                @foreach($tinlienquan as $tlq)
                                                <article class="post post-4 clearfix">
                                                    <div class="entry-media">
                                                        <a href="" class="prettyPhoto">
                                                            <img src="{{$tlq->urlHinh}}" alt="Foto" class="img-responsive"style="width:100%;    height: 300px;
                                                            object-fit: cover;"/>
                                                            </a>
                                                    </div>
                                                    <div class="entry-main">
                                                        <div class="entry-header">
                                                            <h2 class="entry-title"><a style="color:white" href="{{action('TinController@chitiettin',['id'=>$tlq->idTin])}}">{{$tlq->TieuDe}}</a></h2>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <span class="entry-meta__item">
                                                                <a href="" class="entry-meta__link">{{$tlq->Ngay}} </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </article>
                                                @endforeach
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include("thongtintrai")
                    </div>

                </div>
            </div>
        </div>
    
        <title>{{$tin->TieuDe}}</title>
        @endsection
