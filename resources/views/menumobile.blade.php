<?php
    $cactheloai = DB::table('theloai')->select('idTL', 'TenTL')
    ->orderby('ThuTu','asc')->where('AnHien','=','1')->where('lang','=','vi')
    ->limit(5) ->get();
?>
     <nav id="cd-nav" class="cd-nav-container"><a href="#0" class="cd-close-nav">Close</a>
            <nav class="sidebar-nav">
                <ul class="sidebar-nav__list list-unstyled">
                @foreach ($cactheloai as $mottheloai)
                    <li><a href="#" data-toggle="dropdown">{{$mottheloai->TenTL}}</a>
                    <?php
                                $loaitin = DB::table('loaitin')->select('idLT', 'Ten')
                                ->orderby('ThuTu','asc')
                                ->where('AnHien','=','1')
                                ->where('lang','=','vi')
                                ->where('idTL','=',$mottheloai->idTL)
                                ->get();
                    ?>
                 
                            <ul role="menu" class="dropdown-menu">   @foreach($loaitin as $lt)
                            <li>
                                <ul class="list list-mark-1 list-mark-1_mod-a">
                                    <li><a href="category.html">{{$lt -> Ten}}</a></li>
                                </ul>
                            </li>   @endforeach
                        </ul>
                     
                    </li>
                @endforeach
                </ul>
            </nav>
            <!-- end layout-theme-->



        </nav>