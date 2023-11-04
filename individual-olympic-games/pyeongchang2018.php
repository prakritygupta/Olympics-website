<html>
    <head>
        <title>
            Pyeongchang2018
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .th,td{
            border: 1px solid #000000;
            text-align: center;
            padding: 8px;
            }
            tr:nth-child(odd)
            {
            border: 1px solid #000000;
            background-color: #F5F5F5;
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

        </style>
    </head>
    <body>
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
        <img class="riologo" alt="Pyeongchand2018 Logo"style="float: left; padding-left: 250px; padding-top:10px; padding-bottom: 10px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/PyeongChang_2018_Winter_Olympics.svg/1200px-PyeongChang_2018_Winter_Olympics.svg.png">
        <br>
        <div class="div" style="padding-top:55px; padding-right:150px;">        
            <table class="content" style="width: 50%; float: right;">
                <tr>
                    <th>Date</th>
                    <td class="td">9 FEBRUARY- 25 FEBRUARY</td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td>REPUBLIC OF KOREA</td>
                </tr>
                <tr>
                    <th>Athletes</th>
                    <td>2833</td>
                </tr>
                <tr>
                    <th>Teams</th>
                    <td>92</td>
                </tr>
                <tr>
                    <th>Events</th>
                    <td>102</td>
                </tr>
            </table>
        </div>
        <br><br>
        <img src="https://img.olympicchannel.com/images/image/private/f_auto/t_s_pog_overview_hero_xl/primary/cgun0tkw5nollpdw0lws" alt="stadium">
    </body>
</html>