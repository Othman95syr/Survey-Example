<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Database Panel</title>



	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">        
  	<link rel="stylesheet" href="css/bootstrap.min.css">                                          
  	<link rel="stylesheet" href="css/fontawesome-all.min.css">                                      
  	<link rel="stylesheet" href="css/tooplate-style.css"> 

  	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  	<script>
    	var renderPage = true;

    	if (navigator.userAgent.indexOf('MSIE') !== -1
    	  || navigator.appVersion.indexOf('Trident/') > 0) {
   	   	/* Microsoft Internet Explorer detected in. */
    	alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
      	renderPage = false;
    	}
 	</script>     
</head>
<body>
	<div>
		<table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Soru 1</th>
                    <th>Soru 2</th>
                    <th>Soru 3</th>
                    <th>Soru 4</th>
                    <th>Soru 5</th>
                    <th>Soru 6</th>
                    <th>Soru 7</th>
                    <th>Soru 8</th>
                    <th>Soru 9</th>
                    <th>Soru 10</th>
                    <th>Soru 11</th>
                    <th>Soru 12</th>
                    <th>Soru 13</th>
                    <th>Soru 14</th>
                    <th>Soru 15</th>
                    <th>Soru 16</th>
                    <th>Soru 17</th>
                    <th>Soru 18</th>
                </tr>
            </thead>
            <tbody>
            	<?php
            	//database'ten veri cekme
            	require_once "baglan.php";

            	include('kayitlar.php');
            	while ($sonuc = mysqli_fetch_array($results)) {
            	?>
            	<tr class="success">
            		<td><?php echo $sonuc['katilimci_id']; ?></td>
            		<td><?php echo $sonuc['q1']; ?></td>
            		<td><?php echo $sonuc['q2']; ?></td>
            		<td><?php echo $sonuc['q3']; ?></td>
            		<td><?php echo $sonuc['q4']; ?></td>
            		<td><?php echo $sonuc['q5']; ?></td>
            		<td><?php echo $sonuc['q6']; ?></td>
            		<td><?php echo $sonuc['q7']; ?></td>
            		<td><?php echo $sonuc['q8']; ?></td>
            		<td><?php echo $sonuc['q9']; ?></td>
            		<td><?php echo $sonuc['q10']; ?></td>
            		<td><?php echo $sonuc['q11']; ?></td>
            		<td><?php echo $sonuc['q12']; ?></td>
            		<td><?php echo $sonuc['q13']; ?></td>
            		<td><?php echo $sonuc['q14']; ?></td>
            		<td><?php echo $sonuc['q15']; ?></td>
					<td><?php echo $sonuc['q16']; ?></td>
					<td><?php echo $sonuc['q17']; ?></td>
					<td><?php echo $sonuc['q18']; ?></td>
            	</tr>
            	<?php } ?>
            </tbody>
        </table>
	</div> 
</body>
</html>

