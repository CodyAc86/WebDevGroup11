<?php
include 'header.php';
include '../db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM bookings WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>

<form method="post" action="">
<link rel="stylesheet" href="../style.css">
<div><?php if(isset($message)) { echo $message; } ?></div>
<div class="container" style="width: 60%; padding-top: 70px;">
        <form action="" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input required type="text" name="name" class="form-control"
            value="<?php echo $row['name']; ?>">
        </div>
        <div class="form-group">
            <label for="">Timeslot</label>
            <input required type="text" readonly name="timeslot"
            id="timeslot" class="form-control" value="<?php echo $row['timeslot']; ?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input required type="email" name="email" class="form-control"
            value="<?php echo $row['email']; ?>">
        </div>
        <div class="form-group">
            <label for="">Date</label>
            <input required type="date" name="date" class="form-control"
            value="<?php echo $row['date']; ?>">
        </div>
        <div class="form-group">
            <label for="">Phone number</label>
            <input required type="tel" name="number" class="form-control"
            value="<?php echo $row['number']; ?>">
        </div>
        <div class="form-group pull-right" style="display: inline-block;">
            <button class="btn btn-primary" type="submit" name="submit">Edit</button>
        </div>
        <div class="form-group pull-right" style="display: inline-block;">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        </form>
</div>

<?php 
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $timeslot = $_POST['timeslot']; 
        $email = $_POST['email'];
        $date = $_POST['date'];
        $number = $_POST['number'];

        $query = mysqli_query($conn,"UPDATE bookings set
        name='$name', timeslot='$timeslot', email='$email', date='$date', number='$number'
        where id='$a'");
        if($query) { ?>
        <p class="text-center">Record modified succesfully</p>
        <p class="text-center"><a href="index.php">Go back</a></p>
        <?php }
        else { echo "Record Not modified"; }
    }
    $conn->close();
    include 'footer.php';
?>