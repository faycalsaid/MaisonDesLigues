var table = document.getElementById('my-table'), //Global to use in all functions about the table
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
    $('#formPosEditDef').text(table.rows[rIndex].cells[1].innerText).trigger("change"); 
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

function createUser()
{
    var level, name, pwd, email;
    
    level = $('#formPositionNew').val();
    name = $('#inputName').val();
    pwd = $('#inputPwdNewUser').val();
    email = $('#inputEmailNew').val();
    var targetFunction = 'insertUser';


    $.ajax({
        method: "POST",
        context: document.body,
        url: "model/userManagingModel/usersModel.php",
        data: {targFunc: targetFunction , level: level, name: name, pwd : pwd, email : email }
      })
        .done(function( msg ) {
          alert( "Data Saved: " + msg );
        });
}

function checkMail()
{
    var mail = $('#inputEmailNew').val();
    var targetFunction = 'mailExist';

    $.ajax({
        method: "POST",
        context: document.body,
        url: "model/userManagingModel/usersModel.php",
        data: {targFunc: targetFunction , email: mail}
      })
        .done(function( msg ) {
          if(msg)
          {
            console.log("Message php " +  $.parseJSON(msg));
          }
          else
          {
            console.log("Message php " +  $.parseJSON(msg));
          }
    });

    
}




