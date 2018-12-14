var table = document.getElementById('my-table'), //Global to use in all functions about the table
    rIndex; 

tableManaging();
    
function tableManaging()
{
    for(var i = 1; i < table.rows.length - 1 ; i++)
    {
        table.rows[i].addEventListener('click', function(e) 
        {
            rIndex = this.rowIndex; //Get the index of the current double clicked row

            selectedRow = table.rows[rIndex].classList; //Get the class of the selected row
            
            if(!selectedRow.contains("tr-color-selected"))
            {
                selectedRow.add("tr-color-selected"); //Change color of selected row
                $("#btnEdit").attr("disabled", false);
                $("#btnDelete").attr("disabled", false);
                removeTableClickListener();
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

function removeTableClickListener()
{
    for(var i = 1; i < table.rows.length - 1 ; i++)
    {
        table.rows[i].removeEventListener('click', testLog() , true );
    }

}

function testLog()
{
    console.log(rIndex);
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
        data: {targFunc: targetFunction , level: level, name: name, pwd : pwd, email : email },
        dataType : "json"
      })
        .done(function( msg ) {
            var obj = $.parseJSON(msg);
            alert( "Data Saved: " + obj );
        });
}

function deleteUser()
{
    var emailToDelete = table.rows[rIndex].cells[2].innerText;
    var targetFunction = 'deleteUser';

    $.ajax({
        method: "POST",
        context: document.body,
        url: "model/userManagingModel/usersModel.php",
        data: {targFunc: targetFunction , email: emailToDelete },
        dataType: "json",
        async : "false"
      })
        .done(function(s) {
            console.log(s);
        });

    deleteRow();
}
function updateUser()
{
    var level, name, email;
    
    level = $('#formPositionEdit').val();
    name = $('#formNameEdit').val();
    newEmail = $('#formEmailEdit').val();
    var oldEmail = table.rows[rIndex].cells[2].innerText;
    var targetFunction = 'updateUser';
    console.log(oldEmail + " " + level);
    $.ajax({
        method: "POST",
        context: document.body,
        url: "model/userManagingModel/usersModel.php",
        data: {targFunc: targetFunction , level: level, name: name, email : newEmail, oldEmail: oldEmail },
        dataType: "json"
      })
        .done(function(s) {
            console.log("JS AJAX RESP UPDATE USER : "+ s);
        });

    deleteRow();
}

function checkMail()
{
    console.log("here");
    var mail = $('#inputEmailNew').val();
    var targetFunction = "mailExist";

    $.ajax({
        method: "POST",
        context: document.body,
        url: "model/userManagingModel/usersModel.php",
        data: {targFunc: targetFunction , email: mail},
        dataType: "json"
      })
        .done(function( msg ) {
            var obj = $.parseJSON(msg) // True if email already taken else False
          if(obj)
          {
              console.log(obj);
            $('#inputEmailNew').addClass("invalid"); 
          }
          else
          {
            $('#inputEmailNew').removeClass("invalid");
            $('#inputEmailNew').addClass("valid"); 
          }
    });

    
}




