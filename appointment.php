<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make An Appointment</title>
    <link rel="stylesheet" href="appointment.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body>

<div class="navbar" style="background-color: black;font-size: 25px;">
        <br>
           
            <div class="n"  style=" margin-left: 13cm; font-family:Sofia,sans-serif; ">
               <a style="text-decoration: none;color: whitesmoke;" href="homepage.php">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;
              <a style="text-decoration: none;color: whitesmoke;" href="about.php">About</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="text-decoration: none;color: whitesmoke;" href="feature.php">Features</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="text-decoration: none;color: whitesmoke;" href="Login.php">Services</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="text-decoration: none;color: whitesmoke;" href="contact.php">Contact</a> 
                </div>
                <br>
        </div>

        <br>
<h1 class="contact">MAKE AN APPOINTMENT</h1>
    <section class="body">
      <div class="wrapper">
        <div class="title">
             MAKE AN APPOINTMENT
        </div>
        <div class="form">
           <div class="inputfield">
              <label>First Name</label>
              <input type="text" class="input">
           </div>  
            <div class="inputfield">
              <label>Last Name</label>
              <input type="text" class="input">
           </div>  
           <div class="inputfield">
              <label>Password</label>
              <input type="password" class="input">
           </div>  
          <div class="inputfield">
              <label>Confirm Password</label>
              <input type="password" class="input">
           </div> 
            <div class="inputfield">
              <label>Slot Booking</label>
              <div class="custom_select">
                <select>
                  <option value="">Select</option>
                  <option value="9am-11am">9am-11am</option>
                  <option value="2pm-4pm">2pm-4pm</option>
                  <option value="4pm-6pm">4pm-6pm</option>
                  <option value="6pm-8pm">6pm-8pm</option>
                  <option value="9pm-11pm">9pm-11pm</option>
                </select>
              </div>
            </div> 
            <div class="inputfield">
              <label>Email Address</label>
              <input type="text" class="input">
           </div> 
          <div class="inputfield">
              <label>Phone Number</label>
              <input type="text" class="input">
           </div> 
          <div class="inputfield">
              <label>Message</label>
              <textarea class="textarea"></textarea>
           </div> 
        
          <div class="inputfield terms">
              <label class="check">
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <p>Agreed to terms and conditions</p>
           </div> 
          <div class="inputfield">
            <input type="submit" onclick="myFunction()" value="MAKE APPOINTMENT" class="btn">
          </div>
        </div>
    </div>	
    </section>
    <p id="demo"></p>
    <script>
      function myFunction() {
        alert ("YOU HAVE SUCCESSFULLY MADE YOUR APPOINTMENT");
      
      }

      </script>
</body>
</html>

