<?php include "header.php"; ?>
<?php 
include "db.php";
function build_calendar($month, $year) {
    $mysqli = new mysqli('localhost', 'BedCor', '1234Password', 'BedCor');       
    $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
    $numberDays = date('t',$firstDayOfMonth);     
    $dateComponents = getdate($firstDayOfMonth);
    $monthName = $dateComponents['month'];     
    $dayOfWeek = $dateComponents['wday'];    
    $datetoday = date('Y-m-d');   
    $calendar = "<div class='reserve'>";
    $calendar .= "<center><h1 id= 'rh'>$monthName $year</h1><br />";
    $calendar.= "<a class='btn btn-xs btn-outline-light' href='?month=".date('m', mktime(0, 0, 0, $month-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</a> ";
    $calendar.= "<a class='btn btn-xs btn-outline-light' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";
    $calendar.= "<a class='btn btn-xs btn-outline-light' href='?month=".date('m', mktime(0, 0, 0, $month+1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Next Month</a></center><br>";
    $calendar .= "<br /></div><div class='container' id='calendar'><tr>";
    $calendar.= "<table class='table table-bordered'>";
    foreach($daysOfWeek as $day) {
        $calendar .= "<th  class='header'>$day</th>";
    } 
     
    $currentDay = 1;
    $calendar .= "</tr><tr>";

    if ($dayOfWeek > 0) { 
        for($k=0;$k<$dayOfWeek;$k++){
            $calendar .= "<td  class='empty'></td>"; 
        }
    }
    
    $month = str_pad($month, 2, "0", STR_PAD_LEFT);
    while ($currentDay <= $numberDays) {       
        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }
          
        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";
         
        $dayname = strtolower(date('l', strtotime($date)));
        $eventNum = 0;
            $today = $date==date('Y-m-d')? "today" : "";
         if($date<date('Y-m-d'))
        {
            $calendar.="<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>N/A</button>";
        }
         else
         {
             $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='book.php?date=".$date."' class='btn btn-success btn-xs'>Book</a>";
         }
                    
          $calendar .="</td>";
           
          $currentDay++;
          $dayOfWeek++;

     }
     
     if ($dayOfWeek != 7) { 
     
          $remainingDays = 7 - $dayOfWeek;
            for($l=0;$l<$remainingDays;$l++){
                $calendar .= "<td class='empty'></td>"; 

         }

     }
     
     $calendar .= "</tr>";

     $calendar .= "</table></div>";

     echo $calendar;

}

$dateComponents = getdate();
if(isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month']; 			     
    $year = $_GET['year'];
}
else {
    $month = $dateComponents['mon']; 			     
    $year = $dateComponents['year'];
}
echo build_calendar($month,$year);

include "footer.php";?>