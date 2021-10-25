@extends("layout")
@section("tinmoitheoloai")
@include("tinmoitheoloai")
@endsection
@section("tinmoi")
@include("tinmoi")
@endsection
@section("tinxahoi")
<div class="section-default">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php  $idTL =21 ?> @include ("tinxahoi")
                                    </div>
                                    <div class="col-md-4">
                                        <?php  $idTL =1 ?> @include ("tinxahoi")
                                    </div>
                                    <div class="col-md-4">
                                        @include("thuvien")
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection
                @section("thegioiweb")
                <?php  $idTL =9 ?> @include ("thegioiweb")
                @endsection 
                @section("nghethuatsong")
                <?php  $idTL =3 ?> @include ("nghethuatsong")
                @endsection