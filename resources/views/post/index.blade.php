@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <example-component></example-component>
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ __('posts.posts') }}</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>{{ __('posts.id') }}</td>
                                <td>{{ __('users.user') }}</td>
                                <td>{{ __('posts.title') }}</td>
                                <td>{{ __('posts.body') }}</td>
                                <td>{{ __('posts.categories') }}</td>
                                <td>{{ __('posts.edit') }}</td>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td><a href="{{url("/posts/{$post->id}") }}">{{ $post->title }}</a></td>
                                    <td>{{ str_limit($post->body, 80) }}</td>
                                    <td>{{ implode(',',$post->category_name->toArray()) }}</td>
                                    <td>
                                        <a href="{{ route('posts.edit', ['id'=> $post->id]) }}" class="btn btn-primary">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
