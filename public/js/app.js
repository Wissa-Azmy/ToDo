$(".create_task").click(function(event) {
    event.preventDefault();

    console.log('clicked');

    
    $('#create-modal').modal();
});

$('#list-create').click(function () {
    $.ajax({
       method: 'post',
       url: 'lists/create',
       data: { list_name:  $('#list_name').val(), list_body: $('#list_body').val()}
    })
    .done(function(msg){
        // $(taskTitle).text(msg['new-title']);
        window.location="http://localhost/todo/lists/index";
        $('#create-modal').modal('hide');
    });
});