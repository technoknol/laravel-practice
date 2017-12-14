<template>
    <div>
        <slot></slot>
    </div>
</template>

<script>

    // import { CommentReplyForm } from './CommentReplyForm';
    // import { CommentActionButtons } from './CommentActionButtons';
    export default {
        name: 'comment-show',
        // components:{
        //     CommentReplyForm,
        //     CommentActionButtons
        // },
        // data() {
        //     return {
        //         showCommentReplyForm:false,
        //         replyTo:null
        //     }
        // },
        // methods: {
        //     CommentReplyActionButton(comment) {
        //         console.log('CommentReplyActionButton', comment, typeof comment)
        //         // this.showCommentReplyForm = true;
        //         // this.replyTo = comment.id;
        //     }
        // }
    }
</script>
