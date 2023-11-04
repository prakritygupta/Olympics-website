<!-- <html>
    <head>
          <title>SPORTS</title>
          <link rel="stylesheet" type="text/css" href="style1.css">
         <style>
             .menu-btn{
                border:none;
            }
            a{
                color:#7d7b7b;
                text-decoration: none;
                font-size: 25px;
                font-family: Arial, Helvetica, sans-serif;
                text-transform: capitalize;
            }
            a:hover{
                color:#000000;
            }
            .container {
                display: flex;
                border:none;
            }    
            .image-container {
            margin:10px;
            width: 250px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border:none;
            }
            .image-container img {
            max-width: 100%;
            max-height: 100%;
            }
            .text-container {
            margin: 20px;
            }
            .newlink3{
            padding-bottom:30px;
            }
        
        </style>
    </head>
    <body style="background-color:#bebebe;">
    <div class="menu-btn" style="width:100%; display: flex; justify-content: center;">
        <button type="button" class="btn menu-btn" style="width:15%;"><?php echo '<a href="olympics.php" target="_self"><img  style="width:120px; padding-top:10px; padding-right:90px;" src="https://th.bing.com/th/id/R.a89bcb4393629ae24250fc970ee0b2d2?rik=j%2fDtl3dEqK5PSA&riu=http%3a%2f%2flogos-download.com%2fwp-content%2fuploads%2f2016%2f05%2fOlympic_Rings_logo_with_rims.png&ehk=yfrTkYOPajpJZdu3LYu0BvwsXEcy3K3yJETlosvU00U%3d&risl=&pid=ImgRaw&r=0"class="logo" alt="Olympics logo"></a>';?></button>
            <div class="dropdown">
                <button type="button" class="dropbtn" style="width:15%; margin-top:1.5%;font-size: 25.2px;">Olympic Games</button>
                    <div class="dropdown-content">
                        <?php echo '<a href="rio2016.php" target="_blank" >Rio 2016 </a>';?>
                        <?php echo '<a href="pyeongchang2018.php" target="_blank">PyeongChang 2018 </a>';?>
                        <?php echo '<a href="buenosaries2018.php" target="_blank">Buenoes Aries 2018 </a>';?>
                        <?php echo '<a href="lausanne2020.php" target="_blank">Lausanne 2020 </a>';?>
                        <?php echo '<a href="tokyo2020.php" target="_blank">Tokyo 2020 </a>';?>
                        <?php echo '<a href="beijing2022.php" target="_blank">Beijing 2020 </a>';?>
                    </div>
            </div>
        <button type="button" class="btn menu-btn" style="width:15%;"><?php echo '<a href="athletes.php" target="_self" style="padding-left:40px;">Athletes</a>';?></button>
        <button type="button" class="btn menu-btn" style="width:15%"><?php echo '<a href="news.php" target="_self">News</a>';?></button>
        <button type="button" class="btn menu-btn" style="width:15%"><?php echo '<a href="sports.php" target="_blank">Sports </a>';?></button>
        <button type="button" class="btn menu-btn" style="width:15%"><?php echo '<a href="signin.php" target="_self">Sign In</a>';?></button>
        
    </div> 
    <br>
    <h1 style="text-align:center;">SPORTS</h1></marquee>

                <div class="container">
                <div class="image-container">
                   <img src="https://olympics.com/images/static/sports/pictograms/v2/ath.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                   <a class="newslink" href="athletics.php">
                   <button class="btn btn1">ATHLETICS</button> </a>
                </div>
                </div>

                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/bdm.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="badminton.php">
                    <button class="btn btn1">BADMINTON</button> </a>
                </div>
                </div>
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/cur.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink3" href="curling.php">
                    <button class="btn btn1">CURLING</button> </a>
                </div>
                </div>
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/crd.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink3" href="cycling.php">
                    <button class="btn btn1">CYCLING ROAD</button> </a>
                </div>
                </div>
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/div.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="diving.php">
                    <button class="btn btn1">DIVING</button> </a>
                </div>  
                </div>
                </div>
                <div class="container">
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/fsk.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="figureskating.php">
                    <button class="btn btn1">FIGURE SKATING</button> </a>
                </div> 
                </div>
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/fbl.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="football.php">
                    <button class="btn btn1">FOOTBALL</button> </a>
                </div>
                </div>  
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/hoc.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="hockey.php">
                    <button class="btn btn1">HOCKEY</button> </a>
                </div>  
                </div>
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/kte.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="karate.php">
                    <button class="btn btn1">KARATE</button> </a>
                </div>  
                </div>
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/row.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="rowing.php">
                    <button class="btn btn1">ROWING</button> </a>
                </div>  
                </div>
                </div>
                <div class="container">
                    <div class="image-container">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/skb.svg" alt="something" style="height:100px;width:100px;">
                    <div class="text-container">
                        <a class="newslink" href="skateboarding.php">
                        <button class="btn btn1">SKATEBOARDING</button> </a>
                    </div>
                    </div>  
                    <div class="image-container">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/srf.svg" alt="something" style="height:100px;width:100px;">
                    <div class="text-container">
                        <a class="newslink" href="surfing.php">
                        <button class="btn btn1">SURFING</button> </a>
                    </div>
                    </div>  
                    <div class="image-container">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/swm.svg" alt="something" style="height:100px;width:100px;">
                    <div class="text-container">
                        <a class="newslink" href="swimming.php">
                        <button class="btn btn1">SWIMMING</button> </a>
                    </div>  
                    </div>
                    <div class="image-container">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/tte.svg" alt="something" style="height:100px;width:100px;">
                    <div class="text-container">
                        <a class="newslink" href="tennis.php">
                        <button class="btn btn1">TABLE TENNIS</button> </a>
                    </div>  
                    </div>
                    <div class="image-container">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/vvo.svg" alt="something" style="height:100px;width:100px;">
                    <div class="text-container">
                        <a class="newslink" href="volleyball.php">
                        <button class="btn btn1">VOLLEYBALL</button> </a>
                    </div>  
                    </div>
                </div>






    </body>
</html> -->
<html>
    <head>
          <title>SPORTS</title>
          <link rel="stylesheet" type="text/css" href="style1.css">
         <style>
             .menu-btn{
                border:none;
            }
            a{
                color:#7d7b7b;
                text-decoration: none;
                font-size: 25px;
                font-family: Arial, Helvetica, sans-serif;
                text-transform: capitalize;
            }
            a:hover{
                color:#000000;
            }
            .container {
                display: flex;
                border:none;
            }    
            .image-container {
            margin:10px;
            width: 250px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border:none;
            }
            .image-container img {
            max-width: 100%;
            max-height: 100%;
            }
            .text-container {
            margin: 20px;
            }
            .newlink3{
            padding-bottom:30px;
            }
       
        </style>
    </head>
    <body style="background-color:#bebebe;">
    <div class="menu-btn" style="width:100%; display: flex; justify-content: center;">
        <button type="button" class="btn menu-btn" style="width:15%;"><?php echo '<a href="olympics.php" target="_self"><img  style="width:120px; padding-top:10px; padding-right:90px;" src="https://th.bing.com/th/id/R.a89bcb4393629ae24250fc970ee0b2d2?rik=j%2fDtl3dEqK5PSA&riu=http%3a%2f%2flogos-download.com%2fwp-content%2fuploads%2f2016%2f05%2fOlympic_Rings_logo_with_rims.png&ehk=yfrTkYOPajpJZdu3LYu0BvwsXEcy3K3yJETlosvU00U%3d&risl=&pid=ImgRaw&r=0"class="logo" alt="Olympics logo"></a>';?></button>
            <div class="dropdown">
                <button type="button" class="dropbtn" style="width:15%; margin-top:1.5%;font-size: 25.2px;">Olympic Games</button>
                    <div class="dropdown-content">
                        <?php echo '<a href="rio2016.php" target="_blank" >Rio 2016 </a>';?>
                        <?php echo '<a href="pyeongchang2018.php" target="_blank">PyeongChang 2018 </a>';?>
                        <?php echo '<a href="buenosaries2018.php" target="_blank">Buenoes Aries 2018 </a>';?>
                        <?php echo '<a href="lausanne2020.php" target="_blank">Lausanne 2020 </a>';?>
                        <?php echo '<a href="tokyo2020.php" target="_blank">Tokyo 2020 </a>';?>
                        <?php echo '<a href="beijing2022.php" target="_blank">Beijing 2020 </a>';?>
                    </div>
            </div>
        <button type="button" class="btn menu-btn" style="width:15%;"><?php echo '<a href="athletes.php" target="_self" style="padding-left:40px;">Athletes</a>';?></button>
        <button type="button" class="btn menu-btn" style="width:15%"><?php echo '<a href="news.php" target="_self">News</a>';?></button>
        <button type="button" class="btn menu-btn" style="width:15%"><?php echo '<a href="sports.php" target="_blank">Sports </a>';?></button>
        <button type="button" class="btn menu-btn" style="width:15%"><?php echo '<a href="signin.php" target="_self">Sign In</a>';?></button>
       
    </div>
    <br>
    <h1 style="text-align: center;">SPORTS</h1>
                <div class="container">
                <div class="image-container">
                   <img src="https://olympics.com/images/static/sports/pictograms/v2/ath.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                   <a class="newslink" href="athletics.php">
                   <button class="btn btn1">ATHLETICS</button> </a>
                </div>
                </div>


                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/bdm.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="badminton.php">
                    <button class="btn btn1">BADMINTON</button> </a>
                </div>
                </div>
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/cur.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink3" href="curling.php">
                    <button class="btn btn1">CURLING</button> </a>
                </div>
                </div>
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/crd.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink3" href="cycling.php">
                    <button class="btn btn1">CYCLING ROAD</button> </a>
                </div>
                </div>
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/div.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="diving.php">
                    <button class="btn btn1">DIVING</button> </a>
                </div>  
                </div>
                </div>
                <div class="container">
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/fsk.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="figureskating.php">
                    <button class="btn btn1">FIGURE SKATING</button> </a>
                </div>
                </div>
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/fbl.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="football.php">
                    <button class="btn btn1">FOOTBALL</button> </a>
                </div>
                </div>  
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/hoc.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="hockey.php">
                    <button class="btn btn1">HOCKEY</button> </a>
                </div>  
                </div>
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/kte.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="karate.php">
                    <button class="btn btn1">KARATE</button> </a>
                </div>  
                </div>
                <div class="image-container">
                    <img src="https://olympics.com/images/static/sports/pictograms/v2/row.svg" alt="something" style="height:100px;width:100px;">
                <div class="text-container">
                    <a class="newslink" href="rowing.php">
                    <button class="btn btn1">ROWING</button> </a>
                </div>  
                </div>
                </div>
                <div class="container">
                    <div class="image-container">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/skb.svg" alt="something" style="height:100px;width:100px;">
                    <div class="text-container">
                        <a class="newslink" href="skateboarding.php">
                        <button class="btn btn1">SKATEBOARDING</button> </a>
                    </div>
                    </div>  
                    <div class="image-container">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/srf.svg" alt="something" style="height:100px;width:100px;">
                    <div class="text-container">
                        <a class="newslink" href="surfing.php">
                        <button class="btn btn1">SURFING</button> </a>
                    </div>
                    </div>  
                    <div class="image-container">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/swm.svg" alt="something" style="height:100px;width:100px;">
                    <div class="text-container">
                        <a class="newslink" href="swimming.php">
                        <button class="btn btn1">SWIMMING</button> </a>
                    </div>  
                    </div>
                    <div class="image-container">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/tte.svg" alt="something" style="height:100px;width:100px;">
                    <div class="text-container">
                        <a class="newslink" href="tennis.php">
                        <button class="btn btn1">TABLE TENNIS</button> </a>
                    </div>  
                    </div>
                    <div class="image-container">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/vvo.svg" alt="something" style="height:100px;width:100px;">
                    <div class="text-container">
                        <a class="newslink" href="volleyball.php">
                        <button class="btn btn1">VOLLEYBALL</button> </a>
                    </div>  
                    </div>
                </div>












    </body>
</html>
