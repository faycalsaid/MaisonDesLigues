<table class="table">

  <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Status</th>
        <th scope="col">Email</th>
      </tr>
  </thead>
    
  <tbody>
    <?php 
      foreach($users as $user):?>
      
      <tr>
        <td><?= $user['name'];?></td>
        <td><?= $user['level'];?></td>
        <td><?= $user['email'];?></td>
      </tr>
    <?php endforeach ?>
  </tbody>

</table>
        


