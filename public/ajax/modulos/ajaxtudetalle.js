
$(document).ready(function(){
    
       //get base URL *********************
       var url = $('#url').val();

            //create new product / update existing product ***************************
    $(".add-option").click(function (e) {
        id_menu= $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault(); 
        var formData = {
            id_type_user:$('#id_typeuser').val(),
        }

        //used to determine the http verb to use [update=PUT]
        var usertype_id = id_menu;;
        var my_url = url;
        var type = "PUT"; //for updating existing resource
            my_url += '/' + usertype_id;
     
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var r = confirm("Estas seguro que quiereres permitir el acesso!");
                if (r == true) {
                    var product = "<button type='button' value="+data.id+" id='optionmenu"+data.id+"' class='btn btn-danger delete-option'><i class='fa fa-lock'></i></button><h1>";
                $("#optionmenu" + usertype_id).replaceWith(product);
                } else {
                  
                }
               
            },
            error: function (data) {
                console.log('Error:', data);
                
            }
        });
    });



       //delete product and remove it from TABLE list ***************************
       $(document).on('click','.delete-option',function(){
           var detailfood_id = $(this).val();
            $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
               }
           })
           $.ajax({
               type: "DELETE",
               url: url + '/' + detailfood_id,
               success: function (data) {
                   console.log(data);
                    var r = confirm("Estas seguro que quiereres negar el acesso!");
                         if (r == true) {
                            location.reload();
                         } else {
                           
                         }
                   
               },
               error: function (data) {
                   console.log('Error:', data);
               }
           });
       });
       
   });