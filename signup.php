<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "Account aangemaakt. <a href='login.php'>Log in</a>";
    } else {
        echo "Gebruiker bestaat mogelijk al.";
    }

    $stmt->close();
    $conn->close();
}
?>

<form method="POST">
    <h2>Sign Up</h2>
    Gebruikersnaam: <input type="text" name="username" required><br>
    Wachtwoord: <input type="password" name="password" required><br>
    <button type="submit">Registreer</button>
</form>
