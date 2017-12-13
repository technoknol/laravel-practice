@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->title }}</div>

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

                            {{--<button type="button" class="btn btn-primary submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Update</button>--}}
                            {{--</div>--}}

                        </div>
                        {{--</form>--}}
                        {{--<table class="table">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                        {{--<td>Id</td>--}}
                        {{--<td>User</td>--}}
                        {{--<td>Title</td>--}}
                        {{--<td>Body</td>--}}
                        {{--<td>Categories</td>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}

                        {{--@if($post)--}}

                        {{--<tr>--}}
                        {{--<td>{{ $post->id }}</td>--}}
                        {{--<td>{{ $post->user->name }}</td>--}}
                        {{--<td>{{ $post->title }}</td>--}}
                        {{--<td>{{ str_limit($post->body, 80) }}</td>--}}
                        {{--<td>{{ implode(',',$post->category_name->toArray()) }}</td>--}}
                        {{--</tr>--}}
                        {{--@else--}}
                        {{--<tr class="text-danger">--}}
                        {{--<td colspan="5">{{ _("No post Found") }}</td>--}}
                        {{--</tr>--}}

                        {{--@endif--}}
                        {{--</tbody>--}}
                        {{--</table>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
