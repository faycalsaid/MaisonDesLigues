<section>
	<div class="mt-5">
		<div  class="mg-lr w-100">
			<div class="d-flex justify-content-around flex-wrap">

        <?php foreach($assos as $asso):
        
        if ($asso['id_sector'] == 1) {
            $icon = 'fa fa-asterisk';
        } elseif ($asso['id_sector'] == 2) {
            $icon = 'fa fa-archive';
        } elseif ($asso['id_sector'] == 3) {
            $icon = 'fa fa-shopping-basket';
        } elseif ($asso['id_sector'] == 4) {
            $icon = 'fa fa-american-sign-language-interpreting';
        }
        
    
    ?> 

        <!-- Card Flip -->
        <div class="card-flip card-flip2 ml-4">
            <div class="flip">
                <div class="front">
                    <!-- front content -->
                    <div class="card">
                        <img class="card-img-top" src="<?= $asso['urlImage'] ?>" alt="100%x180" style="height: 180px; width: 100%; display: block;" data-holder-rendered="true">
                        <div class="card-block mt-2 ml-2 mr-2">
                            <h4 class="card-title text-center"><?= $asso['name'] ?></h4>
                            <h6 class="text-center font-weight-bold mb-3 blue-text"><i class="<?= $icon ?> pr-2"></i><?= $asso['sector'] ?></h6>
                        </div>
                        
                </div>
            </div>
            <div class="back">
                <!-- back content -->
                <div class="card">
                    <div class="card-block pt-3">
                    <h4 class="card-title text-center"><?= $asso['name'] ?></h4>
                    </div>
                    <form action="?menu=ASSOCIATION" class="ml-3 mr-3" method="post">
                        <div class="md-form">
                            <input id="input_nom" class="form-control" type="text" length="10" value="<?= $asso['name'] ?>" mdbCharCounter mdbInputDirective>
                            <label for="input_nom">Nom</label>
                        </div>
                        <div class="md-form">
                            <input id="input_asso_mail" class="form-control" type="text" length="10" value="<?= $asso['mail'] ?>" mdbCharCounter mdbInputDirective>
                            <label for="input_asso_mail">Mail association</label>
                        </div>
                        <div class="md-form">
                            <input id="input_res_mail" class="form-control" type="text" length="10" value="<?= $asso['email'] ?>" mdbCharCounter mdbInputDirective>
                            <label for="input_res_mail">Responcable mail</label>
                        </div>
                        <div class="md-form">
                            <input id="input_sector" class="form-control" type="text" length="10" value="<?= $asso['sector'] ?>" mdbCharCounter mdbInputDirective>
                            <label for="input_sector">Secteur</label>
                        </div>
                        <div class="md-form">
                            <input id="input_img" class="form-control" type="text" length="10" value="<?= $asso['urlImage'] ?>" mdbCharCounter mdbInputDirective>
                            <label for="input_img">Lien image</label>
                        </div>

                        <div class="d-flex  justify-content-center">
                            <input type="submit" value="Valider" class="btn p-btn btn-outline-success waves-effect">
                        </div>
                    </form>

                <div>            
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Card Flip -->

<?php endforeach; ?>

			</div>
		</div>
	</div>
</section>