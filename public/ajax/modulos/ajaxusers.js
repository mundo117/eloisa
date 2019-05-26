var $ = jQuery;
$(document).ready(function(){
    $(".search-users").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#users-list card-header").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

//get base URL *********************
var url = $('#url').val();


//display modal form for creating new product *********************
$('#btn_add_users').click(function(){
    $('#btn-save').val("add");
    $('#frmUsers').trigger("reset");
    $('#userModal').modal('show');
});

//display modal form for product EDIT ***************************
$(document).on('click','.open_modal',function(){
    var users_id = $(this).val();
   
    // Populate Data in Edit Modal Form
    $.ajax({
        type: "GET",
        url: url + '/' + users_id,
        success: function (data) {
            console.log(data);
            $('#users_id').val(data.id);
            $('#id_perfil').val(data.id_perfil);
            $('#name').val(data.name);
            $('#username').val(data.username);
            $('#btn-save').val("update");
            $('#userModal').modal('show');
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
});

  //create new product / update existing product ***************************
  $("#btn-save").click(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })

    e.preventDefault(); 
    var formData = {
        name: $('#name').val(),
        username: $('#username').val(),
        password: $('#password').val(),
        id_perfil: $('#id_perfil').val(),
    }

    //used to determine the http verb to use [add=POST], [update=PUT]
    var state = $('#btn-save').val();
    var type = "POST"; //for creating new resource
    var users_id = $('#users_id').val();
    var my_url = url;
    if (state == "update"){
        type = "PUT"; //for updating existing resource
        my_url += '/' + users_id;
    }
    console.log(formData);
    $.ajax({
        type: type,
        url: my_url,
        data: formData,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            location.reload();
        },
        error: function (data) {
            console.log('Error:', data);
            
        }
    });
});
//delete product and remove it from TABLE list ***************************
$(document).on('click','.delete-product',function(){
    var users_id = $(this).val();
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })
    $.ajax({
        type: "DELETE",
        url: url + '/' + users_id,
        success: function (data) {
            console.log(data);
            $("#users_id" + users_id).remove();
            location.reload();
        },
        error: function (data) {
            console.log('Error:', data);
            
        }
    });
});

});