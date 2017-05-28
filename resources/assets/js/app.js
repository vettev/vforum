require('./bootstrap');

window.Vue = require('vue');

import axios from 'axios';

const app = new Vue({
    el: '#app',
    methods: {
        removeCategory() {
            let target = $(event.target);
            let url = target.attr('href');


           axios.delete(url).then(() => {
               target.parent().parent().remove();
            });
        },
        editPost() {
          let target = $(event.target);
          let postId = target.data('id');
          let editForm = $('#edit-post').clone();
          let postContent = target.parent().parent().find('.post-content');
          editForm.find('[name="id"]').val(postId);
          editForm.find('[name="content"]').html(postContent.html().trim());
          $('#post-' + postId).find('.manage-post').hide();
          postContent.html(editForm.html());
        },
    }
});

$('.post').on('submit', '.edit-post-form', function (e) {
    e.preventDefault();
    let form = $(this);
    let postId = form.find('[name="id"]').val();
    let token = $('meta[name="csrf-token"]').attr('content');
    let content = form.find('[name="content"]').val();
    let url = "/post/" + postId;
    axios.patch(url, {
        content: content
    }).then(() => {
        let post = '#post-' + postId;
        $(post).find('.post-content').html(content);
        $(post).find('.manage-post').show();
    });
})


