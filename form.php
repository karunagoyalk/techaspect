<html>
<head>
	<title>Postpaid Plan</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <h2>Postpaid Plan</h2>

    <form action="database.php" method="post"> Plan Name:

        <input type="text" name="Planname"> <br> Monthly Rental:

        <input type="text" name="monthlyrental"> <br>Free Internet:

        <input type="text" name="Freeinternet"><br>Free Calls:
         <input type="text" name="Freecalls"><br>Free SMS:
          <input type="text" name="FreeSMS"><br>Call Charges:
           <input type="text" name="CallCharges"><br>SMS Charges:
            <input type="text" name="SMSCharges"><br>Data Charges:
             <input type="text" name="DataCharges"><br>Roaming Charges:
 <input type="text" name="RoamingCharges">

       

        <input type="submit" value="Submit">

    </form>
    <?php
    echo $Planname;
      echo $monthlyrental;  
        echo $Freeinternet;
          echo $Freecalls;
            echo $FreeSMS;
              echo $CallCharges;
                echo $SMSCharges;
                  echo $DataCharges;
                    echo $RoamingCharges;
    ?>
</body>
</html>