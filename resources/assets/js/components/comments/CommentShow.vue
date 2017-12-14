<script>
    import CommentReplyForm from './CommentReplyForm';
    import CommentActionButtons from './CommentActionButtons';

    export default {
        name: 'commentShow',
        props: ['comment'],
        components: {
            CommentReplyForm,
            CommentActionButtons
        },
        data() {
            return {
                showCommentReplyForm: false,
                replyTo: null
            }
        },
        computed: {
            commentParsed() {
                return JSON.parse(this.comment);
            }
        },
        mounted() {
            // console.log('this.comment', this.comment)
        },
        methods: {
            CommentReplyActionButton(comment) {
                // console.log('CommentReplyActionButton', comment, typeof comment)
                this.showCommentReplyForm = true;
                this.replyTo = comment.id;
                // console.log(comment.id);
            },
            reset2() {
                this.showCommentReplyForm = false;
                this.replyTo = null;
            },
            cancel() {
                this.methods.reset2();
            },
            save(payload) {
                var {commentParsed, reset2} = this;
                // Axios.get('/api/comment/2?api_token=' + window.blog2.api_token).then(({data}) => console.log(data))
                Axios.post('/api/posts/90/comments?api_token=' + window.blog2.api_token, {'post_id': 90, ...payload}).then((response) => {
                    reset2();
                    console.log('OnSuccess create', response, response.data, commentParsed);
                    // commentParsed.childs = [];
                })
            },
            // get(payload) {
            //     // Axios.get('/api/comment/2?api_token=' + window.blog2.api_token).then(({data}) => console.log(data))
            //     Axios.get('/api/posts/90/comments?api_token=' + window.blog2.api_token).then(({data}) => console.log(data))
            //     console.log("jdkfhakjfh aksjfd", payload)
            // },
        },
    }
</script>