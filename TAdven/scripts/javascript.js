$(document).ready(function() {
   $('#consultant-id').change(function(){
	   	var optionval = this.value;
	   	$.ajax({
		   	url:"gamelogic.php",
		    type:"POST",
		    data:{ ctid: optionval},
		    dataType: "JSON",
		    success: function(str){
		  		$('#output').html(str.ctid),		  		
		  	error: function(jqXHR,textStatus){
		  		alert( "Request failed: " + textStatus )}
		});
	});
});


$("#console").scrollTop($("#console")[0].scrollHeight);
$("#command_line").val("");