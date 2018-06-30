$(document).ready(function() {
	var DOMAIN = "http://localhost/xampp/kelvin_project/public_html";
//manage category
manageCategory(1);
function manageCategory(pn){
    $.ajax({
        url : DOMAIN+"/includes/process.php",
        method : "POST",
        data : {manageCategory:1,pageno:pn}, 
        success : function(data){
                $("#get_category").html(data);
                
            }
    })
}
$("body").delegate(".page-link","click",function(){
	var pn = $(this).attr("pn");
	manageCategory(pn);
})

//Delete Category
$("body").delegate(".del_cat","click",function(){
	var did = $(this).attr("did");
	if (confirm("Are you sure you want to delete..?")) {
	      $.ajax({
	        url : DOMAIN+"/includes/process.php",
	        method : "POST",
	        data : {deleteCategory:1,id:did}, 
	        success : function(data){
	        	if (data == "DEPENDENT_CATEGORY") {
	        		 alert("Sorry ! This is a dependent category!");
	        	}else if (data == "CATEGORY_DELETED") {
	        		alert("Category deleted successfully..!");
	        		manageCategory(1);
	        	}else if (data == "Deleted") {
                    alert("Deleted successfully");
	            }else{
	              alert(data);
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
            $("#parent_cat").html(root+data);
        }
    })
}  

//Update Categories
$("body").delegate(".edit_cat","click",function(){
    var eid = $(this).attr("eid");
    $.ajax({
    	url : DOMAIN+"/includes/process.php",
	    method : "POST",
	    dataType : "json",
	    data : {updateCategory:1,id:eid},
	    success : function(data){
	    	console.log(data);
	    	$("#cid").val(data["cid"]);
	    	$("#update_category").val(data["update_category"]);
	    	$("#parent_cat").val(data["parent_cat"]);
	    }
    })
	})
$("#update_category_form").on("submit",function(){
	  if ($("#update_category").val() == "") {
        $("#update_category").addClass("border-danger");
        $("#cat_error").html("<span class='text-danger'>Please Enter Category Name</span>");
    }else{
        $.ajax({
            url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : $("#update_category_form").serialize(),
            success : function(data){
               alert(data);
               window.location.href = "";
            }
        })
    }
})
//--------------------Brand-------------------------
//manage brand
manageBrand(1);
function manageBrand(pn){
    $.ajax({
        url : DOMAIN+"/includes/process.php",
        method : "POST",
        data : {manageBrand:1,pageno:pn}, 
        success : function(data){
                $("#get_brand").html(data);
                
            }
    })
}

$("body").delegate(".page-link","click",function(){
	var pn = $(this).attr("pn");
	manageBrand(pn);
})

//Delete Brand
$("body").delegate(".del_brand","click",function(){
	var did = $(this).attr("did");
	if (confirm("Are you sure you want to delete..?")) {
	      $.ajax({
	        url : DOMAIN+"/includes/process.php",
	        method : "POST",
	        data : {deleteBrand:1,id:did}, 
	        success : function(data){
	        	if (data == "DELETED") {
	        		 alert("Brand Deleted Successfully---!");
	        	
	            }else{
	              alert(data);
	            }

	        }

	    })
	}
		
})

})