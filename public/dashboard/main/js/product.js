function initialButton(){
   // $('#name').on("keydown", function(e){
    
   //  if(e.keyCode == 13)
   //    {
   //      prossesCategory('/admin/category/', 'post', 'store');
   //    }
   //  });

   //  $("#save-btn").off('click').on('click', function(){
   //    createProduct('/admin/product/', 'post');
   //  })

   //  $("#edit-btn").off('click').on('click', function(){
   //    editCategory('/admin/product/store', 'put');
   //  })
    
}

function tableProd(){
    var colAction = {
    "title": "Action",
      "data": "is_active",
      "width": "10%",
      "render": function (data, type, row, meta) {
          if(data==1){
              data = '<button class="btn btn-danger" onclick="promptProduct('+row.id+',\''+row.name+'\', \'disable\')">Disable</button>'
          }else if(data==0){
               data = '<button class="btn btn-success" onclick="promptProduct('+row.id+',\''+row.name+'\', \'enable\')">Enable</button>'
          }
          return data   
      }
    }
    var colDesc= {
        "title": "Description",
        "data": "description",
        "width": "40%",
        "render": function (data, type, row, meta) {
            if(data.length > 250){
            var data = jQuery.trim(data).substring(0, 250)
            .split(" ").slice(0, -1).join(" ") + "...";    
            }
            return data   
        }
    }

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

    var colCategories= {
        "title": "Category",
        "data": "category.name",
        "name": "category.name",
        "width": "10%",
        "render": function (data, type, row, meta) {
            return data   
        }
    }

    var colEdit= {
      "title": "Edit",
      "data": "id",
      "width": "10%",
      "render": function (data, type, row, meta) {
        data = '<button class="btn btn-primary" onclick="showEditProduct('+data+')">Edit</button>'
        return data   
      }
  }



    $('#product-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/admin/product/data',
        columns: [
            {title: 'No',  data: 'id', name: 'id', width: "5%" },
            {title: 'title', data: 'title', name: 'title', width: "15%"},
            colDesc,
            colCategories,
            colIsActive,
            colAction,
            colEdit,

        ]
    });
  }

//   function createProduct(controller, method){
//       data = $("#form-product").serialize();
//       console.log(data)
//       return false
//       tableProduct = $('#product-table').DataTable();
//       jQuery.ajax({
//         beforeSend: function(request){
//           showLoadingState();
//         },
//         complete: function(request){
      
//         },
//         error: function(request){
//           var errors = request.responseJSON;
//             $('.form-group').removeClass('has-error');
//             $('span').text('')
//           $.each(errors, function(i, index ){
//             $('.'+i).addClass('has-error');  
//             $('.'+i+' span').text(index)
//           })
          
//           hideLoadingState();
//         },
//         success:function(request){
//           status_text = request.initstatus
//           $('.form-group').removeClass('has-error');
//           $('.input-form').val('')
//           $('span').text('')
//           toastr.success(status_text)
//           tableProduct.ajax.reload();
//           hideLoadingState();
//         },
//         url: '/admin/product/',
//         data: data,
//         dataType: 'json',
//         enctype:'multipart/form-data',
//         type: method,
//       });
// }

function hideLoadingState(){
  $('.overlay').addClass('hide')
}

function showLoadingState(){
  $('.overlay').removeClass('hide')
}

function submitProduct(){
   var image = $('#image').val()
      $('.image').removeClass('has-error');  
      $('.image span').text('')
   if(image==""){
      $('.image').addClass('has-error');  
      $('.image span').text('required field image')
   }else{
    $('#form-product').submit();
    showLoadingState();
   }
}

function promptProduct(id, name, action){
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

// function getDataUri(url, callback) {
//     var image = new Image();

//     image.onload = function () {
//         var canvas = document.createElement('canvas');
//         canvas.width = this.naturalWidth; // or 'width' if you want a special/scaled size
//         canvas.height = this.naturalHeight; // or 'height' if you want a special/scaled size

//         canvas.getContext('2d').drawImage(this, 0, 0);

//         // Get raw image data
//         callback(canvas.toDataURL('image/png').replace(/^data:image\/(png|jpg);base64,/, ''));

//         // ... or get as Data URI
//         callback(canvas.toDataURL('image/png'));
//     };

//     image.src = url;
// }

// Usage

function enabDisCategory(id, funct){
  tableprod = $('#product-table').DataTable();
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
      tableprod.ajax.reload();
    },
    dataType:'json',
    type: 'get',
    url: '/admin/product/'+funct+'/'+id
  });
}


//  // Menang Ngahayal by GilangBastard
//  // =================================================
// $(function(){lamunDitanya("Iraha Diwisuda?")})
// function lamunDitanya(obj){
//   arrDitanya = ["Iraha Kawin?","Iraha Diwisuda?", "Iraha Disunatan?",
//   "Iraha Mayar Hutang?"]
//   kisiKisi = irahaWae(new Date(2016, 08, 13), new Date(2050, 13, 08))
//   switch (obj){
//     case arrDitanya[0]:
//       console.log(kisiKisi)
//       break;
//     case arrDitanya[1]:
//       console.log(kisiKisi)
//       break;
//     case arrDitanya[2]:
//       console.log(kisiKisi)
//       break;
//     case arrDitanya[3]:
//       console.log(kisiKisi)
//       break;
//     default:
//         console.log("Teuing teu apal")
//   }
// }
// function irahaWae(start, end) {
//   var asd = new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime()));
//   var poe = ['Minggu','Senen','Salasa','Rebo','Kamis','Jumaah','Saptu'];
//   var bln = ['Januari','Pebuari','Maret','April','Mei','Juni','Juli', 'Agustus', 'September',
//    'November', 'Oktober', 'Desember']
//   var asoy = "Poe "+poe[asd.getDay()] +" tanggal "+asd.getDate() +
//   " Bulan "+bln[asd.getMonth()]+" Taun "+asd.getFullYear()+" Lamun jadi";
//   return asoy
// }



function editProduct(controller, method){
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

function showEditProduct(id){
  jQuery.ajax({
    beforeSend: function(request){
      $('.loop-image').html('')
    },
    complete: function(request){
  
    },
    error: function(request){
    },
    success:function(request){
      data = request.data
      images = request.images
      $('#edit-product').modal('show')
      $('#form-id').val(data.id)
      $('#form-title').val(data.title)
      $('#form-material').val(data.material)
      $('#form-color').val(data.color)
      $('#form-size').val(data.size)
      $('#form-category').val(data.category_id)
      $('#form-description').val(data.description)
      $.each(images, function(i, val){
        html = "<div class='col-md-2'><img class='product-image' src='"+val.filepath+"'></div>"
        $('.loop-image').append(html)
      })
    },
    dataType:'json',
    type: 'get',
    url: '/admin/product/edit/'+id
  });
}

