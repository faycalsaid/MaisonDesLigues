
<section class="form-elegant h-100vh w-98" >

<!-- Grid row -->
<div class="row ds-Center">

  <!-- Grid column -->
  <div class="col-md-9 col-lg-7 col-xl-5">

    <!--Form without header-->
    <div class="card">

      <div class="card-body mx-4">

        <!--Header-->
        <div class="text-center">
          <h3 class="dark-grey-text mb-5"><strong>Connectez-vous !</strong></h3>
        </div>

        <!--Body-->
        <form id="formConnect" method="post">

          <div class="md-form">
            <input name="login" type="text" id="Form-email1" class="form-control">
            <label for="Form-email1">Votre Mail ou votre Login</label>
          </div>

          <div class="md-form">
            <input name="passwd" type="password" id="Form-pass1" class="form-control">
            <label for="Form-pass1">Votre Mot de passe</label>
          </div>
        </form>


        <div class="text-center mb-3">
          <button type="button" onclick="submitFormConnect()" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Connexion</button>
        </div>
     
      </div>


    </div>
    <!--/Form without header-->

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

</section>