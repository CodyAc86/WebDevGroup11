<?php
include '../db.php';
include 'header.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM bookings WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<link rel="stylesheet" href="../style.css">

<?php 
$displayForm = true;

if(isset($_POST['submit'])) {
    $displayForm = false;
        $query = mysqli_query($conn,"DELETE FROM bookings where id='$a'");
        if($query) {
            $msg = "<div class='alert alert-success'><p class='text-center'>Record modified succesfully</p><p class='text-center'><a href='index.php'>Go back</a></p></div>";
        }
        else { $msg = "Record Not modified"; }
    }
    $conn->close();
?>

<div class="container" style="width: 60%; padding-top: 70px;">
<?php echo isset($msg)?$msg:"";
if ($displayForm) { ?>
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
            <button class="btn btn-danger" type="submit" name="submit">Delete</button>
        </div>
        <div class="form-group pull-right" style="display: inline-block;">
            <button type="button" class="btn" data-dismiss="modal">Cancel</button>
        </div>
        </form>        <?php } ?>
</div>


<?php include 'footer.php'; ?>