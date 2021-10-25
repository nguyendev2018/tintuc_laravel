@extends("quantri/layoutquantri")
@section("main")
@include("quantri/dashboard")
@endsection
@section('jsscript')
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="{{ asset('lib') }}/datatables/jquery.dataTables.js"></script>
      <link href="{{ asset('lib') }}/datatables/jquery.dataTables.css" rel="stylesheet">
@endsection
