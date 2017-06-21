$(document).ready(function(){

	$("#order_by_email").click(function(){
		resort_users(0);
	});
	

	$("#order_by_lname").click(function(){
		resort_users(1);
	});
	
	$("#user_id").change(function(){

        var user_id = $("#user_id").val();

		propagate_csrf_code();
        jQuery.ajax({
            url: "/ajax/get_role_info_admin",
            type: "POST",
            data: {   
                "user_id":user_id,
            },
            dataType : "json",
            beforeSend: function () {
            },               
            success: function( data ) {
 // populate roles available
//				$("#role_id").empty();
//				$("#role_id").append(new Option("Please choose a role", "0"));
//				$.each(data.arr_roles_available, function(index, item) {
//					$("#role_id").append(new Option(item.name, item.id));
//		        });
// populate roles already possessed		        
				$("#role_id").empty();
				$("#role_id").append(new Option("Please choose a role", "0"));
				$.each(data.arr_roles_possessed, function(index, item) {
					$("#role_id").append(new Option(item.name, item.id));
		        });
				

//				$("#roles_possessed").append("<ul>");
//				$.each(data.arr_roles_possessed, function(index, item) {
//					$("#roles_possessed").append("<li>"+item.name+"</li>");					
//		        });
//				$("#roles_possessed").append("</ul>");
			},
            error: function( xhr, status, errorThrown ) {
                console.log("Ajax error");
            }
        });  // end jquery ajax
    }); // end on dropdown change

    

    function resort_users(bool_order_by_lname)
    {
		propagate_csrf_code();
        jQuery.ajax({
            url: "/ajax/resort_users_admin",
            type: "POST",
            data: {   
                "bool_order_by_lname":bool_order_by_lname,
            },
            dataType : "json",
            beforeSend: function () {
            },               
            success: function( data ) {
				$("#user_id").empty();
				$.each(data, function(index, item) {
		        	$("#user_id").append(new Option(item.content, item.id));
		        });
			},
            error: function( xhr, status, errorThrown ) {
                console.log("Ajax error");
            }
        });  // end jquery ajax
        
    }  // end function resort users

    function propagate_csrf_code()
    {
        var csrf_token = $("input[name=_token]").val();

// laravel imposes csrf protection - the ajax setup 
// sends the csrf token in the header to remove the 
// 500 internal service error 
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': csrf_token
			}
		});
    }     // end function propagate_csrf_code  
});

