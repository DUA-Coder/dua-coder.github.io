@extends("layouts.templates.ukr.template")
@section('title',"Новини")

@section('content')
<section class="home__news">
        <div class="container">
            <div class="home__title text-center mb-5">
                <h1>Новини</h1>
            </div>
            <div class="row">
                @foreach($posts as $post)
                
                <div class="col-12 col-lg-4 student-work mb-5">
                    <a href="{{route('show',$post->slug)}}">
                        <div class="card" style="width: 380px;">
                          <img src="/img/news/{{$post->photo}}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text"><i data-feather="calendar"></i><span>{{$post->date}}</span></p>
                            <h5 class="card-title">{{$post->title}}</h5>
                          </div>
                        </div>
                    </a>
                </div>

                @endforeach
               
        </div>
    </section>
@endsection