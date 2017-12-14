<script>
    import CommentReplyForm from './CommentReplyForm';
    import CommentActionButtons from './CommentActionButtons';
    // console.log("CommentActionButtons ", CommentActionButtons );
    export default {
        name: 'commentShow',
        components: {
            // CommentReplyForm: Window.CommentReplyForm,
            // CommentActionButtons : Window.CommentActionButtons
            CommentReplyForm,
            CommentActionButtons
        },
        data() {
            return {
                showCommentReplyForm: false,
                replyTo: null
            }
        },
        methods: {
            CommentReplyActionButton(comment) {
                console.log('CommentReplyActionButton', comment, typeof comment)
                this.showCommentReplyForm = true;
                this.replyTo = comment.id;
                console.log(comment.id);
            },
            cancel() {
                this.showCommentReplyForm = false;
                this.replyTo = null;
            },
            save(payload) {
                console.log("jdkfhakjfh aksjfd", payload)
            },
        },
    }
</script>