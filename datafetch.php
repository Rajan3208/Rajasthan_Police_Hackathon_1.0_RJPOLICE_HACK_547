<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Datatable</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='#'>
    <script src='#'></script>
</head>
<body>
  <table border="2">
    <tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Police Station</th>
        <th>Feedback</th>
        <th>Any other feedback</th>
    </tr>

    <?php
    include("connect.php");
    $query ="select * from feedbackdata";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

    if($total != 0)
    {
        while($result = mysqli_fetch_assoc($data))
        {
            echo "
            <tr>
                <td>".$result['name']."</td>
                <td>".$result['phonenumber']."</td>
                <td>".$result['policestation']."</td>
                <td>".$result['feedback']."</td>
                <td>".$result['feedbackoption']."</td>
            </tr>";
        }
        echo "Data Updated Successfully";
    }
    else {
        echo "No data available";
    }
    ?>

  </table>  
</body>
</html>
