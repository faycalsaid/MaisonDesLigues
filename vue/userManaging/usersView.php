<table class="table">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
<?php 
    foreach($users as $user):?>
    
    <tr>
      <th scope="row">1</th>
      <td><?= $user['name'];?></td>
      <td><?= $user['level'];?></td>
      <td><?= $user['email'];?></td>
    </tr>
    <?endforeach ?>
  </tbody>
</table>
        


