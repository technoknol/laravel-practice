
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('comment-action-buttons', require('./components/comments/CommentActionButtons.vue'));
Vue.component('comment-reply-form', require('./components/comments/CommentReplyForm.vue'));
Vue.component('comment-show', require('./components/comments/CommentShow.vue'));

const app = new Vue({
    el: '#app',
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
        }
    }
});
