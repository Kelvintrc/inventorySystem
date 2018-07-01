$(document).ready(function() {
	var DOMAIN = "http://localhost/xampp/kelvin_project/public_html";
 $("#register_form").on("submit",function(){
 	
 	var status = false;
 	var name = $("#username");
 	var email = $("#email");
 	var pass1 = $("#password1");
 	var pass2 = $("#password2");
 	var type = $("#usertype");
 	
 	var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
 	if (name.var == "" || name.val().length < 6) {
 		name.addClass("border-danger");
 		$("#u_error").html("<span class='text-danger'>Please Enter Name and name should be more than 6 char</span>");
 		status = false;
 	}else{
 		name.removeClass("border-danger");
 		$("#u_error").html("");
 		status = true;
 	}
 	if (!e_patt.test(email.val())) {
 		email.addClass("border-danger");
 		$("#e_error").html("<span class='text-danger'>Please Enter A Valid Email Address</span>");
 		status = false;
 	}else{
 		email.removeClass("border-danger");
 		$("#e_error").html("");
 		status = true;
 	}
 	if (pass1.val() == "" || pass1.val().length < 9) {
 		pass1.addClass("border-danger");
 		$("#p1_error").html("<span class='text-danger'>Please Enter more than 9 digit Password</span>");
 		status = false;
 	}else{
 		pass1.removeClass("border-danger");
 		$("#p1_error").html("");
 		status = true;
 	}
 	if (pass2.val() == "" || pass1.val().length < 9) {
 		pass2.addClass("border-danger");
 		$("#p2_error").html("<span class='text-danger'>Please Enter more than 9 digit Password</span>");
 		status = false;
 	}else{
 		pass2.removeClass("border-danger");
 		$("#p2_error").html("");
 		status = true;
 	}
 	if (type.val() == "") {
 		type.addClass("border-danger");
 		$("#t_error").html("<span class='text-danger'>Please Choose Usertype</span>");
 		status = false;
 	}else{
 		type.removeClass("border-danger");
 		$("#t_error").html("");
 		status = true;
 	}
 	if ((pass1.val() == pass2.val()) && status == true) {
            $(".overlay").show();
            $.ajax({
        	url : DOMAIN+"/includes/process.php",
        	method : "POST",
        	data : $("#register_form").serialize(),
        	success : function(data){
        		if (data == "EMAIL_ALREADY_EXISTS") {
                    $(".overlay").hide();
        			alert("Email alredy used!");
        		}else if (data == "SOME_ERROR") {
                    $(".overlay").hide();
                    alert("Something went wrong");
        		}else{
                    $(".overlay").hide();
        			window.location.href = encodeURI(DOMAIN+"/index.php?msg Now registered you can login!");
        		}
        	}
        })
 	}else{
 		pass2.addClass("border-danger");
 		$("#p2_error").html("<span class='text-danger'>Password Does Not Match</span>");
 		status = true;
 	}
 })

//login part
$("#login_form").on("submit",function(){
	var email = $("#log_email");
	var pass = $("#log_password");
	var status = false;
	if (email.val() == "") {
        email.addClass("border-danger");
		$("#e_error").html("<span class='text-danger'>Please Enter Email Address</span>");
		status = false;
	}else{
		email.removeClass("border-danger");
		$("#e_error").html("");
		status = true;
	}

	if (pass.val() == "") {
        pass.addClass("border-danger");
		$("#p_error").html("<span class='text-danger'>Please Enter Password</span>");
		status = false;
	}else{
		pass.removeClass("border-danger");
		$("#p_error").html("");
		status = true;
	}
	if (status) {
            $(".overlay").show();
		    $.ajax({
        	url : DOMAIN+"/includes/process.php",
        	method : "POST",
        	data : $("#login_form").serialize(),
        	success : function(data){
        		if (data == "NOT_REGISTERED") {
                $(".overlay").hide();
        		email.addClass("border-danger");
			 	$("#e_error").html("<span class='text-danger'>Seams like you are not Registered</span>");	
        		}else if (data == "PASSWORD_NOT_MATCHED") {
                    $(".overlay").hide();
                    pass.addClass("border-danger");
			 		$("#p_error").html("<span class='text-danger'>Incorrect Password</span>");
			 		status = false;
        		}else{
                    $(".overlay").hide();
        			console.log(data);
        			window.location.href =DOMAIN+"/dashboard.php";
        		}
        	}
        })
	}
})
//fetch category
fetch_category();
function fetch_category(){
    $.ajax({
        url : DOMAIN+"/includes/process.php",
        method : "POST",
        data : {getCategory:1},
        success : function(data){
            var root = "<option value='0'>Root</option>";
            var choose = "<option value=''>Choose Category</option>";
            $("#parent_cat").html(root+data);
            $("#select_cat").html(choose+data);
        }
    })
}
//fetch brand
fetch_brand();
function fetch_brand(){
    $.ajax({
        url : DOMAIN+"/includes/process.php",
        method : "POST",
        data : {getBrand:1},
        success : function(data){
            var choose = "<option value=''>Choose Brand</option>";
            $("#select_brand").html(choose+data);
        }
    })
}
//add category
$("#category_form").on("submit",function(){
    if ($("#category_name").val() == "") {
        $("#category_name").addClass("border-danger");
        $("#cat_error").html("<span class='text-danger'>Please Enter Category Name</span>");
    }else{
        $.ajax({
            url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : $("#category_form").serialize(),
            success : function(data){
                if (data == "CATEGORY_ADDED") {
                    $("#category_name").removeClass("border-danger");
                    $("#cat_error").html("<span class='text-success'>New Category Added Successfully..!</span>");
                    $("#category_name").val("");
                    fetch_category();
                }else{
                    alert(data);
                }
            }
        })
    }
})

//Add brand
$("#brand_form").on("submit",function(){
    if ($("#brand_name").val() == "") {
        $("#brand_name").addClass("border-danger");
        $("#brand_error").html("<span class='text-danger'>Please Enter Brand Name</span>");
    }else{
        $.ajax({
           url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : $("#brand_form").serialize(), 
            success : function(data){
                if (data == "BRAND_ADDED"){
                    $("#brand_name").removeClass("border-danger");
                    $("#brand_error").html("<span class='text-success'>New Brand Added Successfully..!</span>");
                    $("#brand_name").val("");
                    fetch_brand();
                }else{
                    alert(data);
                }
                
            }

        
        })

        }
})
//add product
$("#product_form").on("submit",function(){
    $.ajax({
           url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : $("#product_form").serialize(), 
            success : function(data){
                if (data == "NEW_PRODUCT_ADDED"){
                    alert("New Product Added Successfully..!");
                    $("#product_name").val("");
                    $("#select_cat").val("");
                    $("#select_brand").val("");
                    $("#product_price").val("");
                    $("#product_qty").val("");
                }else{
                    console.log(data);
                    alert(data);
                }
                
            }

        
        })
   })

})


