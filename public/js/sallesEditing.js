

 function editInfo(){
$("#select_info").change(function(){ //Listener for select onChange to enable edit buton
    $("#btnEditInfo").attr('disabled',false);
});
 }


 function editReunion(){
	$("#select_reunion").change(function(){ //Listener for select onChange to enable edit buton
		$("#btnEditReunion").attr('disabled',false);
	});
	 }

function editReception(){
$("#select_reception").change(function(){ //Listener for select onChange to enable edit buton
	$("#btnEditReception").attr('disabled',false);
	});
	 }
	 


