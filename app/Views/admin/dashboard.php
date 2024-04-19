<h3 class="text-center pt-4">STUDENTS DATA</h3>
<table class="table  table-secondary">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($student as $data){
        ?> <tr>
        <th scope="row"><?php echo $data['id'];?></th>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['email'];?></td>
        <td><?php echo $data['subject'];?></td>
        <td><?php echo $data['message'];?></td>
      </tr>
      <?php
    }
    
   
    ?>
  </tbody>
</table>