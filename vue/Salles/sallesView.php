
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Type</th>
      <th scope="col">Nom de la salle</th>
      <th scope="col">Description</th>
      <th scope="col">Capacité</th>
      <th scope="col">Adresse du responsable</th>
      

    </tr>
  </thead>
  <tbody>
  <?php
  foreach ( $Salles as $donnee ): 
	
        if ($donnee['area_id'] == 1) {
            $type = "Informatique - multimédia";
        }

        else if ($donnee['area_id'] == 2) {
            $type = "Salles de réunion";
        }

        else if ($donnee['area_id'] == 3) {
            $type = "Salles de réunion";
        } 
    
        ?>
   
		<tr>
			<td>
            <?php echo $type ; ?>
            </td>
			<td>
            <?php echo $donnee ['room_name']; ?>
            </td>
			<td>
            <?php echo $donnee ['description'];?>
            </td>
            <td>
            <?php echo $donnee ['capacity'];?>
            </td>
            <td>
            <?php= echo $donnee ['room_admin_email'];?>
            </td>
		</tr>
        <?php endforeach ?>
        
    


    


   
  </tbody>
</table>