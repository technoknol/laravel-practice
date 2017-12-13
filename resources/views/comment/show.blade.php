{{--<div class="container">--}}
{{--@if(count($comments)> 0 )--}}
<div class="row">
    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12 col-md-offset-3X">
                    <div><b>{!! $comment->user->name !!} said:</b>
                        {{--</div>--}}
                        {{--<div>--}}
                        <p>{{ $comment->id }}: {{ $comment->body }}</p>
                        <span class="pull-right comment-time">{{ $comment->updated_at }}</span>
                    </div>
                </div>
                @if(count($comment->childs)>0)
                    @foreach($comment->childs as $comment)
                        @include('comment.show', ['comment'=> $comment])
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{-- sitetype_id , address --}}