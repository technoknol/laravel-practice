<template>
    <div>
        <form action="" @submit.prevent="save">
            <input type="hidden" name="id">
            <input type="hidden" name="parent_id" :value="replyTo">
            <div class="form-group">
                <textarea name="" v-model="body" :class="{ 'form-control': true, 'border-warning': ! valid }" id=""
                          rows="5"></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary submit">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>Submit
                </button>
                <button type="button" class="btn btn-default" @click="$emit('cancel')">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: 'CommentReplyForm',
        props: {
            replyTo: {
                validator: function (value) {
                    return (
                        typeof value === "number"
                    )
                }
            }
        },
        data() {
            return {
                body: ''
            }
        }
        ,
        methods: {
            save() {
                if (this.body.trim() && typeof this.replyTo === "number") {
                    this.$emit('save', {'body': this.body, 'parent_id': this.replyTo})
                }
            }
        }
        ,
        // mounted() {
        //     this.valid = true;
        // },
        computed: {
            valid() {
                return !!this.body
            }
        }
    }
</script>
<style scoped>
    .border-warning {
        border: 1px solid red;
    }
</style>