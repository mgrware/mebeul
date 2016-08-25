function initialButton(){
   $('#name').on("keydown", function(e){
    
    if(e.keyCode == 13)
      {
        prossesCategory('/admin/category/', 'post', 'store');
      }
    });

    $("#save-btn").off('click').on('click', function(){
      prossesCategory('/admin/category/', 'post', 'store');
    })

    $("#edit-btn").off('click').on('click', function(){
      editCategory('/admin/category/store', 'put');
    })
    
}

function tableCat() {
  var colIsActive= {
      "title": "Status",
      "data": "is_active",
      "width": "10%",
      "render": function (data, type, row, meta) {
          if(data==1){
              data = 'Active'
          }else if(data==0){
              data = 'Not Active'
          }
          return data   
      }
  }

  var colIsAction= {
      "title": "Action",
      "data": "is_active",
      "width": "10%",
      "render": function (data, type, row, meta) {
          if(data==1){
              data = '<button class="btn btn-danger" onclick="promptCategory('+row.id+',\''+row.name+'\', \'disable\')">Disable</button>'
          }else if(data==0){
               data = '<button class="btn btn-success" onclick="promptCategory('+row.id+',\''+row.name+'\', \'enable\')">Enable</button>'
          }
          return data   
      }
  }

  var colEdit= {
      "title": "Edit",
      "data": "id",
      "width": "10%",
      "render": function (data, type, row, meta) {
        data = '<button class="btn btn-primary" onclick="showEditModal('+data+')">Edit</button>'
        return data   
      }
  }


  $('#category-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '/admin/category/data-category',
      columns: [
          {title: 'No',  data: 'id', name: 'id', width: '15%'},
          {title: 'N ame', data: 'name', name: 'name'},
          colIsActive,
          colIsAction,
          colEdit,
      ]
  });

  

}

function prossesCategory(controller, method, funct){
      data = $("#form-category").serialize();
      tableCategory = $('#category-table').DataTable();
      jQuery.ajax({
        beforeSend: function(request){
          showLoadingState();
        },
        complete: function(request){
      
        },
        error: function(request){
          var errors = request.responseJSON;
          console.log(request)
          // $('.name').addClass('has-error');
          // $('.name span').text(errors.name)
          hideLoadingState();
        },
        success:function(request){
          status_text = request.initstatus
          $('.form-group').removeClass('has-error');
          $('.input-form').val('')
          $('.name span').text('')
          toastr.success(status_text)
          tableCategory.ajax.reload();
          hideLoadingState();
        },
        dataType:'json',
        type: method,
        url: controller+'?'+data+'&function='+funct
      });
}

function enabDisCategory(id, funct){
  tableCategory = $('#category-table').DataTable();
  jQuery.ajax({
    beforeSend: function(request){
    },
    complete: function(request){
  
    },
    error: function(request){
    },
    success:function(request){
      var status_text = request.initstatus
      console.log(request)
      toastr.success(status_text)
      tableCategory.ajax.reload();
    },
    dataType:'json',
    type: 'get',
    url: '/admin/category/'+funct+'/'+id
  });
}

function hideLoadingState(){
  $('.overlay').addClass('hide')
}

function showLoadingState(){
  $('.overlay').removeClass('hide')
}

function promptCategory(id, name, action){
  if(action=="enable"){
    text_title = "Anda akan men-aktifkan category "+name
    button_text = "Aktifkan"
  }else if(action=="disable"){
    text_title = "Anda akan me non-aktifkan category "+name
    button_text = "Non Aktifkan"
  }
  swal({
    title: text_title,
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: button_text,
    cancelButtonText: "Cancel",
    closeOnConfirm: true,
    closeOnCancel: true },
    function(isConfirm){
      if (isConfirm) {
        enabDisCategory(id, action);
        swal("Deleted!", "Your imaginary file has been deleted.", "success");
      } else {
        swal("Cancelled", "Your imaginary file is safe :)", "error");
      } });
}

function showEditModal(id){
  jQuery.ajax({
    beforeSend: function(request){
    },
    complete: function(request){
  
    },
    error: function(request){
    },
    success:function(request){
      data = request.data
      $('#edit-category').modal('show')
      $('#edit_id').val(data.id)
      $('#edit_name').val(data.name)
    },
    dataType:'json',
    type: 'get',
    url: '/admin/category/edit/'+id
  });
}

function editCategory(controller, method){
      data = $("#form-edit-category").serialize();
      tableCategory = $('#category-table').DataTable();
      jQuery.ajax({
        beforeSend: function(request){
          showLoadingState();
        },
        complete: function(request){
      
        },
        error: function(request){
          var errors = request.responseJSON
          $('.edit-name').addClass('has-error');
          $('.edit-name span').text(errors.name);
          hideLoadingState();
        },
        success:function(request){
          status_text = request.initstatus
          $('.edit-name').removeClass('has-error');
          $('.input-form').val('')
          $('.edit-name span').text('')
          toastr.success(status_text)
          tableCategory.ajax.reload();
          hideLoadingState();
          $('#edit-category').modal('hide')
        },
        dataType:'json',
        type: method,
        url: controller+'?'+data
      });
}