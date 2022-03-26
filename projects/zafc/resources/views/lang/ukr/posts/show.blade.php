@extends("layouts.templates.ukr.template")
@section('title',"$post->title")

@section('content')
    <section class="post__show">
        <div class="container">
            <h1 class="main-h1">{{$post->title}}</h1>
            <div class="text-center">
                <img src="/img/news/{{$post->photo}}" class="img-fluid" alt=""> 
            </div>

            {!! $post->text !!}
        </div>
    </section>
@endsection