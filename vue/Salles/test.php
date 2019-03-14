
<link    rel="stylesheet" type="text/css" href="public/css/Salle.css">



<!--     Section: Products v.2 -->
<section class="text-center my-5">

          <!-- Section heading -->
          <h2 class="h1-responsive font-weight-bold text-center my-5">Our bestsellers</h2>
          <!-- Section description -->
          <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
            nostrum quisquam eum porro a pariatur veniam.</p>

          <!-- Grid row -->
          <div class="row ml-1 mr-1">

            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
              <!-- Card -->
              <div class="card card-cascade wider card-ecommerce">
                <!-- Card image -->
                <div class="view view-cascade overlay">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img (55).jpg" class="card-img-top"
                    alt="sample photo">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!-- Card image -->
                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">
                  <!-- Category & Title -->
                  <a href="" class="text-muted">
                    <h5>Informatique - multimédia</h5>
                  </a>
                  
                  <!-- Description -->
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                  <!-- Card footer -->
                  <div class="card-footer px-1">
                  <div id="info">Observe the platform icon's motion direction when there is up and down hover on options.</div>

             
<div class="text-center buttonEditWrapper">
    <button id="btnEditInfo" class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalEdit1"
      >Edit<i class="fa fa-pencil-square-o ml-1"></i></a>
  </div>
              

                  </div>
                </div>
                <!-- Card content -->
              </div>
              <!-- Card -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
              <!-- Card -->
              <div class="card card-cascade wider card-ecommerce">
                <!-- Card image -->
                <div class="view view-cascade overlay">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(49).jpg" class="card-img-top"
                    alt="sample photo">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!-- Card image -->
                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">
                  <!-- Category & Title -->
                  <a href="" class="text-muted">
                    <h5>Salles de réunion</h5>
                  </a>
                  
                  <!-- Description -->
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                  <!-- Card footer -->
                  <div class="card-footer px-1">
                  
<div class="text-center buttonEditWrapper">
    <button id="btnEditReunion" class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalEdit2"
      >Edit<i class="fa fa-pencil-square-o ml-1"></i></a>
  </div>
                  </div>
                </div>
                <!-- Card content -->
              </div>
              <!-- Card -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6">
              <!-- Card -->
              <div class="card card-cascade wider card-ecommerce">
                <!-- Card image -->
                <div class="view view-cascade overlay">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img (56).jpg" class="card-img-top"
                    alt="sample photo">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!-- Card image -->
                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">
                  <!-- Category & Title -->
                  <a href="" class="text-muted">
                    <h5>Salles de réception</h5>
                  </a>
                  
                  <!-- Description -->
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                  <!-- Card footer -->
                  <div class="card-footer px-1">
                  
<div class="text-center buttonEditWrapper">
    <button id="btnEditReception" class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalEdit3"
      >Edit<i class="fa fa-pencil-square-o ml-1"></i></a>
  </div>
                  </div>
                </div>
                <!-- Card content -->
              </div>
              <!-- Card -->
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

</section>
<!--     Section: Products v.2 -->

<!-- PREMIER EDIT-->

  <div class="modal fade modalEditClass" id="modalEdit1" tabindex="-1" role="dialog" aria-hidden="true">
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
        
          <select class="mdb-select md-form" id="formTypenNew">
          <?php
          
          foreach($sallesInfo as $salle)
          { ?>
           <option value="<?= $salle['room_name'] ?>"><?= $salle['room_name'] ?></option>
       <?php
         } ?>
          </select>

          </div>

          <div class="md-form mb-5">
        
          <select class="mdb-select md-form" id="formTypenNew">
          <?php
          
          foreach($type as $salle)
          { ?>
           <option value="<?= $salle['area_name'] ?>"><?= $salle['area_name'] ?></option>
       <?php
         } ?>
          </select>
          </div>

          

          <div class="md-form mb-5">
            <input type="text" id="formDescriptionEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formAgeEdit">Description</label>
          </div>
          
          <div class="md-form mb-5">
            <input type="text" id="formCapacityEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formSalaryEdit">Capacité</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="formEmailEdit" class="form-control validate" onkeyup="checkMail()">
            <label data-error="wrong" data-success="right" for="formOfficeEdit">Email</label>
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

  <script type="text/javascript" src="public/js/sallesEditing.js"></script>
  

  
<!-- DEUXIEME EDIT-->

<div class="modal fade modalEditClass" id="modalEdit2" tabindex="-1" role="dialog" aria-hidden="true">
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
        
          <select class="mdb-select md-form" id="formTypenNew">
          <?php
          foreach($sallesReunion as $salle)
          { ?>
           <option value="<?= $salle['room_name'] ?>"><?= $salle['room_name'] ?></option>
       <?php
         } ?>
          </select>
          </div>

          

          <div class="md-form mb-5">
            <input type="text" id="formDescriptionEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formAgeEdit">Description</label>
          </div>
          
          <div class="md-form mb-5">
            <input type="text" id="formCapacityEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formSalaryEdit">Capacité</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="formEmailEdit" class="form-control validate" onkeyup="checkMail()">
            <label data-error="wrong" data-success="right" for="formOfficeEdit">Email</label>
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

  <script type="text/javascript" src="public/js/sallesEditing.js"></script>


<!-- DEUXIEME EDIT-->

<div class="modal fade modalEditClass" id="modalEdit3" tabindex="-1" role="dialog" aria-hidden="true">
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
        
          <select class="mdb-select md-form" id="formTypenNew">
          <?php
         foreach($sallesReception as $salle)
         { ?>
          <option value="<?= $salle['room_name'] ?>"><?= $salle['room_name'] ?></option>
      <?php
        } ?>
          </select>
          </div>

          

          <div class="md-form mb-5">
            <input type="text" id="formDescriptionEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formAgeEdit">Description</label>
          </div>
          
          <div class="md-form mb-5">
            <input type="text" id="formCapacityEdit" class="form-control validate">
            <label data-error="wrong" data-success="right" for="formSalaryEdit">Capacité</label>
          </div>

          <div class="md-form mb-5">
            <input type="text" id="formEmailEdit" class="form-control validate" onkeyup="checkMail()">
            <label data-error="wrong" data-success="right" for="formOfficeEdit">Email</label>
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

  <script type="text/javascript" src="public/js/sallesEditing.js"></script>
  