<?php
include 'header2.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
      include 'config.php';

      $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="5px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
       
      <th>Sexe</th>
      <th>Statut</th>
          <th>Permis1</th>
          <th>Permis2</th>
      <th>Permis3</th>
      <th>username</th>
      <th>password</th>
          </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
			          <td><?php echo $row['ssexe']; ?></td>
				        <td><?php echo $row['sstatut']; ?></td>
		            <td><?php if ($row['typ_permis1']=="on") echo "Permis A" ; ?></td>
			          <td><?php if ($row['typ_permis2']=="on") echo "Permis B" ; ?></td>
                <td><?php if ($row['typ_permis3']=="on") echo "Permis C" ; ?></td>
                <td><?php echo $row['susername']; ?></td>
                <td><?php echo $row['spassword']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
</body>
</html>