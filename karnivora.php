<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="static/css/karnivora.css">
    <link rel="stylesheet" href="static/css/popup.css">
    <link rel="stylesheet" href="static/css/rubah.css">
    <link rel="stylesheet" href="static/css/ular.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    device-width, initial-scale=1.0">
    <title>ANIMAZONE</title>
    
</head>

<body>
<div class="container">
        <header>
            
            <div class="logo">
                <i class="fas fa-gamepad"></i>
                <p>Zona Pengetahuan Fauna</p>
            </div>
            
            <ul class="navbar">
                <li><a href="#hewan" class="active">HEWAN</a></li>
                <li><a href="index.php" class="active">KEMBALI</a></li>
            </ul>
        </header>
        <div class="content-wrapper">
            <form action="/login" method="post">
            <div class="content-desc">
                
                <h1>KARNIVORA</h1>
                <p>Hewan karnivora adalah hewan-hewan pemakan daging. Hewan dalam
golongan ini menjadikan hewan lainnya sebagai makanannya.Dalam rantai
makanan, hewan karnivora umumnya bertindak sebagai predator atau pemangsa.
Ciri-ciri khusus dari hewan golongan karnivora adalah adanya gigi taring yang kuat dan tajam. Gigi taring tersebut digunakan hewan karnivora sebagai alat untuk
mencabik-cabik daging mangsanya.
                </p>
            </div>
            </form>
            <div class="banner">
                <img src = "static/images/logokar.png">
            </div>
        </div>
    </div>
    <div class="logo-section" id="hewan">
        <i class="fas fa-gamepad"></i>
        <h1>HEWAN</h1>
    </div>
    
    <section class="section-1">
        <div class="section-1-wrapper">  
            <h1></h1>
            <br>
            <div class="section-1-img">
                <a href="#rubah"><div class="img img-1"></div></a>
                <a href="#ular"><div class="img img-2"></div></a>
                <a href="#popup"><div class="img img-3"></div></a>
            </div>
        </div>
    </section>

    

<div class="popup" id="popup">
    <div class="popup__content">
        <div class="popup__img">
            <img src="static/images/macan1.jpg" alt="rubah">
            <img src="static/images/macan2.jpg" alt="ular">
            <img src="static/images/macan3.jpg" alt="macan">
            <a href="#hewan" class="popup__close">&times;</a>
        </div>
        <div class="popup__header">
            <h1>Gigi Nya Tajam</h1>
        </div>
        <div class="popup__text">
        <p>Harimau adalah salah satu spesies kucing besar yang paling ikonik di dunia. Macan adalah predator puncak dalam ekosistemnya dan memiliki peran penting dalam menjaga keseimbangan populasi mangsa. Dengan tubuh yang kuat dan cakar serta gigi yang tajam, mereka mampu berburu berbagai jenis hewan. </p>
        <p></p>
    </div>
    <a href="#hewan" class="btn popup__btn"></a>
    </div>
</div>

<div class="rubah" id="rubah">
    <div class="rubah__content">
        <div class="rubah__img">
            <img src="static/images/rubah1.jpeg" alt="rubah">
            <img src="static/images/rubah2.jpeg" alt="ular">
            <img src="static/images/rubah3.jpeg" alt="macan">
            <a href="#hewan" class="rubah__close">&times;</a>
        </div>
        <div class="rubah__header">
            <h1>Si imut Pemakan Daging</h1>
        </div>
        <div class="rubah__text">
        <p>Rubah adalah hewan karnivora kecil yang termasuk dalam keluarga Canidae, dikenal dengan kecerdasan dan kelincahannya. Mereka memiliki tubuh ramping, ekor panjang berbulu lebat, dan telinga runcing. Rubah sering ditemukan di berbagai habitat, termasuk hutan, padang rumput, gurun, dan bahkan di daerah perkotaan. Makanan utama rubah adalah hewan kecil seperti tikus, kelinci, dan burung.</p>
        <p></p>
    </div>
    <a href="#hewan" class="btn rubah__btn"></a>
    </div>
</div>

<div class="ular" id="ular">
    <div class="ular__content">
        <div class="ular__img">
            <img src="static/images/ular1.jpeg" alt="rubah">
            <img src="static/images/ular2.jpeg" alt="ular">
            <img src="static/images/ular3.jpeg" alt="macan">
            <a href="#hewan" class="ular__close">&times;</a>
        </div>
        <div class="ular__header">
            <h1>Awas Berbisa</h1>
        </div>
        <div class="ular__text">
        <p>Ular adalah hewan karnivora yang tergolong dalam kelas reptilia, terkenal karena tubuhnya yang panjang dan fleksibel tanpa kaki. Mereka ditemukan di hampir setiap habitat di dunia, dari hutan hujan tropis hingga gurun dan lautan. Ular menggunakan berbagai metode untuk berburu, termasuk penyergapan, pengejaran, dan penggunaan racun. Mereka memakan berbagai jenis mangsa, seperti mamalia kecil, burung, amfibi, dan bahkan ular lain. Beberapa spesies ular memiliki bisa mematikan yang mereka suntikkan melalui gigitan untuk melumpuhkan atau membunuh mangsa mereka, sementara yang lain menggunakan kekuatan tubuh mereka untuk membelit dan menghancurkan mangsa sebelum menelannya utuh. </p>
        <p></p>
    </div>
    <a href="#hewan" class="btn ular__btn"></a>
    </div>
</div>
    
</body>
</html>