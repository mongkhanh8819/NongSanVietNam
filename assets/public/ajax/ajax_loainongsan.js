$(document).ready(function(){
	$("#nhomns").change(function(){
		var id = $("#nhomns").val();
		//alert(id);
		$.post("View/process_ajax/loainongsan.php", {nhomns: id}, function(data){
			//alert(data);
			$("#loains").html(data);
		})
	})
})