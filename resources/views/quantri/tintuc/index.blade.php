@extends('quantri.layoutquantri')
@section('pagetitle', 'Danh sách Tin Tức')
@section('main')
@include('quantri/tintuc/looptintuc')
@endsection

<script>
       <script src="{{asset('lib')}}/highlightjs/highlight.pack.js"></script>
            <script src="{{asset('lib')}}/medium-editor/medium-editor.js"></script>
            <script src="{{asset('lib')}}/summernote/summernote-bs4.min.js"></script>
            <link href="{{asset('lib')}}/highlightjs/github.css" rel="stylesheet">
            <link href="{{asset('lib')}}/summernote/summernote-bs4.css" rel="stylesheet">
</script>