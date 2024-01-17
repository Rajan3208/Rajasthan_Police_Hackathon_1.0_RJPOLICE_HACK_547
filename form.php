<?php 
include("connect.php");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $policestation = $_POST['policestation'];
    $feedback = $_POST['feedback'];
    $feedbackoption = $_POST['feedbackoption'];

    $query = "INSERT INTO `feedbackdata` (`name`, `phonenumber`, `policestation`, `feedback`, `feedbackoption`) VALUES (?, ?, ?, ?,?)";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sisss", $name, $phonenumber, $policestation, $feedback,$feedbackoption);

    if ($stmt->execute()) {
        echo "Thanks! I guess your feedback give some impact";
    } else {
        echo "Fail";
    }

    $stmt->close();
    $conn->close();
}
?>

<html>
<head>
    <title>feedback</title>
    <style>
        input{
           color: black; 
        
        }
    
        .table{
    height:46px;
    width:446px;
    text-align: center;
    margin:2px;
    float:center;
    font-size:14px;
    
}
.container{
    min-width: 500px;
            height : auto;
            width : 100px;
            
        }
        .card{
            min-width: 500px;
            height: 400px;
            width: 200px;
            border: 2px solid grey;
            flex: left;
        
        }
        .card-header
        {
            height: 100px;
            width: 100%;
            text-align:center;
            line-height: 40px;
            color: #fff;
            font-weight: bold;
            font-size: 22px;
            background:rgb(227,214,245); 
            color: #20317F;
            text-align: center;
            display: flex;
            align-items: center;
                
} 
 
.card-header img{
    border-radius: 50%;
    margin-right: 50px;
    padding-left: 10px;
    position: relative;
    width:80px;
    height:80px;
    

} 
        </style>
</head>
<body>
    
       <center> 

    <form method="POST" action="form.php">
    <div class="container">
    <div class="card">
        
        <div class="card-header">
            <img src="rjlogo.jpeg">
              <p style="color: #DA251C;" >Rajasthan Pol</p>ice Feedback
        </div><br>
            <div class="table">
               <center> <strong> Enter the Correct Details</strong></center><br><br>
       <strong>Your Name :</strong> <input type="text" placeholder="enter your name" name="name" required><br><br>
        <strong>Phone Number :</strong> <input type="number" placeholder="enter phone number" name="phonenumber"   required><br><br>
        <strong>Police Station :</strong> 
        <select name="policestation">
<option>....Select Police Station ...</option>
<option value=" Adarsh Nagar Police station" >Adarsh Nagar Police station</option>
<option value="Jawahar Nagar Police Station">Jawahar Nagar Police Station</option>
<option value="Transport Nagar Police Station">Transport Nagar Police Station</option>  
<option value="Bassi Police Station">Bassi Police Station</option>
<option value="Kanota Police Station">Kanota Police Station</option>
<option value="Khoh-Nagoriyan Police Station">Khoh-Nagoriyan Police Station</option>
<option value="Gandhi Nagar Police Station">Gandhi Nagar Police Station</option>
<option value="Lal Kothi Police Station">Lal Kothi Police Station</option> 
<option value="Mahila Thana East Station">Mahila Thana East Station</option>
<option value="Moti Doongari Police Station">Moti Doongari Police Station</option>
<option value="Bajaj Nagar Police Station">Bajaj Nagar Police Station</option>
<option value="Jawahar Circle Police Station">Jawahar Circle Police Station</option>
<option value="Malviya Nagar Police Station">Malviya Nagar Police Station</option>
<option value="Pratap Nagar Police Station">Pratap Nagar Police Station</option>
<option value="Sanganer Police Station">Sanganer Police Station</option>      
<option value="Amer Police Station">Amer Police Station</option>
<option value="Jalupura Police Station">Jalupura Police Station</option>
<option value="Kotwali Jaipur Police station">Kotwali Jaipur Police station</option>
<option value="Nahargarh Police Station">Nahargarh Police Station</option>
<option value="Sanjay Circle Police Station">Sanjay Circle Police Station</option>
<option value="Mahila Thana North Police Station">Mahila Thana North Police Station</option>
<option value="Manak Chowk Police Station">Manak Chowk Police Station</option>
<option value="Subhash Chowk Police Station">Subhash Chowk Police Station</option>
<option value="Galtagate Police Station">Galtagate Police Station</option>
<option value="Ramganj Police Station">Ramganj Police Station</option>
<option value="Bhatta Basti Police Station">Bhatta Basti Police Station</option>
<option value="Shastri Nagar Police Station">Shastri Nagar Police Station</option>
<option value="Vidyadharnagar Police Station">Vidyadharnagar Police Station</option>
<option value="Ashok Nagar Police Station">Ashok Nagar Police Station</option>
<option value="Jyoti Nagar Police Station">Jyoti Nagar Police Station</option>
<option value="Vidhayak Puri Police Station">Vidhayak Puri Police Station</option>
<option value="Chaksu Police Station">Chaksu Police Station</option>
<option value="Sanganer Sadar Police Station">Sanganer Sadar Police Station</option>
<option value="Shivdaspura Police Station">Shivdaspura Police Station</option>  
<option value="Mahila Thana South Police Station">Mahila Thana South Police Station</option>


        </select>
        <br><br>
       <strong>Give Feedback :</strong>
       <select name="feedback">
        <option value="very good">Very Good</option>
        <option value="excellent">Excellent</option>
        <option value="bad">Bad</option>
        <option value="very bad">Very Bad</option>
        <option value="late arrive at point">Late arrive at point</option>
        <option value="police take money">Police take money </option>
        <option value="don't investigate properly">Don't investigate properly</option>
       </select>
       
       
       <br><br>
        <strong>Any Other Feedback :</strong> <input type="text" placeholder="(max.500 words) optional" name="feedbackoption" required><br><br>
        <input type="submit" value="Submit" name="submit">
        </div>
    </div>
    </div>
    </form>
       </center>  
</body>
</html>
