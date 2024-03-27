$(document).ready(function(){
    var chatBox = document.getElementById('chat-box');

    chatBox.style.display = 'none';

    $('.toggle-chat').click(function(e){
        e.preventDefault();
        $(chatBox).slideToggle();
    });
});
