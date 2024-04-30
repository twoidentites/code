<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel booking
    </title>
    <link rel="stylesheet" href="hotelstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" >
</head>
<body>
    <!------------navigation bar--------->
    <div class="container">
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
        <!------------Text--------->
        <h1>Our hotel</h1>
        <p>You're eligible for a Genius discount at Haris 303 Apartment! To save at this property, all you have to do is sign in.<br>

            Set in Athens, 600 metres from Monastiraki Square and 600 metres from Monastiraki Railway Station,</br>Haris 303 Apartment provides accommodation with amenities such as </br>free WiFi and a flat-screen TV. It is situated 700 metres from Monastiraki Metro Station and offers a lift.</br> The property is 600 metres from Omonia Square, and within less than 1 km of the city centre.</br>
            
            The air-conditioned apartment is composed of 2 separate bedrooms, </br>a living room, a fully equipped kitchen with an oven and fridge, and 2 bathrooms.</p>
    </div>
    <div class="wrapper">
        <form action="">
            <!------------input fields--------->
            <h1>Booking</h1>

            <div class="input-box">
                <div class="input-field">
                    <input type="text"placeholder="Full Name"required>
                    
                </div>
                <div class="input-field">
                    <input type="number"placeholder="Number of guests"required>
            
                </div>
            </div>

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
                    <input type="date"placeholder="Check in date"required>
                </div>
                <div class="input-field">
                    <input type="date"placeholder="Check out date"required>
                    
                </div>
            </div>
            <label><input type="checkbox">I understand that this is non refundable.</label>

            <button type="submit" onclick="location.href='Booking.php'" class="btn">Book</button>
        </form>

    </div>