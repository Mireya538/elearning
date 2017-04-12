$(function() {
	$( ".btn-edit-rule" ).click(function() {
		console.log($(this).siblings());
		var siblings = "";
		$(this).siblings().each(function() {
			siblings +=$(this).text()+",";
		});
		siblings = siblings.split(",");
		console.log(siblings);

		$("#id").val(siblings[0]);
		$("#name").val(siblings[1]);
        $("#email").val(siblings[2]);
        // if(siblings[3].trim() == "Female"){
        // 	$("#gender").val("2");
        // } else {
        // 	$("#gender").val("1");
        // }
        $("#gender").val(siblings[3].trim());
        $("#country").val(siblings[4]);
        $("#roles").val(siblings[5]);

	});

	$( "#btn-clear" ).click(function() {
		$("#id").val("");
		$("#name").val(" ");
        $("#country").val(" ");
        $("#roles").val(" ");
	});

	$('#add_user').on('submit', function (e) {
        e.preventDefault();
		var id = $("#id").val();
		var name = $("#name").val(), email = $("#email").val(), gender = $("#gender").val(), country = $("#country").val();
		var data = { _token: $('#token').val(), name: name, email: email, gender: gender, country: country  };
		if(id == "") {
			$.ajax({
	            type: "POST",
	            url: 'addUser',
         		headers: {'X-CSRF-TOKEN': $('#token').val()} ,
	            dataType : "json",
			    contentType: "application/json",
			    data : JSON.stringify(data),
	            success: function( msg ) {
	                $("#ajaxResponse").append("<div>"+msg+"</div>");
	            }
	        });
		} else {
			// $.get('verify_user', function(data){ 
	  //       	console.log(data);                                
	  //   	});
		}
	});

	// $('#add_user').on('submit', function (e) {
 //        e.preventDefault();
 //        var title = $('#title').val();
 //        var body = $('#body').val();
 //        var published_at = $('#published_at').val();
 //        $.ajax({
 //            type: "POST",
 //            url: host + '/articles/create',
 //            data: {title: title, body: body, published_at: published_at},
 //            success: function( msg ) {
 //                $("#ajaxResponse").append("<div>"+msg+"</div>");
 //            }
 //        });
 //    });


	$("#delete_user").click(function () {});
});