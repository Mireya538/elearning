$(function() {

// add function
$("#add-rol-submit").click(function() {
  $.ajax({
    type: 'post',
    url: 'addRole',
    data: {
      '_token': $('input[name=_token]').val(),
      'name': $('input[name=nameRole]').val()
    },
    success: function(data) {
            console.log(data);
      if ((data.errors)) {
        // $('.error').removeClass('hidden');
        // $('.error').text(data.errors.title);
        // $('.error').text(data.errors.description);
      } else {
        // $('.error').remove();
        // $('#table').append("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.title + "</td><td>" + data.description + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-title='" + data.title + "' data-description='" + data.description + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-title='" + data.title + "' data-description='" + data.description + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
      }
    },
  });
  // $('#title').val('');
  // $('#description').val('');
});

    // Edit Data (Modal and function edit data)
//     $(document).on('click', '.edit-modal', function() {
//     $('#footer_action_button').text(" Update");
//     $('#footer_action_button').addClass('glyphicon-check');
//     $('#footer_action_button').removeClass('glyphicon-trash');
//     $('.actionBtn').addClass('btn-success');
//     $('.actionBtn').removeClass('btn-danger');
//     $('.actionBtn').addClass('edit');
//     $('.modal-title').text('Edit');
//     $('.deleteContent').hide();
//     $('.form-horizontal').show();
//     $('#fid').val($(this).data('id'));
//     $('#t').val($(this).data('title'));
//     $('#d').val($(this).data('description'));
//     $('#myModal').modal('show');
// });
//   $('.modal-footer').on('click', '.edit', function() {
//   $.ajax({
//       type: 'post',
//       url: '/editItem',
//       data: {
//           '_token': $('input[name=_token]').val(),
//           'id': $("#fid").val(),
//           'title': $('#t').val(),
//           'description': $('#d').val()
//       },
//       success: function(data) {
//           $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.title + "</td><td>" + data.description + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-title='" + data.title + "' data-description='" + data.description + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-title='" + data.title + "' data-description='" + data.description + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
//       }
//   });
// });


//delete function
// $(document).on('click', '.delete-modal', function() {
//   $('#footer_action_button').text(" Delete");
//   $('#footer_action_button').removeClass('glyphicon-check');
//   $('#footer_action_button').addClass('glyphicon-trash');
//   $('.actionBtn').removeClass('btn-success');
//   $('.actionBtn').addClass('btn-danger');
//   $('.actionBtn').addClass('delete');
//   $('.modal-title').text('Delete');
//   $('.id').text($(this).data('id'));
//   $('.deleteContent').show();
//   $('.form-horizontal').hide();
//   $('.title').html($(this).data('title'));
//   $('#myModal').modal('show');
// });
});