{{-- <?php $msg='<script>alert("hello")</script>' ?> --}}

@extends('layouts.master')

@section('content')

@foreach($posts as $post)
    <div class="article">
        <div class="article-header">
            <h2>{{ $post['title'] }}</h2>
        </div>
     </div>
@endforeach

@endsection
