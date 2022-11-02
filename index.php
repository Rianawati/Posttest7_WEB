 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="header-logo">Bintang Jaya Elektronik </div>
        <div class="navbar">
            <ul>
                <li>Home</li>
                <li><a href="about.php">About Me</a></li>
                <li>Contact Us</li>
                <li> <a href = "form_pembelian.php">Pembelian</a></li>
                <li> <a href="logout.php">Logout</a></li>
            </ul>
            <input type="checkbox" onclick="ubahMode()">
        </div>
    </div>
    <div class="main">
        <div class="copy-container">
            <h1>Your Lifetime Partner !!</h1>
    
            <input class="search-area" type="text" name="text" placeholder="Mencari" autocomplete="off">
            <input class="search-btn" type="submit" name="submit" value="search">
        </div>
        <div class="contents">
            <h3 class="section-tittle">Hot Item</h3>
            <div class="contents-item">
                <img src="Laptop.jpg" alt="Image" height="250" width="200">
                <p>Gaming Laptop</p>
                <p>Rp. 20.499.000</p>
            </div>
            <div class="contents-item">
                <img src="Magicom.jpg" alt="Image" height="250" width="200">
                <p>Air Fryer</p>
                <p>Rp. 959.000</p>
            </div>
            <div class="contents-item">
                <img src="Smartphone.jpg" alt="Image" height="250" width="200">
                <p>Samsung Smartphone</p>
                <p>Rp. 3.999.000</p>
            </div>
            <div class="contents-item">
                <img src="Televisi.jpg" alt="Image" height="250" width="200">
                <p>Panasonic TV</p>
                <p>Rp. 48.900.000</p>
            </div>
            <div class="contents-item">
                <img src="GoPro.jpg" alt="Image" height="250" width="200">
                <p>Go Pro Sport</p>
                <p>Rp. 8.499.000</p>
            </div>
            <div class="contents-item">
                <img src="Proyektor.jpg" alt="Image" height="250" width="200">
                <p>Proyektor LCD Epson</p>
                <p>Rp. 5.449.000</p>
            </div>
        </div>

        
    <div class="footer">
       <div class= "footer-logo" >@CopyRight 2022 Rianawati</div>
    </div>

    <script>
        function ubahMode() {
            const ubah = document.body;
            ubah.classList.toggle("dark");
        }
    </script>

</body>
</html>