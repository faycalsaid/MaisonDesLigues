
var table = document.getElementById('my-table'), 
    rIndex;   

tableManaging();
    
function tableManaging()
{
    for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].addEventListener('click', function() 
        {
            rIndex = this.rowIndex; //Get the index of the current double clicked row

            selectedRow = table.rows[rIndex].classList; //Get the element of the selected row
            
            if(!selectedRow.contains("tr-color-selected"))
            {
                selectedRow.add("tr-color-selected"); //Change color of selected row
                $("#btnEdit").attr("disabled", false);
                $("#btnDelete").attr("disabled", false);
            }
            else
            {
                selectedRow.remove("tr-color-selected"); //Remove color of selected row
                $("#btnEdit").attr("disabled", true);
                $("#btnDelete").attr("disabled", true);
            }

            console.log(rIndex);
        });
    }

}


function fillEditForm() //fill the editing form with selected user data
{
    $('#formNameEdit').val(table.rows[rIndex].cells[0].innerText).trigger("change"); 
    $('#formPositionEdit').val(table.rows[rIndex].cells[1].innerText).trigger("change"); 
    $('#formEmailEdit').val(table.rows[rIndex].cells[2].innerText).trigger("change"); 

    $("#btnValidEdit").click(function() {
        $("#btnEdit").attr("disabled", true);
        $("#btnDelete").attr("disabled", true);
    });
}
//Deleting User functions
function fillDeleteForm() //Fill the delete form with selected user name
{
    $('#verificationDelete').text("Etes vous sur de vouloir supprimer " + table.rows[rIndex].cells[0].innerText);
    
}

function deleteRow() //delete selected user row from table
{
    $("tr").eq(rIndex).remove();
}

// function checkMail()
// {
//     var tryMail = $.('#')
    
//     $.post("model/userManagingModel/mailExist.php", { email : tryMail

//     });
// }

// $.post("verification-mail.php", {email : mail},
// 	function(msg){
// 		if(msg== 1){		// Si le login est dÃ©jÃ  dans la base
// 			$('#msg_mail').html('Ce Mail est dÃ©jÃ  pris.');
// 			$mail.css('border','1px solid red');
// 			$mail.css('background','pink');
// 		} else  if(msg== 2){	// Si le login n'est pas dans la base
// 			$('#msg_mail').html(' âœ”ï¸');
// 			$mail.css('border','1px solid green');
// 			$mail.css('background','lightgreen');
// 		}

// 	}



