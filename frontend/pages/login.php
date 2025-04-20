<?php
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        // Hardcoded username and password untuk admin
        $valid_username = "alfi";
        $valid_password = "alfi4567";    
    
        // Verify username and password
        if ($username == $valid_username && $password == $valid_password) {
            $_SESSION["username"] = $username;  
            header("location: chapter_1.php");
            exit;
        } else {
            //Jika menggunakan database (fitur menyusul)
            include "db.php";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST["username"];
                $password = $_POST["password"];
            
                $stmt = $db->prepare("SELECT id, password FROM users WHERE username = :username");
                $stmt->bindParam(":username", $username);
                $stmt->execute();

                $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
                if ($user && password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $username;
                    header("Location: welcome.php");
                    exit;
                } else {
                    echo "Username atau password salah!";
                }
            }
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <a href="#" class="back-arrow">←</a>
        <h2>Login</h2>
        <form method="post" action="" class="login">
            <label for="Username">Username</label>
            <input type="text" name="username" placeholder="">

            <label for="Password">Password</label>
            <input type="password" name="password" placeholder="">
        
            <button type="submit" class="login_button">login</button>
        </form>

        <div class="quote">
            <p>“When I have a<br>camera in my<br>hand, I know<br>no fear”</p>
            <span>-Alfred Eisenstaedt</span>
        </div>
    </div>
</body>
</html>