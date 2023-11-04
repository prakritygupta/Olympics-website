<html>
    <head>
        <title>OLYMPICS</title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
            .newslink{
                color:#5d5c5c;
                transition: transform 0.2s ;
            }
            .newslink:hover{
                transform: scale(1.03);
                box-shadow: rgb(181, 180, 180);
                border-bottom: 1px solid #000000;

            }
            .container {
            display: flex;
            }
            .big-container {
                border: 1px solid #bebebe;
                padding: 10px;
                margin: 10px;
                width: 800px;
                height: 550px; /* adjust as needed */
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column; 
            }
            .big-container img{
                max-width: 100%;
                max-height: 100%;
            }
            .small-container {
                border: 1px solid #bebebe;
                padding: 10px;
                margin: 10px;
                width: 350px;
                height: 250px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            .small-container img {
                max-width: 100%;
                max-height: 100%;
            }
            .text-container {
            margin: 10px;
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
    <div class="container">
            <div class="big-container" >
                <a class="newslink" href="https://arunachalage.com/lead/neeraj-chopra-wins-indias-first-ever-athletics-gold-in-olympics/" ><img src="https://arunachalage.com/wp-content/uploads/2021/08/Neeraj.jpg"  alt="news" style="height:480px;width:690px;"></a>
            <div class="text-container">
                <a class="newslink" href="https://arunachalage.com/lead/neeraj-chopra-wins-indias-first-ever-athletics-gold-in-olympics/" >Neeraj Chopra wins India's first ever Athletics gold in Olympics </a>
            </div>
            </div>

            <div class="container"style="flex-direction:column;">
                <div class="small-container" style="float:right;">
                    <a class="newslink" href="https://www.skysports.com/olympics/news/15234/12368583/tokyo-2020-olympics-great-britain-earn-fourth-swimming-gold-medal-with-4x100m-mixed-medley-triumph" ><img src="https://e0.365dm.com/21/07/1600x900/skysports-swimming-team-gb_5463325.jpg" alt="news" style="height:190px;width:350px;"></a>
                <div class="text-container">
                    <a class="newslink" href="https://www.skysports.com/olympics/news/15234/12368583/tokyo-2020-olympics-great-britain-earn-fourth-swimming-gold-medal-with-4x100m-mixed-medley-triumph" style="font-size:20px; margin:0px;" >Tokyo Olympics: Great Britain earns fourth swimming gold medal</a>
                </div>
                </div>
                <div class="small-container"style="float:left;">
                    <a class="newslink" href="https://www.news.com.au/national/australian-athletes-set-the-social-media-trend-amid-tokyo-olympics/video/39387e5ae8f4348e27007873d9e99e83"><img src="https://content.api.news/v3/images/bin/c7be24d52c579f8f0eb368aa9a0dc84a" alt="news" style="height:190px;width:350px;"></a>  
                <div class="text-container">
                    <a class="newslink" href="https://www.news.com.au/national/australian-athletes-set-the-social-media-trend-amid-tokyo-olympics/video/39387e5ae8f4348e27007873d9e99e83"style="font-size:20px; margin:0px;">Australian athletes set social media trend amid Tokyo Olympics </a>
                </div>
                </div>
            </div>

            <div class="container" style="flex-direction:column;">
                <div class="small-container">
                    <a class="newslink" href="https://www.nippon.com/en/news/reu20210731KBN2F1060/olympics-athletics-triumvirate-keep-400m-women's-hurdles-showdown-on-track.html"><img src="https://www.nippon.com/en/ncommon/contents/news/957818/957818.jpg"alt="news" style="height:170px;width:350px;"></a>
                 <div class="text-container">
                    <a class="newslink" href="https://www.nippon.com/en/news/reu20210731KBN2F1060/olympics-athletics-triumvirate-keep-400m-women's-hurdles-showdown-on-track.html"style="font-size:20px; margin:0px;">Olympics-Athletics-Triumvirate keep 400m women's hurdles showdown on track </a>
                </div>
                </div>
                <div class="small-container">
                    <a class="newslink" href="https://olympics.com/en/news/summer-mcintosh-sets-400m-freestyle-swimming-world-record"><img src="https://img.olympicchannel.com/images/image/private/t_s_w1340/t_s_16_9_g_auto/f_auto/primary/hmxvp8rk5hrvzpoc2djs"alt="news" style="height:190px;width:350px;"></a>
                 <div class="text-container">
                    <a class="newslink" href="https://olympics.com/en/news/summer-mcintosh-sets-400m-freestyle-swimming-world-record"style="font-size:20px; margin:0px;">Summer McIntosh smashes 400m freestyle swimming world record </a>
                </div>
                </div>
        </div>
    </body>
</html>