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
            <select class="mdb-select md-form" id="formPositionEdit">
              <option id="formPosEditDef" disabled selected></option>
              <option value="2">Admin</option>
              <option value="1">User</option>
              <option value="0">NULL</option>
            </select>
              <label data-error="wrong" data-success="right" for="formPositionEdit">Position</label>
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