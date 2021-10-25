<!-- Loader-->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end-->
<div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
    <!-- Start Switcher-->


    <!-- end switcher-->
    <div class="cd-main">
        <div class="wrap-content cd-section cd-selected">
            <header class="header">
                <div class="header-main">
                    <div class="container">
                        <div class="row" style="display:flex;align-items: center">
                        <div class="col-md-4">
                             <div class="header-main__links">
                                @guest
                                <a href="{{ route('login') }}" class="header-main__links-item">{{ __('Đăng Nhập') }}</a> & @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="header-main__links-item">{{ __('Đăng Ký') }}</a> @endif @else
                                <a href="" class="header-main__links-item"> {{ Auth::user()->username }}</a> &
                              
                                <a href="{{ route('logout') }}" class="header-main__links-item">Đăng Xuất</a> @endguest
                            </div>
                        </div>
                           
                            <div class="col-md-4">
                                <a href="?" class="logo"><img src="upload/images/logo4.png" alt="Logo" class="logo__img img-responsive center-block" style="width: 132px;
                                        height: 126px;" /></a>
                            </div>
                            <div class="col-md-4" style="display:flex;justify-content:space-between;align-items:center">
                                <form action="{{URL::to('/search')}}" method="get" style="width:100%">
                                    <div class="input-group" style="width:100%">
                                        <input class="form-search__input form-control" type="search" placeholder="Nhập từ tìm kiếm" name="search" style="width:100%;height:50px" />
                                        <span class="input-group-prepend">
                                   <button type="submit" class=" form-search__btn icon pe-7s-search form-control-feedback search-global__btn"></button>
                                </span>
                                    </div>
                                </form>
                                </i>
                                <a href="#cd-nav" class="trigger cd-nav-trigger">
                                    <i class="icon pe-7s-menu"></i>
                                </a>
                            </div>

                        </div>
            </header>
            <?php
                    $cactheloai = DB::table('theloai')->select('idTL', 'TenTL')
                    ->orderby('ThuTu','asc')->where('AnHien','=','1')->where('lang','=','vi')
                    ->limit(5) ->get();
                ?>
                <div class="wrap-nav">
                    <nav class="navbar yamm">
                        <div id="navbar-collapse-1" class="navbar-collapse collapse">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <ul class="nav navbar-nav">
                                            @foreach ($cactheloai as $mottheloai)
                                            <li class="yamm-fw"><a href="tintheotheloai/{{$mottheloai->idTL}}">{{$mottheloai->TenTL}}</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <div class="yamm-content">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul class="list list-mark-1 list-mark-1_mod-a">
                                                                        <?php
                                                                            $loaitin = DB::table('loaitin')->select('idLT', 'Ten')
                                                                            ->orderby('ThuTu','asc')
                                                                            ->where('AnHien','=','1')
                                                                            ->where('lang','=','vi')
                                                                            ->where('idTL','=',$mottheloai->idTL)
                                                                            ->get();
                                                                        ?>
                                                                            @foreach($loaitin as $lt)
                                                                            <li><a href="ttl/{{$lt->idLT}}">{{$lt -> Ten}}</a></li>
                                                                            @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </li>
                                            @endforeach
                                            <li class="yamm-fw"><a href="lienhe/">Liên hệ</a>
                                                <li class="yamm-fw"><a href="baocao/">Báo cáo</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-search">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                        <div class="navbar-search">
                                            <form action="{{URL::to('/search')}}" method="get">
                                                <div class="input-group">
                                                    <input class="form-search__input form-control" type="search" placeholder="Nhập từ tìm kiếm" name="search" style="width:100%;height:50px" />
                                                    <span class="input-group-prepend">
                                   <button type="submit" class=" form-search__btn icon pe-7s-search form-control-feedback search-global__btn"></button>
                                </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="search-close close"><i class="fa fa-times"></i></button>
                        </div>
                    </nav>
                </div>
                <?php
                $tinnoibat = DB::table('tin')->select('idTin', 'TieuDe', 'Ngay','Ten','urlHinh')
                ->orderby('Ngay','desc')
                ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
                ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
                ->Where("TinNoiBat","=","1")
                ->offset(0)->limit(3)->get();
            ?>
                    <div id="main-slider" data-slider-width="100%" data-slider-height="750" data-orientation="vertical" class="main-slider main-slider_mod-a main-slider_dark text-center slider-pro">
                        <div class="sp-slides">
                            @foreach($tinnoibat as $tnb)
                            <!-- Slide 1-->
                            <div class="sp-slide"><img src="{{$tnb -> urlHinh}}" alt="slider" class="sp-image" />
                                <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer">
                                    <h2 class="main-slider__title">{{$tnb ->TieuDe}}</h2>
                                </div>
                                <div data-width="100%" data-show-transition="up" data-hide-transition="left" data-show-duration="800" data-show-delay="1700" data-hide-delay="400" class="sp-layer">

                                    <a href="blog-1.html" class="main-slider__link bg-3 btn btn-xs btn-effect">{{$tnb -> Ten}}</a>

                                </div>
                                <div data-width="100%" data-show-transition="right" data-hide-transition="left" data-show-duration="800" data-show-delay="1200" data-hide-delay="400" class="sp-layer">
                                    <div class="main-slider-meta"><span class="main-slider-meta__item"><?=date('H:m',strtotime($tnb->Ngay))?></span><span class="main-slider-meta__item"></div>
                  </div>
                </div>
                <!-- Slide 2-->
               @endforeach
              </div>
            </div>