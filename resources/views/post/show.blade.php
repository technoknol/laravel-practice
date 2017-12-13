@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{--<span class="Xpull-left">--}}
                        {{ $post->title }}
                        {{--</span>--}}
                        {{--<span class="Xpull-right">--}}
                        <a href="{{ route('posts.edit', ['id'=> $post->id]) }}" class="btn btn-primary btn-small">
                            <i class="glyphicon glyphicon-edit"></i>
                        </a>
                        {{--</span>--}}
                        {{--<div class="clearfix"></div>--}}
                    </div>

                    <div class="panel-body">
                        {{--<form class="hide_fields_and_readonly">--}}
                        <div class="col-md-12 col-md-offset-3X">
                            <div>
                                <label for="id">{{ __('posts.id') }}</label>
                                <p>{{ $post->id }}</p>
                            </div>
                            <div>
                                <label for="title">{{ __('posts.title') }}</label>
                                <p>{{ $post->title }}</p>
                            </div>
                            <div>
                                <label for="body">{{ __('posts.body') }}</label>
                                <p>{{ $post->body }}</p>
                            </div>
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                            <div>
                                <label for="categories"> {{ __('posts.categories') }}</label>
                                <p>{{ implode(',',$post->category_name->toArray()) }}</p>
                            </div>
                            {{--<div>--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        {!!  var_dump($post->comments) !!}--}}
        <h2>Comments:</h2>
        {{--@include('comment.show')--}}
        @if (count($comments) > 0)
            <ul>
                @foreach ($comments as $comment)
                    @include('comment.show', $comment)
                @endforeach
            </ul>
        @else
            @include('comment.none')
        @endif
        {{--        @each('comment.show', $comments, 'comment')--}}
    </div>
@endsection
