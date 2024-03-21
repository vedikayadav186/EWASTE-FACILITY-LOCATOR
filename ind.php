<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title> USER DASHBOARD</title>
    <link rel="stylesheet" href="st.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <nav>
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <div class="logo">DigidetOX</div>
      <input type="checkbox" id="click">
        <ul>
          <li><a href="#home" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#explore">Explore</a></li>
          <li><a href="#latest">Latest</a></li>
          <li><a href="#feedback">Feedback</a></li>
        </ul>
        <span class="main">
          <a href="registration.php" class="user"><i class="fas fa-user"></i> Sign Up/Log In</a> 
         </span>
    </nav>
    <section id = "home"> 
      <div class="content">
      <video autoplay loop src="Add a heading (2).mp4"></video>
      <p>E-waste contains harmful toxins that pollute air and water when improperly disposed of.
        Responsible recycling reduces these toxins, creating a cleaner environment for everyone.</p>
    </div>
  </section>
    <section id = "about">About</section>
    <section id = "explore">explore</section>
    <section id = "latest">Latest</section>
    <section id = "feedback">Feedback</section>
    <script src="js.js"></script>
  </body>
</html>