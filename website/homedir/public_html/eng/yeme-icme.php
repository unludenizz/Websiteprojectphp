<?php
    


    $value = isset($_GET['value']) ? $_GET['value'] : 'yeme-icme';



?>

<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdazNUp_0_NfMrL9Ar7ZFuWOg01JIamEo"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TravelGuide Site Template - Easly find places, guides, directions, info.">
    <meta name="author" content="Ansonika">
    

    <!-- Favicons-->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300" rel="stylesheet" type="text/css">

    <!-- BASE CSS -->
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="../css/ion.rangeSlider.css" rel="stylesheet">
    
    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet">
    
    <style>
        html,
        body {
            height: 100%;
        }
    </style>

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<script src="https://api-maps.yandex.com/2.1/?lang=tr_TR&amp;apikey=b1c0e74a-7bdc-4f4d-ac90-2561043e5278"></script>
</head>

<body>

    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->

    <div class="layer"></div>
    <!-- Menu mask -->

    <!-- Header ================================================== -->
   <header id="plain">
        <div class="container-fluid">
            <div class="row">
                <div class="col--md-4 col-sm-3 col-xs-4">
                    <a href="index.php" id="logo"><img src="../img/logo.png" width="170" height="30" alt="" data-retina="true">
                    </a>
                </div>
                <nav class="col--md-8 col-sm-9 col-xs-8">
                    <ul id="primary_nav">
                        <li id="login"><a href="giris.php">Log in</a>
                        </li>
                        <li id="wishlist"><a href="index.php#sektörler">Companys</a>
                        </li>
                        <li id="buy"><a href="#" onclick="openPopupp()">Add Your Company</a>
                        </li>
                        <li><div class="styled-select">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this, '<?php echo $value; ?>')">
                            <option value="yeme-icme" selected>English</option>
                            <option value="../yeme-icme">Turkish</option>
                            <option value="../deu/yeme-icme">German</option>
                        </select>
                        </div></li>
                    </ul>
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobil</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="../img/logo_2.png" alt="img" data-retina="true" width="170" height="30">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <ul>
                            <li class="submenu">
                                <li><a href="index.php">Home</a>
                                </li>
                                <li><a href="faq.html">FAQ</a>
                                </li>
                                <li><a href="contacts.php">Contact</a>
                                </li>
                                <li><a href="giris.php">Add Your Company</a>
                                </li>
                                <li id="wishlist"><a href="#sektörler">Companys</a>
                                </li>
                        </ul>
                    </div>
                    <!-- End main-menu -->
                </nav>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </header>
    <!-- End Header =============================================== -->
    
    <div class="container-fluid full-height">
        <div class="row row-height">
            <div class="col-lg-7 col-md-6 content-left">
                <div id="filters_map">
                    
                    <div id="collapseFiltesmap" class="collapse">
                        <div class="filter_type clearfix">
                            <h6>Duration</h6>
                            <div class="range_wp">
                                <input type="text" id="range" name="range" value="">
                            </div>
                        </div>
                        <div class="filter_type clearfix">
                            <h6>Review score</h6>
                            <ul>
                                <li>
                                    <label>Superb: 9+ (77)</label>
                                    <input type="checkbox" class="js-switch" checked>
                                </li>
                                <li>
                                    <label>Very good: 8+ (552)</label>
                                    <input type="checkbox" class="js-switch">
                                </li>
                                <li>
                                    <label>Good: 7+ (909)</label>
                                    <input type="checkbox" class="js-switch">
                                </li>
                                <li>
                                    <label>Pleasant: 6+ (1196)</label>
                                    <input type="checkbox" class="js-switch">
                                </li>
                                <li>
                                    <label>No rating (198)</label>
                                    <input type="checkbox" class="js-switch">
                                </li>
                            </ul>
                        </div>
                        <div class="filter_type clearfix">
                            <h6>Type</h6>
                            <ul>
                                <li>
                                    <label>Historic (77)</label>
                                    <input type="checkbox" class="js-switch" checked>
                                </li>
                                <li>
                                    <label>Monumets (552)</label>
                                    <input type="checkbox" class="js-switch">
                                </li>
                                <li>
                                    <label>Interesting (909)</label>
                                    <input type="checkbox" class="js-switch">
                                </li>
                                <li>
                                    <label>Architectural (1196)</label>
                                    <input type="checkbox" class="js-switch">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <!-- End col-md-6 -->
                    <?php include("../assets/baglanti2.php");
                    $sql = "SELECT * FROM kabuledilen_sektor WHERE firma_turu = '$value'";
                    $sonuc = $baglanti2->query($sql);
                    $sayac=0;
                    if($sonuc->num_rows>0){
                        while($cek=$sonuc->fetch_assoc()){
                            $firmaid = $cek["id"];
        echo '<div class="col-lg-6 col-md-12 col-sm-6">
    <div class="img_wrapper">
        <div class="tools_i">
            <div class="directions_list_map" onclick="showInMap()">
                <a class="tooltip_styled tooltip-effect-4">
                    <span class="tooltip-item"></span>
                    <div class="tooltip-content">View on Map</div>
                </a>
            </div>
            <div class="wishlist">
                <a href="firma-detail.php?firmaid='.$firmaid.'" class="tooltip_styled tooltip-effect-4">
                    <span class="tooltip-item"></span>
                    <div class="tooltip-content">Detailed Company Information</div>
                </a>
            </div>
        </div>
        <!-- End tool_i -->
        <div class="img_container">
            <a href="#">
                <img src="../'.$cek['firma_resim'].'" width="800" height="533" class="img-responsive" alt="">
                <div class="short_info">
                    <small>Date of upload: '.$cek['firma_ekle_tarih'].'</small>
                    <h3>'.$cek['firma_ismi'].'</h3>
                    <p>Phone : '.$cek['firma_tel'].'<p>
                    <p>Email : '.$cek['firma_eposta'].'</p>
                    <p>Address :'.$cek['firma_adres'].'</p>
                </div>
            </a>
        </div>
    </div>
</div>';
$sayac+=1;



                            
                            
                            
                            
                            
                            
                            
                            
                            
                        }
                    }
                    
                    
                    
                    
                    
                    ?>
                    <!-- End col-md-6 -->
                </div>
                <!-- End row -->
                </div>
            <!-- End content-left-->

            <div class=" col-lg-5 col-md-6 map-right">
               
                <div id="map" style="width: 630px; height: 634px; margin-top:120px;"></div>
    <script>
    function showInMap() {
        console.log(31)
        Placemark.balloon.open();
        ;}
        document.querySelector('.directions_list_map').addEventListener('click', showInMap);
ymaps.ready(function(){
    var myMap = new ymaps.Map("map", {
        center: [37.1441888, 29.5086409],
        zoom: 14
    });

    <?php
    include("../assets/baglanti2.php");

    // Adres bilgisini kullanarak koordinatları döndüren bir fonksiyon
    function getCoordinates($address) {
        $apiUrl = "https://geocode-maps.yandex.ru/1.x/?apikey=b1c0e74a-7bdc-4f4d-ac90-2561043e5278&format=json&geocode=" . urlencode($address);
        $response = file_get_contents($apiUrl);
        $json = json_decode($response, true);
        $coordinates = $json['response']['GeoObjectCollection']['featureMember'][0]['GeoObject']['Point']['pos'];
        $coordinates = explode(" ", $coordinates);
        return [$coordinates[1], $coordinates[0]];
    }

    $sql = "SELECT * FROM kabuledilen_sektor WHERE firma_turu = '$value'";
    $sonuc = $baglanti2->query($sql);
    $firmaTuruArray = array(
    "banka-ve-finans" => "Banking and Finance",
    "hizmet-sektoru" => "Service industry",
    "egitim" => "Education",
    "ev-bahce-ve-dekorasyon" => "Home, Garden And Decoration",
    "otomotiv" => "Automotive",
    "saglik" => "Health",
    "resmi-kurumlar" => "Government agencies",
    "yeme-icme" => "Eating and drinking",
    "giyim-moda" => "Clothing-Fashion",
    "iletisim" => "Communication",
    "insaat" => "Building",
    "konaklama-turizm" => "Accommodation-Tourism"
);
    $firmaturum;
    // Her bir kaydın adres bilgisini kullanarak koordinatlarını bulma
    $coordinatesArray = array();
    $contentArray = array();
    while ($cek = $sonuc->fetch_assoc()) {
        $firmaid = $cek["id"];
        $firmaTuru = $cek['firma_turu'];
        $ingilizceFirmaTuru = $firmaTuruArray[$firmaTuru];
        
        $address = $cek["firma_adres"];
        $coordinates = getCoordinates($address);
        $url = 'https://www.google.com/maps?q='.$coordinates[0].','.$coordinates[1];
        
        $content = '<div class="marker_info"><div style="width: 290px; height: 140px; background: rgba(1); display: inline-block;"><img src="../'.$cek['firma_resim'].'" style="background: black; width: 180px; margin-left: 30px; margin-top: 20px;" alt=""></div><span><h3>'.$cek['firma_ismi'].'</h3><p>'.$ingilizceFirmaTuru.'</p><a href="firma-detail.php?firmaid='.$firmaid.'" class="btn_infobox_detail"></a><a href="' . $url . '" target="_blank" class="btn_infobox_get_directions">Get Directions</a><br><a href="tel:'.$cek['firma_tel'].'" class="btn_infobox_phone">'.$cek['firma_tel'].'</a></span></div>';
        
        $coordinatesArray[] = $coordinates;
        $contentArray[] = $content;
        
        echo 'myMap.geoObjects.add(new ymaps.Placemark(
            ['.$coordinates[0].', '.$coordinates[1].'], {
                balloonContent: \''.$content.'\'
            }, {
                iconLayout: "default#image",
                iconImageHref: "../img/mapiconresim/'.$value.'.png",
                iconImageSize: [43, 43]
            }
        ));';
    }
    ?>

    var coords = <?php echo json_encode($coordinatesArray) ?>;
    var content = <?php echo json_encode($contentArray) ?>;
    
    
});
</script>   <!-- End row -->
        </div>
        <!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->

<div id="popupp" class="popupp">
		<span class="closee" onclick="closePopupp()">&times;</span>
		<p></p>
		<p class="popup-contentt">Only our members can add sectors. Please login.
		</p>
		<p><a href="giris.php" class="buttonr">Log in</a>                   <a href="kayit.php" class="buttonr">Register</a></p>
		
	</div>
    <!-- COMMON SCRIPTS -->
    <script src="../js/jquery-2.2.4.min.js"></script>
    <script src="../js/common_scripts_min.js"></script>
    <script src="../assets/validate.js"></script>
    <script src="../js/functions.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    
    <script src="../js/raphael-2.1.4.min.js"></script>
    <script src="../js/justgage.min.js"></script>
    <script src="../js/score.js"></script> <!-- harita içinde -->
    <script src="../js/events_map.js"></script>
    <script src="../js/infobox.js"></script>
    <script src="../js/ion.rangeSlider.min.js"></script>
    <script src="../js/switchery.js"></script>
    
    
    
    <script>
        function onSelectLanguagePHP(selectElement, value) {
    var selectedValue = selectElement.options[selectElement.selectedIndex].value;
    window.location.href = selectedValue+".php" + "?value=" + value;
}
    </script>
        
    </script>
    <script>
        'use strict';
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function (html) {
            var switchery = new Switchery(html, {
                size: 'small'
            });
        });

        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 30,
            max: 180,
            from: 60,
            to: 130,
            type: 'double',
            step: 1,
            prefix: "Min. ",
            grid: false
        });
    </script>
</body>

</html>