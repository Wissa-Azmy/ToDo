$(".create_task").click(function(event) {
    event.preventDefault();

    console.log('clicked');

    
    $('#edit-modal').modal();
});

$('#list-create').click(function () {
    $.ajax({
       method: 'post',
       url: 'lists/create',
       data: { list_name:  $('#list_name').val(), list_body: $('#list_body').val()}
    })
    .done(function(msg){
        // $(taskTitle).text(msg['new-title']);
        $('#edit-modal').modal('hide');
    });
});