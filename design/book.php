<?php include "header.php";
$mysqli = new mysqli('localhost', 'BedCor', '1234Password', 'BedCor');
if(isset($_GET['date'])){
    $date = $_GET['date'];
    $stmt = $mysqli->prepare("select * from bookings where date = ?");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
            
            $stmt->close();
        }
    }
}


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $timeslot = $_POST['timeslot'];
    $stmt = $mysqli->prepare("select * from bookings where date = ? AND timeslot = ?");
    $stmt->bind_param('ss', $date, $timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $msg = "<div class='alert alert-danger'>Already Booked</div>";
        }
        else
        {
            $stmt = $mysqli->prepare("INSERT INTO bookings (name, timeslot, email, date, number) VALUES (?,?,?,?,?)");
            $stmt->bind_param('sssss', $name, $timeslot, $email, $date, $number);
            $stmt->execute();
            $msg = "<div class='alert alert-success'>Booking Successfull</div>";
            $bookings[]=$timeslot;
            $stmt->close();
            $mysqli->close();
        }
    }
    
}

$duration = 60;
$cleanup = 0;
$start = "12:00";
$end = "24:00";

function timeslots($duration, $cleanup, $start, $end)
{
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();

    for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval))
    {
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if($endPeriod>$end)
        {
           break;
        }
        $slots[] = $intStart->format("H:iA")."-". $endPeriod->format("H:iA");
    }

    return $slots;
}

?>
    <div class='bookheader'>
        <h1 class='spect'>Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1>
    </div>

    <div class="container" style="padding-top: 50px; width: 80%;">
        <div class="row">
            <div class="col-md-12">
                <?php echo isset($msg)?$msg:""; ?>
            </div>
                <?php $timeslots = timeslots($duration, $cleanup, $start, $end);
                foreach($timeslots as $ts)
                 {               
                ?>
                <div class="col-md-2">
                    <div class="form-group">
                        <?php if(in_array($ts, $bookings)) { ?>
                            <button class="btn btn-danger"><?php echo $ts; ?></button>
                        <?php } else { ?>
                            <button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
                        <?php } ?>
                    </div>                 
                </div>
                 <?php } ?>               
        </div>
    </div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Timeslot</label>
                                <input required type="text" readonly name="timeslot" id="timeslot" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input required type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input required type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Phone number</label>
                                <input required type="tel" name="number" class="form-control">
                            </div>
                            <div class="form-group pull-right">
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            </div>
                            <div class="form-group pull-right">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>
                 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $(".book").click(function(){
        var timeslot = $(this).attr('data-timeslot');
        $("#slot").html(timeslot);
        $("#timeslot").val(timeslot);
        $("#myModal").modal("show");
    })
</script>
<?php include "footer.php";?>