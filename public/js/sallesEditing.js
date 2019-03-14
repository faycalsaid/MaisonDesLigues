

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


	 function updateSalle()
{
    var area, description ,capacity , email;
    
    area = $('#formTypenNew').val();
    escription = $('#inputName').val();
    capacity = $('#inputPwdNewUser').val();
    email = $('#inputEmailNew').val();
    var targetFunction = 'insertUser';

    $.ajax({
        method: "POST",
        context: document.body,
        url: "model/userManagingModel/usersModel.php",
        data: {targFunc: targetFunction , level: level, name: name, pwd : pwd, email : email },
        dataType : "json"
      })
        .done(function( msg ) {
            var obj = $.parseJSON(msg);
            alert( "Data Saved: " + obj );
        });
}


