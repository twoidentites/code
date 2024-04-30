<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ticketstyle.css">
    <title>homepage</title>

    <meta name="viewport" content="width=device-width,initial-scale=1">
    
<body>
    <!------------navigation bar--------->
    <div class="navbar">
        <a href="home.php" target="_blank">
        <img src="pics_logreg/Orange_Retro_Badge_Giraffe_Logo-removebg-preview (2).png" class="logo">
        </a>
        <ul>
            <li><a href="home.php">Homepage</a></li>
            <li><a href="tickets.php">Tickets</a></li>
            <li><a href="hotel.php">Hotel</a></li>
            <li><a href="education.php">Education</a></li>
            <li><a href="animals.php">Animals</a></li>
        </ul>
    
    </div>
</div>
<div class="col">
    <!------------text--------->
    <h1>Entry prices</h1>
    <p>An adventure with a difference. When you visit London Zoo, you're doing great things<br> with your great day out. We are more than just a zoo - we are part of ZSL<br> (Zoological Society of London) a global conservation charity. Our teams of conservationists,<br> scientists, technicians and community specialists are active in over 70 countries - and every visit to London<br> Zoo helps fund their vital work to restore habitats and protect wildlife.
</div>
<div class="wrapper">
    <form action="">
        <!------------input fields--------->
        <h1>Tickets</h1>

        <div class="input-box">
            <div class="input-field">
                <input type="text"placeholder="Full Name"required>
                
            </div>
            <div class="input-field1">
                <input type="number" id="nticket"placeholder="Number of tickets"required>
                <!------------javascript--------->
                <script>
                    function calculateAmount(val){
                        var nticket = val * 21;
                        var divobj = document.getElementById('nticket'),
                        divobj.value=tot_price;
                    }
                </script>
        
            </div>
        </div>
        <!------------more input fields--------->

        <div class="input-box">
            <div class="input-field">
                <input type="email"placeholder="Email"required>
                
            </div>
            <div class="input-field">
                <input type="Number"placeholder="Phone Number"required>
                
            </div>
        </div>

        <div class="input-box">
            <div class="input-field">
                <input type="date"placeholder="Date of entry"required>
            </div>
            <div class="input-field">
                <input type="number"placeholder="Number of children under 12"required>
                
            </div>
        </div>
        <label><input type="checkbox">I understand that this is non refundable.</label>

        <button type="submit" onclick="location.href='Booking.php'" class="btn">Purchase tickets</button>
    </form>

</div>