<?php
//session_start();
include 'include/controller.php';
$session_username = $_SESSION['user_name'];
$session_role = $_SESSION['role'];
if(empty($_SESSION['user_name'])){
    header("location:login.php");
}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Putra Specialist Hospital</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <!-- Loader -->
        <link rel="stylesheet" href="css/loader.css">
        <script src="js/jquery-1.12.4.js"></script>
        <link rel="stylesheet" type="text/css" href="dashboard/vendor/font-awesome/css/font-awesome.min.css">
        <script>
            $(document).ready(function() {
                $('#example').DataTable({

                });
            });

        </script>
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/Menubar.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="css/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
            $(function() {
        var chosen=[]
var dates = $("#datepicker1").datepicker({
    minDate: "0",
    defaultDate: "+1w",
    dateFormat: 'dd/mm/yy',
    numberOfMonths: 1,
    beforeShowDay: function(date){
        var mmddyy=$.datepicker.formatDate(  'dd/mm/yy', date ),
            sameAs=$.inArray(mmddyy,chosen)
        console.log(mmddyy)
        if (sameAs>=0)
            return  [false, "nope","Same as "+(1+sameAs)]
        else
            return [true]
    },
    onSelect: function(date) {
        chosen=dates.map(function(){
            return this.value
        }).get()
        console.log(chosen)
        /*
        for(var i = 0; i < dates.length; ++i) {
            if(dates[i].id < this.id)
                $(dates[i]).datepicker('option', 'maxDate', date);
            else if(dates[i].id > this.id)
                $(dates[i]).datepicker('option', 'minDate', date);
        }
        */
    } 
    })});
        </script>

<style>
img {
    border: 3px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;

}

img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}</style>
    </head>
    <bodyy onload="myFunction()" style="margin:0;">
    <div class="Fazz">

<header>
   <h1>Putra Specialist Hospital</h1>

  <div class="dropdown" style="float: right;">
                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><span class='glyphicon glyphicon-user' aria-hidden='true'></span> <?php echo $session_username . " ($session_role)"; ?>
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#logout" data-toggle="modal"><span class='glyphicon glyphicon-log-out' aria-hidden='true'></span> Logout</a></li>
                    
                </ul>
                
            </div><br>
</header>

            
<nav>
  <ul>
    <li><a href="#" data-toggle="modal"><span class='glyphicon glyphicon-dashboard' aria-hidden='true'></span> Dashboard</a></li>
    <li><a href="http://localhost/administrator/Booking.php" data-toggle="modal"><span class='glyphicon glyphicon-calendar' aria-hidden='true'></span> Appointment</a></li>
    <li><a href="http://localhost/administrator/user_feedback.php" data-toggle="modal"><span class='glyphicon glyphicon-list-alt' aria-hidden='true'></span> User Feedback</a></li>
    <li><a href="http://localhost/administrator/user_details.php" data-toggle="modal"><span class='glyphicon glyphicon-th-list' aria-hidden='true'></span> User Details</a></li>
    <li><a href="http://localhost/web/chat/index.php" data-toggle="modal"><span class='glyphicon glyphicon-comment' aria-hidden='true'></span> Chat</a></li>
  </ul>
</nav>
<br><br>
          

<article>
<center><h2>Dashboard</h2></center><br><br><br><br><br><br>
<center>
<a href="Booking.php"><img src="img/christmas.png" style="width:150px; height:150px" title="Appointment" alt="Appointment">Appointment</a>
<a href="user_feedback.php"><img src="img/feedback.png" style="width:150px; height:150px" title="Feedback" alt="Feedback">User Feedback</a>
<a href="user_details.php"><img src="img/agenda.png" style="width:150px; height:150px" title="UserDetails" alt="UserDetails">User Details</a>
<a href="http://localhost/web/chat/index.php"><img src="img/chat.png" style="width:150px; height:150px" title="LiveChat" alt="LiveChat">Live Chat</a>

</center>
</article>
</div>
</body>

    </html>


<script type="text/javascript" src="js/wickedpicker.js"></script>
            <script type="text/javascript">
                $('.timepicker').wickedpicker({twentyFour: false});
            </script>
        <!-- Calendar -->
                <script src="js/jquery-ui.js"></script>
                  <script>
                          $(function() {
                            $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
                          });
                  </script>
            <!-- //Calendar -->