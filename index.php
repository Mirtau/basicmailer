<!DOCTYPE html>
<html>
  <head>
  <link rel='stylesheet' href='style.css' />
    <title>PHP contact form</title>
  </head>
  <body>
    <div class='page'>
      <h2 class='header'>Contact Us For More Information</h2>
      <form method="post" action='send.php'>
        <input type='text' name='name' placeholder="Your Name"> </br></br>
        <input type='tel' name='phone' placeholder="Phone"></br></br>
        <input type='email' name='email' placeholder="Your email"></br></br>
        <input  name='message' placeholder="Your Message"></br></br>
        <button type='submit'>Send Email</button>
      </form>
      </div>
  </body>
</html>
