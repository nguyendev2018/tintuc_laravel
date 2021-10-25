@extends('quantri.layoutquantri')
 @section('pagetitle', 'Quản Lí')
 @section('main')
<div class="am-pagebody">
        <div class="row row-sm">
          <div class="col-lg-4">
            <div class="card">
              <div id="rs1" class="wd-100p ht-200"></div>
              <div class="overlay-body pd-x-20 pd-t-20">
                <div class="d-flex justify-content-between">
                  <div>
                    @php
                    $counttin = DB::table('tin')->count('idTin');
                    @endphp
                    <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Tin</h6>
                    <p class="tx-12">Tháng 6 18, 2020</p>
                  </div>
                  <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
                </div><!-- d-flex -->
                <h2 class="mg-b-5 tx-inverse tx-lato">{{$counttin}} Tin</h2>
                <p class="tx-12 mg-b-0">Đang cập nhật thêm.</p>
              </div>
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-lg-4 mg-t-15 mg-sm-t-20 mg-lg-t-0">
            <div class="card">
              <div id="rs2" class="wd-100p ht-200"></div>
              <div class="overlay-body pd-x-20 pd-t-20">
                <div class="d-flex justify-content-between">
                  <div>
                  @php
                    $countuser = DB::table('users')->count('id');
                    @endphp
                    <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Tài Khoản</h6>
                    <p class="tx-12">Tháng 6 18, 2020</p>
                  </div>
                  <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
                </div><!-- d-flex -->
                <h2 class="mg-b-5 tx-inverse tx-lato">{{$countuser}} Tài Khoản</h2>
                <p class="tx-12 mg-b-0">Đang cập nhật thêm.</p>
              </div>
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-lg-4 mg-t-15 mg-sm-t-20 mg-lg-t-0">
            <div class="card">
              <div id="rs3" class="wd-100p ht-200"></div>
              <div class="overlay-body pd-x-20 pd-t-20">
                <div class="d-flex justify-content-between">
                  <div>
                  @php
                    $countykien = DB::table('ykien')->count('idYKien');
                    @endphp
                    <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Ý Kiến</h6>
                    <p class="tx-12">Tháng 6 18, 2020</p>
                  </div>
                  <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
                </div><!-- d-flex -->
                <h2 class="mg-b-5 tx-inverse tx-lato">{{$countykien}} Ý Kiến</h2>
                <p class="tx-12 mg-b-0">Đang cập nhật thêm.</p>
              </div>
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-lg-4 mg-t-15 mg-sm-t-20 mg-lg-t-0 mt-3">
            <div class="card">
              <div id="rs3" class="wd-100p ht-200"></div>
              <div class="overlay-body pd-x-20 pd-t-20">
                <div class="d-flex justify-content-between">
                  <div>
                  @php
                    $counttl = DB::table('theloai')->count('idTL');
                    @endphp
                    <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Thể loại</h6>
                    <p class="tx-12">Tháng 6 18, 2020</p>
                  </div>
                  <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
                </div><!-- d-flex -->
                <h2 class="mg-b-5 tx-inverse tx-lato">{{$counttl}} Thể loại</h2>
                <p class="tx-12 mg-b-0">Đang cập nhật thêm.</p>
              </div>
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-lg-4 mg-t-15 mg-sm-t-20 mg-lg-t-0 mt-3">
            <div class="card">
              <div id="rs3" class="wd-100p ht-200"></div>
              <div class="overlay-body pd-x-20 pd-t-20">
                <div class="d-flex justify-content-between">
                  <div>
                  @php
                    $countlt = DB::table('loaitin')->count('idLT');
                    @endphp
                    <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Loại tin</h6>
                    <p class="tx-12">Tháng 6 18, 2020</p>
                  </div>
                  <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
                </div><!-- d-flex -->
                <h2 class="mg-b-5 tx-inverse tx-lato">{{$countlt}} Loại tin</h2>
                <p class="tx-12 mg-b-0">Đang cập nhật thêm.</p>
              </div>
            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->

      </div
  @endsection