<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Custom styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>

<?php
// Konfigurasi database
$server = "localhost"; // Perbaiki penulisan nama host menjadi "localhost"
$username = "root";
$password = "";
$database = "register"; // Nama database

// Koneksi ke database
$koneksi = mysqli_connect($server, $username, $password, $database);

// Mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil semua data dari tabel register
$query = "SELECT * FROM register";

// Eksekusi query
$result = mysqli_query($koneksi, $query);

// Mengecek apakah query berhasil dieksekusi
if ($result) {
    // Mengecek jumlah baris hasil query
    if (mysqli_num_rows($result) > 0) {
        // Output data dari setiap baris
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Username: " . $row["username"] . " - Email: " . $row["email"] . " - Password: " . $row["password"] . "<br>";
        }
    } else {
        echo "Tidak ada data yang ditemukan.";
    }
} else {
    echo "Error: " . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>

<?php

// Query untuk mengambil semua data dari tabel register
$query = "SELECT * FROM register";

// Eksekusi query
$result = mysqli_query($koneksi, $query);

// Mengecek apakah query berhasil dieksekusi
if ($result) {
    // Mengecek jumlah baris hasil query
    if (mysqli_num_rows($result) > 0) {
        // Mulai tabel HTML
        echo "<table border='1'>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>";

        // Output data dari setiap baris
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row["username"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["password"] . "</td>
                  </tr>";
        }

        // Selesai tabel HTML
        echo "</table>";
    } else {
        echo "Tidak ada data yang ditemukan.";
    }
} else {
    echo "Error: " . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>

