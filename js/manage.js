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
	}else{

	}
		
})

})