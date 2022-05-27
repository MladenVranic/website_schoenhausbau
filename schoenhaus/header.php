<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/homepage.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/neubau.css">
    <link rel="stylesheet" href="style/kontakt.css">
    <link rel="stylesheet" href="style/impressum.css">
    <link rel="stylesheet" href="style/facility.css">
    <link rel="stylesheet" href="style/brandschutz.css">
    <link rel="stylesheet" href="style/sanierung.css">
    <link rel="stylesheet" href="style/modernisierung.css">
    <link rel="stylesheet" href="style/datenschutz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Schoenhaus-Bau</title>
</head>
<body>
    <header>
            <nav id="head-menue">
                <div class="logo">
                    <img class="pic" src="assets/transparent-logo.png" alt="" height="80px" width="400px">
                </div>
                    <div class="logo-mobile">
                        <div class="nav-menue">
                            <img class="pic-tr" src="./assets/transparent-logo.png" alt="" height="60px" width="300px">
                                <div id="open-btn" class="burger" onClick="openLinks()">
                                    <div class="line1"></div>
                                    <div class="line2"></div>
                                    <div class="line3"></div>
                                </div>
                            </div>
                    <div id="mobile-nav" class="nav-links-mobile"> 
                        <ul>
                            <li><a href="index.php">Startseite</a></li>
                            <div class="dropdown-mobile" onClick="mobileDropDown()">
                                <li><a href="#" class="drop-mob" >Leistungen</a></li>
                            </div>
                                <div class="dropdown-content-mobile">
                                    <a href="brandschutz.php">Brandschutz</a>
                                    <a href="facility.php">Facility Management</a>
                                    <a href="neubau.php">Neubau</a>
                                </div>
                            
                            <li><a href="kontakt.php">Kontakt</a></li>
                            <li><a href="impressum.php">Impressum</a></li>
                    </ul>
                    <div class="nav-icons">
                        <div>
                            <a href="https://instagram.com/schoenhaus_bau?utm_medium=copy_link"> <img src="./assets/instagram.png" alt="" height="40px" width="40px"></a>
                        </div>
                        <div>
                            <img src="./assets/facebook.png" alt="" height="40px" width="40px">
                        </div>
                    </div>
                        <div class="close-btn" onclick="closeLinks()">
                            <a href="#" id="close-btn">^</a>
                        </div>
            </div>
                </div>
                    <div class="nav-links">
                        <li><a href="index.php">Startseite</a></li>
                        <div class="dropdown">
                            <li><a href="#">Leistungen</a></li>
                       
                            <div class="dropdown-content">
                                <a href="sanierung.php">Sanierung & Renovierung</a>
                                <a href="modernisierung.php">Modernisierung</a>
                                <a href="neubau.php">Neubau</a>
                                <a href="brandschutz.php">Brandschutz TÜV</a>
                                <a href="facility.php">Facility Management & Gebäude Reinigung</a>
                                
                            </div>
                        </div>
                        <li><a href="kontakt.php">Kontakt</a></li>
                        <li><a href="impressum.php">Impressum</a></li>
                </div>     
        </nav>
    </header>
