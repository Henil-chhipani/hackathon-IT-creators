$(document).ready(function(){
	$("#myForm").formwizard({ 
	  formPluginEnabled: true,
	  validationEnabled: true,
	  focusFirstInput : true,
	  formOptions :{
		success: function(data){
		  $("#status").fadeTo(500,1,function(){ 
			$(this).html("You are now registered!").fadeTo(5000, 0); 
		  });
		},
		beforeSubmit: function(data){
		  $("#data").html("data sent to the server: " + $.param(data));
		},
		dataType: 'json',
		resetForm: true
	  }
	});
  
	// Previous button click event
	$("#prev-btn").click(function(){
	  $("#myForm").formwizard("back");
	});
  
	// Next button click event
	$("#next-btn").click(function(){
	  $("#myForm").formwizard("next");
	});
  });
  