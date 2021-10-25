@extends('quantri.layoutquantri')
@section('pagetitle', 'Danh sách thể loại')
@section('main')
@include('quantri/theloai/looptheloai')
@endsection
@section('jsscript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('lib') }}/datatables/jquery.dataTables.js"></script>
<link href="{{asset('lib') }}/datatables/jquery.dataTables.css" rel="stylesheet">
<script>
      $(function(){
    $('#datatable1').DataTable({
      responsive: true,     
      pageLength:5,       
      language: {
        searchPlaceholder: 'Tìm kiếm...',
        sSearch: '',
        lengthMenu: '_MENU_ items/page',
        paginate: {previous: " < ", next:" > " },
        lengthMenu: "Hiện _MENU_ tin trong mỗi trang",
        zeroRecords: "Không tìm thấy",
        info: "Đang hiện trang _PAGE_ trong _PAGES_ trang",
        infoEmpty: "Không có dòng nào",
        infoFiltered: "(Lọc trong _MAX_ tin)",
      }
    });
  });
</script>


@endsection