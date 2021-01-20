@extends('main')

@section('title','| Homepage')


@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome to My Blog!</h1>
                    <p class="lead">Thank you for visting.This is my test website built with Laravel.Please read my latest post</p>
                    <button type="button" class="btn btn-primary">
                         Popular posts <span class="badge bg-secondary"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">

                @foreach ($posts as $post)
                    
                    
                    <div class="post">
                        <h3>{{$post->title}}</h3>
                        <p>{{ substr($post->body,0,20) }}{{strlen($post->body)>20 ? '...': ''}}</p>
                    <a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary">Read more</a>
                    </div>
                <hr>
                @endforeach
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>

    @endsection