<div class="am-sideleft">
      <ul class="nav am-sideleft-tab">
        <li class="nav-item" style="width:120px">
          <a href="#mainMenu" class="nav-link active"><i class="icon ion-ios-home-outline tx-24"></i></a>
        </li>
        <li class="nav-item" style="width:120px">
          <a href="#emailMenu" class="nav-link"><i class="icon ion-person tx-24"></i></a>
        </li>
      </ul>

      <div class="tab-content">
      <div id="emailMenu" class="tab-pane">
          <div class="pd-x-20 pd-y-10">
            <a href="" class="btn btn btn-block btn-compose" style="background:#2196F3">Thông Tin</a>
          </div>
          <ul class="nav am-sideleft-menu">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="icon ion-person tx-24"></i>
                <span>{{ Auth::user()->name }}</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-map"></i>
                <span>{{ Auth::user()->diachi }}</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-email-outline"></i>
                <span>{{ Auth::user()->email }}</span>
              </a>
            </li><!-- nav-item -->

          </ul>

          <label class="pd-x-20 tx-uppercase tx-11 mg-t-10 tx-orange mg-b-0 tx-medium" style="color:#2196F3">Tùy Chọn</label>
          <ul class="nav am-sideleft-menu">
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-key"></i>
                <span>Thay đổi thông tin</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-power"></i>
                <span>Đăng xuất</span>
              </a>
            </li><!-- nav-item -->

          </ul>
        </div><!-- #emailMenu -->
        <div id="mainMenu" class="tab-pane active">
          <ul class="nav am-sideleft-menu">
            <li class="nav-item">
              <a href="{{URL::TO('/ql')}}" class="nav-link active">
                <i class="icon ion-ios-home-outline"></i>
                <span>Quản lí</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-gear-outline"></i>
                <span>Thể loại</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="{{route('theloai.index')}}" class="nav-link">Danh sách thể loại</a></li>
                <li class="nav-item"><a href="{{route('theloai.create')}}" class="nav-link">Thêm thể loại</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-gear-outline"></i>
                <span>Loại tin</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="{{route('loaitin.index')}}" class="nav-link">Danh sách loại tin</a></li>
                <li class="nav-item"><a href="{{route('loaitin.create')}}" class="nav-link">Thêm loại tin</a></li>
              </ul>
            </li><!-- nav-item -->
             <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-gear-outline"></i>
                <span>Tin </span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="{{route('tintuc.index')}}" class="nav-link">Danh sách tin </a></li>
                <li class="nav-item"><a href="{{route('tintuc.create')}}" class="nav-link">Thêm tin</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-gear-outline"></i>
                <span>Ý kiến </span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="{{route('ykien.index')}}" class="nav-link">Danh sách ý kiến </a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-gear-outline"></i>
                <span>Khách hàng </span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="{{route('user.index')}}" class="nav-link">Danh sách khách hàng </a></li>
              </ul>
            </li><!-- nav-item -->
          </ul>
        </div><!-- #mainMenu -->
      <!-- #settingMenu -->
      </div><!-- tab-content -->
    </div><!-- am-sideleft -->
