@extends('layouts.app')

@section('content')
    <div class="container">
        @include('errors.validation')
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->title }}</div>

                    <div class="panel-body">
                        {!! Form::open(['route'=> ['posts.update',$post ], 'method'=> 'PUT']) !!}
                        {{--<form class="hide_fields_and_readonly" action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">--}}
                        {{--{!! csrf_field() !!}--}}
                        {{--<input type='hidden' name='_method' value='PATCH'>--}}
                        <div class="col-md-6 col-md-offset-3 form-line">
                            <div class="form-group">
                                <label for="exampleInputUsername">{{ __('posts.id') }}</label>
                                {!! Form::text('id', $post->id, ['readonly', 'class'=> 'form-control' ]) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('title', __('posts.title')); !!}
                                {!! Form::text('title', $post->title, ['class'=> 'form-control', 'placeholder' => " Enter ". __('posts.title')]) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('body', __('posts.body')); !!}
                                {!! Form::textarea('body', $post->body, ['class'=> 'form-control', 'placeholder' => " Enter ". __('posts.title')]) !!}
                            </div>
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}

                            <div class="form-group">
                                {!! Form::label('categories', __('posts.categories')); !!}

                                <select name="categories[]" multiple class="form-control" id="categories">
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id }}"
                                        @if(in_array($cat->name , $post->category_name->toArray()))
                                            {{ 'selected' }}
                                                @endif
                                        >{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                                {{--<input type="tel" class="form-control" id="body" placeholder="Categories"--}}
                                {{--                                           value="{{ implode(',',$post->category_name->toArray()) }}">--}}
                            </div>
                            <div>

                                <button type="submit" class="btn btn-primary submit">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>Update
                                </button>
                            </div>

                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
