// $('#trash').on("click", function(e) {
//     e.preventDefault();
//     const delUrl = $(this).attr("href");
//     swal({
//             title: "Are you sure?",
//             text: "Once deleted, you will not be able to recover this imaginary file!",
//             icon: "warning",
//             buttons: true,
//             dangerMode: true,
//         })
//         .then((willDelete) => {
//             if (willDelete) {
//                 $.ajax({
//                     type: "DELETE",
//                     url: delUrl,
//                     data: {
//                         "_token": "{{ csrf_token() }}"
//                     },
//                     dataType: "html",
//                     success: function(response) {
//                         swal("Poof! Your imaginary file has been deleted!", {
//                             icon: "success",
//                         }).then((willDelete) => {
//                             location.reload();
//                         })
//                     }
//                 });
//             } else {
//                 swal("Your imaginary file is safe!");
//             }
//         });
// });