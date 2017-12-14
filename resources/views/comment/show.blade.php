{{--<div class="container">--}}
{{--@if(count($comments)> 0 )--}}
<comment-show>
    <div class="row comment">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12 col-md-offset-3X">

                        <div class="row comment-header">
                            <div class="col-md-12 col-md-offset-3X">
                                {{--<span class="reply-comment-btn pull-right">--}}
                                {{--<button class="btn btn-sm btn-info">--}}
                                {{--Edit--}}
                                {{--</button>--}}
                                {{--<button class="btn btn-sm btn-info">--}}
                                {{--Reply--}}
                                {{--</button>--}}
                                {{--</span>--}}
                                <comment-action-buttons @onreply="CommentReplyActionButton"
                                                        comment="{{ $comment }}"></comment-action-buttons>
                                <span class="pull-left">
                                <b>{!! $comment->user->name !!} said: </b>
                            </span>
                            </div>
                        </div>
                        {{--<div>--}}
                        <div class="row comment-body">
                            <div class="col-md-12 col-md-offset-3X">
                                <p>{{ $comment->id }}: {{ $comment->body }}</p>
                                <span class="pull-right comment-time">{{ $comment->updated_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 child-comments">
                        @if(count($comment->childs)>0)
                            @foreach($comment->childs as $comment)
                                @include('comment.show', ['comment'=> $comment])
                            @endforeach
                        @endif
                    </div>
                    <div v-if="showCommentReplyForm" class="col-md-12 comment-reply">
                        {{--<div class="row ">--}}
                        {{--<div class="col-md-12 col-md-offset-3X">--}}

                        <comment-reply-form :reply-to="replyTo"></comment-reply-form>
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</comment-show>
{{--</div>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{-- sitetype_id , address --}}