/****************** LIST Create MODAL ******************/
$("#create_list").click(function(event) {
    event.preventDefault();

    // console.log('clicked');
    
    $('#create-modal').modal();
});

$('#list-create').click(function () {
    $.ajax({
       method: 'post',
       url: create_url,
       data: { list_name:  $('#list_name').val(), list_body: $('#list_body').val()}
    })
    .done(function(msg){
        // $(taskTitle).text(msg['new-title']);
        window.location=lists_index_url;
        $('#create-modal').modal('hide');
    });
});


/****************** LIST EDIT MODAL ******************/
$(".edit_list").click(function(event) {
    event.preventDefault();

    // console.log('clicked');
    
    $('#edit-modal').modal();
});

$('#list-update').click(function(event){
    $.ajax({
        method: 'post',
        url: edit_url,
        data: {list_id: $('#list_id').val(), list_name: $('#list_name').val(), list_body: $('#list_body').val()}
    })
    .done(function(data){
      console.log(data);

        window.location= show_url;
        $('#edit-modal').modal('hide');
    })
})
