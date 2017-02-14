$(".create_list").click(function(event) {
    event.preventDefault();

    // console.log('clicked');

    
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


$(".edit_list").click(function(event) {
    event.preventDefault();

    // console.log('clicked');
    
    $('#edit-modal').modal();
});

$('#list-update').click(function(event){
      event.preventDefault();

      console.log('clicked');
      console.log($('#list_id').val());

    $.ajax({
        method: 'post',
        url: 'lists/edit',
        data: {list_id: $('#list_id').val(), list_name: $('#list_name').val(), list_body: $('#list_body').val()}
    })
    .done(function(data){
        window.location= "http://localhost/ToDo/lists/show/"+ $('#list_id').val();
        $('#edit-modal').modal('hide');
    })
})
