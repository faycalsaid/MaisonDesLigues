
<div class="wrapper-modal-editor">

  <div class="block my-4">
    <div class="d-flex justify-content-center">
      <p class="h5 text-primary createShowP">0 row selected</p>
    </div>
  </div>

  <div class="row d-flex justify-content-center modalWrapper">
    <div class="modal fade addNewInputs" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold text-primary ml-5">Ajouter un nouvel Utilisateur </h4>
            <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">

            <div class="md-form mb-5">
            <select class="browser-default custom-select" id="formPositionNew">
              <option value="" disabled selected>Choose your option</option>
              <option value="2">Admin</option>
              <option value="1">User</option>
              <option value="0">Null</option>
            </select>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="inputName" class="form-control validate">
              <label data-error="wrong" data-success="right" for="inputName">Nom</label>
            </div>

            
            <div class="md-form mb-5">
              <input type="text" id="inputPwdNewUser" class="form-control validate">
              <label data-error="wrong" data-success="right" for="inputPwdNewUser">Mot de Passe</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="inputEmailNew" class="form-control validate" onkeyup="checkMail()">
              <label data-error="wrong" data-success="right" for="inputEmailNew">Email</label>
            </div>


            <div class="md-form mb-5">
              <input type="date" id="inputDate" class="form-control" placeholder="Select Date">
              <label data-error="wrong" data-success="right" for="inputDate"></label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="inputSalary" class="form-control validate">
              <label data-error="wrong" data-success="right" for="inputSalary">Salary</label>
            </div>

          </div>
          <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
            <button id="btnAdd" class="btn btn-outline-primary btn-block buttonAdd" data-dismiss="modal" onclick="createUser()">Add form
              <i class="fa fa-paper-plane-o ml-1"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <a href="" class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-target="#modalAdd">Add<i
          class="fa fa-plus-square ml-1"></i></a>
    </div>

    <div class="modal fade modalEditClass" id="modalEdit" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold text-secondary ml-5">Edit form</h4>
            <button type="button" class="close text-secondary" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <input type="text" id="formNameEdit" class="form-control validate">
              <label data-error="wrong" id="test1" data-success="right" for="formNameEdit">Nom</label>
            </div>

            <div class="md-form mb-5">
            <select class="browser-default custom-select" id="formPositionEdit">
              <option id="formPosEditDef" disabled selected></option>
              <option value="2">Admin</option>
              <option value="1">User</option>
              <option value="0">NULL</option>
            </select>
              <label data-error="wrong" data-success="right" for="formPositionEdit" style="position:absolute;margin-left:-5000px;">Position</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formEmailEdit" class="form-control validate" onkeyup="checkMail()">
              <label data-error="wrong" data-success="right" for="formOfficeEdit">Email</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formAgeEdit" class="form-control validate">
              <label data-error="wrong" data-success="right" for="formAgeEdit">Age</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formDateEdit" class="form-control datepicker">
              <label data-error="wrong" data-success="right" for="formDateEdit">Date</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formSalaryEdit" class="form-control validate">
              <label data-error="wrong" data-success="right" for="formSalaryEdit">Salary</label>
            </div>


          </div>
          <div class="modal-footer d-flex justify-content-center editInsideWrapper">
            <button id="btnValidEdit" class="btn btn-outline-secondary btn-block editInside" data-dismiss="modal">Edit
              form
              <i class="fa fa-paper-plane-o ml-1"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center buttonEditWrapper">
      <button id="btnEdit" class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" onclick="fillEditForm()" data-target="#modalEdit"
        disabled>Edit<i class="fa fa-pencil-square-o ml-1"></i></a>
    </div>

    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDelete"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold ml-5 text-danger">Delete</h4>
            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <p id= "verificationDelete" class="text-center h4">Are you sure to delete selected row?</p>

          </div>
          <div class="modal-footer d-flex justify-content-center deleteButtonsWrapper">
            <button type="button" class="btn btn-danger btnYesClass" id="btnYes" data-dismiss="modal" onclick="deleteUser()">Yes</button>
            <button type="button" class="btn btn-primary btnNoClass" id="btnNo" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <button id="btnDelete" class="btn btn-danger btn-sm btn-rounded buttonDelete" data-toggle="modal"
       disabled data-target="#modalDelete" onclick="fillDeleteForm()"
      >Delete<i class="fa fa-times ml-1"></i></a>
    </div>
  </div>

  <table id="my-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="th-sm" >Nom</th>
        
        <th class="th-sm" >Status</th>
        
        <th class="th-sm" >Email</th>
      </tr>
    </thead>
    <tbody>
    
    <?php 
      foreach($users as $user):
        if($user['level'] == 2)
        {
          $level = "Admin";
        }
        else if ($user['level'] == 1)
        {
          $level = "User";
        }
    ?>    
      <tr>
        <td id="name"> <?= $user['name'];?></td>
        <td id="level" > <?= $level?></td>
        <td id="email"> <?= $user['email'];?></td>
      </tr>
    <?php endforeach ?>
    
    </tbody>
    <tfoot>
      <tr>
        <th>Name
        </th>
        <th>Position
        </th>
        <th>Office
        </th>
      </tr>
    </tfoot>
  </table>
</div>
<script type="text/javascript" src="public/js/usersEditing.js"></script>