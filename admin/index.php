<?php include 'header.php';
include '../db.php'; 
$sql = "select * from bookings";
$result = $conn->query($sql);
?>
<link rel="stylesheet" href="../style.css">
<p id="fm" style="margin-top: 90px;">Bookings</p>
<div class="container">
<table class="table">
  <thead>
    <col width="5%"><col width="20%"><col width="20%"><col width="25%">
    <col width="10%"><col width="20%"><col width="10%"><col width="10%">
    <tr>
      <th>id</th><th>Name</th><th>Timeslot</th><th>Email</th>
      <th>Date</th><th>Number</th><th>Update</th><th>Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php 
      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
          ?>
          <tr>
          <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["timeslot"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["date"]; ?></td>
            <td><?php echo $row["number"]; ?></td>
            <td>
            <a href="updatesingle.php?id=<?php echo $row['id']; ?>">Update</a></td></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
          </tr>
        <?php }} ?>
  </tbody>
</table>
</div>

<p id="fm" style="margin-top: 90px;">Feedback</p>
<?php
$sql = "select * from contact";
$result = $conn->query($sql); ?>

<div class="container">
<table class="table">
  <thead>
    <col width="5%"><col width="20%"><col width="20%"><col width="40%"><col width="15%">
    <tr>
      <th>id</th><th>Name</th><th>Number</th><th>Comment</th><th>Date</th>
    </tr>
  </thead>
  <tbody>
  <?php 
      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
          ?>
          <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["number"]; ?></td>
            <td><?php echo $row["comment"]; ?></td>
            <td><?php echo $row["date"]; ?></td>
          </tr>
        <?php }} ?>
  </tbody>
</table>
</div>


<?php include 'footer.php';?>








