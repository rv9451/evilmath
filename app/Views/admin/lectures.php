<h3 class="text-center pt-4">ALL LECTURE'S</h3>
<table class="table  table-secondary">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">LINK</th>
      <th scope="col">TITLE</th>
      <th scope="col">TEACHER</th>
      <th scope="col">TIME</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($video as $data){
        ?> <tr>
        <th scope="row"><?php echo $data['id'];?></th>
        <td><?php echo $data['link'];?></td>
        <td><?php echo $data['title'];?></td>
        <td><?php echo $data['teacher'];?></td>
        <td><?php echo $data['timer'];?></td>
      </tr>
      <?php
    }
    
   
    ?>
  </tbody>
</table>