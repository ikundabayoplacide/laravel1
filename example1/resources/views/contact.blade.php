<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CONTACTS</title>
  <link rel="stylesheet" href="{{asset('css/contact.css')}}">
</head>
<body>
  <h2>Contact Us</h2><br> 
  <form action="submit.php" method="POST" class="form1">
    <div class="formcontainer">
            <div class="name">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
          </div>
          <div class="name">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
           </div>
          <div class="name">
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="3" cols="50" required></textarea><br><br>
          </div>
          <div class="name">
           <input type="submit" value="Submit">
          </div>
          </div>
  </form>

  <div class="form1">
    <img src="{{asset('image/splash.avif')}}" alt="Image Description">
</div>


</body>
</html>

