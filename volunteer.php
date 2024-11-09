<?php include 'dbconnect.php' ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['number']); // Change to match the form field name
    $address = htmlspecialchars($_POST['address']);
    $coaching = htmlspecialchars($_POST['coaching']);
    $country = htmlspecialchars($_POST['country']);
    $students = intval($_POST['students']);
    $about = htmlspecialchars($_POST['about']);

    // Check if 'tickets' table exists
    $sql = "SHOW TABLES LIKE 'volunteer'";
    $result2 = mysqli_query($conn, $sql);
    $tableExist = (mysqli_num_rows($result2) > 0);

    if (!$tableExist) {
        // Create 'tickets' table if it doesn't exist
        $sql = "CREATE TABLE `volunteer` (
            `sno` INT(7) NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(255) NOT NULL,
            `email` VARCHAR(255) NOT NULL,
            `phno` VARCHAR(15) NOT NULL,
            `address` VARCHAR(255) NOT NULL,
            `coaching` VARCHAR(255) NOT NULL,
            `country` VARCHAR(255) NOT NULL,
            `students` INT(7) NOT NULL,
            `about` VARCHAR(255) NOT NULL,
            PRIMARY KEY (`sno`)
        )";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "Error creating table: " . mysqli_error($conn);
            exit();
        }
    }

    // Insert user data into 'tickets' table
    $sql = "INSERT INTO `volunteer` (`name`, `email`, `phno`, `address`, `coaching`, `country`, `students`, `about`)
            VALUES ('$name', '$email', '$phone', '$address', '$coaching', '$country', '$students', '$about')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<header class="navbar">
      <div class="top">
        <div class="left">We are here to create an impact
        </div>
        <div class="right">
          <div class="login">Log In</div>
          <div class="login">Sign Up</div>
        </div>
      </div>
      <div class="nav-bottom">
        <a href="index.php"
          ><img src="images/logo.jpg" alt="" width="55%"
        /></a>
        <div class="right-bottom">
          <ul>
            <li class="nav-items">
              <a href="index.php">Home</a>
            </li>
            <li class="nav-items">
              <a href="about.php">About</a>
            </li>
            <li class="nav-items">
              <a href="test.php">Testimonial</a>
            </li>
            <li class="nav-items">
              <a href="blog.php">Blogs</a>
            </li>
            <li class="nav-items">
              <a href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bg1.jpg" class="d-block w-55 h-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/bg2.jpg" class="d-block w-55 h-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/bg3.jpg" class="d-block w-55 h-50" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <h1>Volunteer Us</h1>
    <div class="volunteer">
        <div class="buttons">
            <div id="community">Community</div>
            <div id="individual">Individual</div>
        </div>
        <div class="user1">
        <div class="book1">
        <form action="contact.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputbox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
            
                <div class="inputbox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
            
                <div class="inputbox">
                    <span>phone :</span>
                    <input type="text" placeholder="enter your number" name="number">
                </div>
            
                <div class="inputbox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
            
                <div class="inputbox">
                    <span>coaching name :</span>
                    <input type="text" placeholder="enter the coaching name" name="coaching">
                </div>
            
                <div class="inputbox">
                    <span>country :</span>
                    <input type="text" placeholder="country name" name="country">
                </div>
            
                <div class="inputbox">
                    <span>number of students :</span>
                    <input type="number" placeholder="number of students" name="students">
                </div>
                <div class="inputbox">
                    <span>why do you want this? :</span>
                    <input type="text" placeholder="write here" name="about">
                </div>
                
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
        </div>
        </div>
    </div>
</body>
<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>