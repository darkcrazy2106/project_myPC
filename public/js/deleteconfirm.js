$(".delete").on("click", function(){
    var _ID = $(this).attr('id');
    // $(".confirm").attr('id', _ID);
    // $(".confirm").on('click', function(){
    //     window.location.href = 'admin/delete/'+_ID;
    // });
    swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, Delete it!",
      closeOnConfirm: false
    },
    function(){
      window.location.href = 'admin/delete/'+_ID;
    });
});
$(".clear").on("click", function(){
    swal({
        title: "Are you sure?",
        text: "Your will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, Clear it!",
        closeOnConfirm: false
      },
      function(){
        window.location.href = '/delete-all';
      });
});
$(".back-to-shopping").on("click",function(){
    window.location.href = '/products';
});
$(".delete-account").on("click", function(){
    var _ID = $(this).attr('id');
    swal({
        title: "Are you sure?",
        text: "Your will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, Delete it!",
        closeOnConfirm: false
      },
      function(){
        window.location.href = '/delete-account/'+_ID;
      });
});
$(".delete-order").on("click", function(){
  var _ID = $(this).attr('id');
  swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, Delete it!",
      closeOnConfirm: false
    },
    function(){
      window.location.href = '/cancelOrder/'+_ID;
    });
});

// $(".del-cart-product").on("click", function(){
//     swal({
//         title: "Are you sure?",
//         text: "Your will not be able to recover this imaginary file!",
//         type: "warning",
//         showCancelButton: true,
//         confirmButtonClass: "btn-danger",
//         confirmButtonText: "Yes, Delete it!",
//         closeOnConfirm: false
//       },
//       function(){
//         var _sessionID = $(this).attr('id');
//         window.location.href = '/delete-cart/'+_sessionID;
//       });
// });