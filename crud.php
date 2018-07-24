<?php
    // Fred Yang, EV Technologies, 2018-07-10
    include "base.php";
    $userId = 0;

    /*if(!empty($_SESSION['UserId'])) {
        $createdBy = $_SESSION['UserId'];
    }*/

    // get user balance
    if (!empty ($_POST['getTokens']) && $_POST['getTokens'] == 1) {
        $userId  = mysqli_real_escape_string($con, $_POST['userId']);

        $getBal = mysqli_query($con, "call spGetBalance('".$userId."')"); 
        if($getBal->num_rows > 0) {
            $row = mysqli_fetch_array($getBal);
            $bal = $row['tokens'];
            echo $bal;
        }
    }

     // update user balance
    if (!empty ($_POST['putTokens']) && $_POST['putTokens'] == 1) {
        $userId = mysqli_real_escape_string($con, $_POST['userId']);
        $txHash = mysqli_real_escape_string($con, $_POST['txHash']);
        $tokens = mysqli_real_escape_string($con, $_POST['tokens']);

        mysqli_query($con, "call spPutBalance('".$userId."', '".$txHash."', '".$tokens."')");
    }
?>
