@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">Posts</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>Id</td>
                                <td>User</td>
                                <td>Title</td>
                                <td>Body</td>
                                <td>Categories</td>
                            </tr>
                            </thead>
                            <tbody>

                            {{--                            @foreach ($posts as $post)--}}
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ str_limit($post->body, 80) }}</td>
                                <td>{{ implode(',',$post->category_name->toArray()) }}</td>
                            </tr>
                            {{--@endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
