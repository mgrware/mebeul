function initialButton(){
   
    $("#save-btn").off('click').on('click', function(){
      createUser('/admin/user/', 'post');
    })

    $("#edit-btn").off('click').on('click', function(){
      editCategory('/admin/product/store', 'put');
    })
    
}

function tableUser(){
  $('#user-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/admin/user/data-user',
        columns: [
            {title: 'No',  data: 'id', name: 'id' },
            {title: 'Name', data: 'name', name: 'name' },
            {title: 'Email', data: 'email', name: 'email'},
            {title: 'Status', data: 'status', name: 'status'},

        ]
    });
}


function createUser(controller, method, funct){
      data = $("#form-user").serialize();
      userTable = $('#user-table').DataTable();
      jQuery.ajax({
        beforeSend: function(request){
          showLoadingState();
        },
        complete: function(request){
      
        },
        error: function(request){
          var errors = request.responseJSON;
            $('.form-group').removeClass('has-error');
            $('span').text('')
          $.each(errors, function(i, index ){
            $('.'+i).addClass('has-error');  
            console.log(i)
            $('.help-'+i).text(index)
          })
          hideLoadingState();
        },
        success:function(request){
          status_text = request.initstatus
          $('.form-group').removeClass('has-error');
          $('.input-form').val('')
          $('span').text('')
          toastr.success(status_text)
          userTable.ajax.reload();
          hideLoadingState();
        },
        dataType:'json',
        type: method,
        url: controller+'?'+data
      });
}

function hideLoadingState(){
  $('.overlay').addClass('hide')
}

function showLoadingState(){
  $('.overlay').removeClass('hide')
}