$(document).ready(function(){
	$("#chitiet").change(function(){
		var id = $("#chitiet").val();
		alert(id);
		$.post("View/process_ajax/ajax_modal.php", {chitiet: id}, function(data){
			$("#xemchitiet").html(data);
			//alert("Data: " + data);
		})
	})
})