<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Tempat</title>
    <link rel="stylesheet" href="style/home.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--Background-->
    <div class="background-section">
        <!--Navbar-->
        <?php include("navbar.php")
        ?>

        <!--Hero-->
        <div class="hero-section">
            <div class="hero-container">
                <hgroup>
                    <h1 class="hero-title">
                        Bagikan Pengalaman Berharga ke dalam Sebuah Review <br />
                        Reviewly
                    </h1>
                    <p class="hero-description">
                        Temukan tempat terbaik di sekitar Anda dengan review dari pengguna lainnya </p>
                </hgroup>
            </div>
        </div>
    </div>
    <!--Main Content-->
    <main class="main-section">
        <div class="main-content">
            <h1 class="content-title">Temukan Tempat Terbaik di Sekitar Anda</h1>
            <div class="content-grid">
                <div class="content-box">
                    <img src="assets/content1.jpeg" alt="Content 1"/>
                    <div class="title-box">
                        <h2>New Star Kopitiam, Balikpapan </h2>
                        <P> Berada di Penta Mall Balikpapan,Makanannya Enakk,tapi lumayan mahal</P>
                    </div>
                    <div class="main-border">
                        <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>  
                        <div class="rating-box">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span> 
                            <p class="rating-text">4 dari 5</p>
                        </div>  
                    </div>
                </div>
                <div class="content-box">
                    <img src="assets/content2.jpeg" alt="Content 2"/>
                    <div class="title-box">
                        <h2>OngKopi Tea, Samarinda </h2>
                        <P> Banyak pilihan menu makanan,Tempatnya bagus seperti vibe warung chinese</P>
                    </div>
                    <div class="main-border">    
                        <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                        <div class="rating-box">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span> 
                            <p class="rating-text">5 dari 5</p>
                        </div>  
                    </div>
                </div>
                <div class="content-box">
                    <img src="assets/content3.jpeg" alt="Content 3"/>
                    <div class="title-box">
                        <h2>Mie Ayam Pangsit Semar, Samarinda </h2>
                        <P> Mie ayam nya rasanya biasa saja,banyak variannya,harga murah</P>
                    </div>
                    <div class="main-border">    
                        <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                        <div class="rating-box">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span> 
                            <p class="rating-text">4.0 dari 5</p>
                        </div>  
                    </div>
                </div>
                <div class="content-box">
                    <img src="assets/content4.jpeg" alt="Content 4"/>
                    <div class="title-box">
                        <h2>Bubur Timur Subur, Samarinda </h2>
                        <P> Beraneka makanan seperti bubur,nasi kuning,cocok untuk sarapan</P>
                    </div>
                    <div class="main-border">    
                        <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                        <div class="rating-box">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span> 
                            <p class="rating-text">5 dari 5</p>
                        </div>  
                    </div>
                </div>
                <div class="content-box">
                    <img src="assets/content5.jpeg" alt="Content 5"/>
                    <div class="title-box">
                        <h2>Tugu Jogja, Yogyakarta </h2>
                        <P> Salah satu destinasi wajib ketika di jogja,tempatnya ada di tengah kota</P>
                    </div>
                    <div class="main-border">    
                        <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                        <div class="rating-box">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span> 
                            <p class="rating-text">4 dari 5</p>
                        </div>  
                    </div>
                </div>
                <div class="content-box">
                    <img src="assets/content6.jpeg" alt="Content 6"/>
                    <div class="title-box">
                        <h2>Soto Pak Marto, Yogyakarta </h2>
                        <P> Soto legend banget di jogja,kuah bening seger cocok buat sarapan,mantull</P>
                    </div>
                    <div class="main-border">    
                        <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                        <div class="rating-box">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span> 
                            <p class="rating-text">5 dari 5</p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--Footer-->
    <?php require("footer.php")
    ?>
    <script src="scripts/script.js"></script>    
</body>
</html>