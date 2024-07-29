<!DOCTYPE html>
<html lang="en">
<head>
    <title>Identitas saya</title>
    <style>
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 200px;
        }

    </style>
</head>
<body>
    
<div class="form-container">
    <form action="proses-kontak.php" method="post">
        <label for="nama"> Your name : </label>
        <input type="text" id="nama" name="nama" required>

        <label for="email"> Your email : </label>
        <input type="text" id="email" name="email" required>

        <label for="fakta"> fakta menarik : </label>
        <input type="text" id="fakta" rows="4" name="fakta" required>
    

    <button type="submit"> kumpulkan </button>
    </form>
</div>

</body>
</html>