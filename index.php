<!DOCTYPE html>
<HTML>
    <head>
        <META CHARSET="UTF-8">
            <TITLE>Contact Form</TITLE>
        <LINK rel="stylesheet" href="contactform.css"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
      <a class="nav-link" href="#">Login</a>
      <a class="nav-link" href="#">Registration</a>
      <a class="nav-link disabled">Products</a>
      <a class="nav-link disabled">Contact Us</a>
    </div>
  </div>
</div>
</nav>
    <body>
    <style>
      .numbers span {
        display: inline-block;
        margin: 0.5em;
        text-align: center;
        background: yellow;
      }
    </style>
        <main>
           <p>CONTACT US</p> 
           <div class="container-fluid">
               <form class="contact-form" action="contactform.php" method="post">
               <input type="text" name="name" placeholder="Full name"> 
               <input type="text" name="mail" placeholder="Email Address"> 
               <input type="text" name="Subject" placeholder="Subject"> 
               <textarea name="message" placeholder="Message"></textarea>
               <button type="submit" name="submit"> SEND EMAIL</button>
               </form>
           </div>
        </main>
    </body>
</HTML>