@extends('layouts.main')

@section('container')
    <article>
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>

        <p>By. Nurul Auliya in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {{-- <h5>{{ $post["author"] }}</h5> --}}

        {!! $post->body !!} <!-- supaya bisa membaca inputan yang disertai tag html -->


        <a href="/blog">back to posts</a>
    </article>
@endsection