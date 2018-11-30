<table class="table">

  <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Status</th>
        <th scope="col">Email</th>
        <th scope="col"></th>
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
        else if($user['level'] == 0)
        {
          $level = "Null";
        }?>
      
      <tr>
        <td><?= $user['name'];?></td>
        <td><?= $level?></td>
        <td><?= $user['email'];?></td>
        <td><button class="btn btn-default">Modifier <i class="fa fa-magic ml-1"></i></button></td>
      </tr>
    <?php endforeach ?>
  </tbody>

</table>
        


