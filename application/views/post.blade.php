@extends('template.frontend.theme')

@section('content')

@foreach($post_list as $post)
<article class="blog-post">
    <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at->isoFormat('MMMM DD, YYYY - h:mm:ss a') }}</a></p>
    <p class="blog-post-meta">{{ $post->article }}</a></p>
</article>
@endforeach
@endsection