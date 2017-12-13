@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->title }}</div>

                    <div class="panel-body">
                        <form class="hide_fields_and_readonly">
                            <div class="col-md-6 col-md-offset-3 form-line">
                                <div class="form-group">
                                    <label for="exampleInputUsername">{{ __('posts.id') }}</label>
                                    <input type="text" class="form-control" id="" value="{{ $post->id }}"
                                           placeholder=" Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">{{ __('posts.title') }}</label>
                                    <input type="email" class="form-control" value="{{ $post->title }}"
                                           id="exampleInputEmail" placeholder=" Enter Email id">
                                </div>
                                <div class="form-group">
                                    <label for="telephone">{{ __('posts.body') }}</label>
                                    <textarea class="form-control" id="description" placeholder="Enter Your Message"
                                              rows="10">{{ $post->body }}</textarea>
                                </div>
                                {{--</div>--}}
                                {{--<div class="col-md-6">--}}
                                <div class="form-group">
                                    <label for="description"> {{ __('posts.categories') }}</label>
                                    <input type="tel" class="form-control" id="telephone" placeholder="Categories"
                                           value="{{ implode(',',$post->category_name->toArray()) }}">
                                </div>
                                <div>

                                    <button type="button" class="btn btn-primary submit"><i class="fa fa-paper-plane"
                                                                                            aria-hidden="true"></i>Update
                                    </button>
                                </div>

                            </div>
                        </form>
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
