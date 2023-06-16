<!DOCTYPE html>
<html>
<head>
    <title>Halaman Simp Romantis</title>
    <style>
        /* Gaya CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f3f3f3;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, p {
            text-align: center;
        }
        .love-message {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            color: #e91e63;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Simp Romantis</h1>
        <p>Selamat datang, <span id="username"><?php echo isset($_POST['username']) ? $_POST['username'] : 'Hati yang tersayang'; ?></span>!</p>

        <div class="love-message">
            <?php
                // Menampilkan pesan romantis berdasarkan waktu saat ini
                date_default_timezone_set('Asia/Jakarta');
                $hour = date('H');

                if ($hour >= 6 && $hour < 12) {
                    echo "Selamat pagi, sayang!";
                } elseif ($hour >= 12 && $hour < 18) {
                    echo "Selamat siang, cinta!";
                } elseif ($hour >= 18 && $hour < 24) {
                    echo "Selamat malam, sayang!";
                } else {
                    echo "Selamat tidur, cinta!";
                }
            ?>
        </div>

        <form method="POST">
            <label for="username">Masukkan nama pengguna:</label>
            <input type="text" name="username" id="username" required><br>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
