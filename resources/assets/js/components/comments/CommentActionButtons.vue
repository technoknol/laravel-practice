<template>
    <div>
        <span class="reply-comment-btn pull-right">
            <button class="btn btn-sm btn-info" @click="$emit('onedit', commentParsed.id)">
                Edit
            </button>
            <button class="btn btn-sm btn-info" @click="$emit('onreply', commentParsed.id)">
                Reply
            </button>
        </span>
    </div>
</template>

<script>
    export default {
        name: 'CommentActionButtons',
        props: ['comment'],
        data() {
            return {
                // this.comment = comment
            }
        },
        computed: {
            commentParsed() {
                return JSON.parse(this.comment);
            }
        },
        methods: {
            // onclickedit() {
            //     this.$emit('onedit', this.comment)
            //   }
        },
        mounted() {
            // console.log('Component mounted.', this.comment, this.commentParsed);
        }
    }
</script>
