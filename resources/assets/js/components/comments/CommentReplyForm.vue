<template>
    <div>
        <form action="">
            <input type="hidden" name="id">
            <input type="hidden" name="parent_id">
            <div class="form-group">
                <textarea name="" class="form-control" id="" rows="5"></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary submit">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>Submit
                </button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: 'CommentReplyForm',
        props: ['replyTo'],
        // data() {
        //     return {
        //         // this.comment = comment
        //     }
        // },
        computed: {
            // commentParsed(){
            //     return JSON.parse(this.comment);
            // }
        },
        methods: {
            // onclickedit() {
            //     this.$emit('onedit', this.comment)
            //   }
        },
        mounted() {
            console.log('Component reply to comment mounted..', this);
            // this.parent_id = this.replyTo
        }
    }
</script>
