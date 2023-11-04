<html>
    <head>
        <title>
            BuenosAries2018
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
        <img class="riologo" alt="BuenosAries2018 Logo" style="float: left; padding-left: 250px; padding-top:10px;"src="https://img.olympicchannel.com/images/image/private/f_auto/w_300/primary/ga1kjenb9rrllpqi0zby">
        <div class="div" style="padding-top:80px; padding-right:270px;">        
            <table class="content" style="width: 50%; float: right;">
                <tr>
                    <th>Date</th>
                    <td class="td">6 OCTOBER- 19 OCTOBER</td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td>ARGENTINA</td>
                </tr>
                <tr>
                    <th>Athletes</th>
                    <td>4000</td>
                </tr>
                <tr>
                    <th>Teams</th>
                    <td>206</td>
                </tr>
                <tr>
                    <th>Events</th>
                    <td>239</td>
                </tr>
            </table>
        </div>
        <br><br><br><br><br> <br>
        <img src="https://img.olympicchannel.com/images/image/private/f_auto/t_s_pog_overview_hero_lg/primary/pvutbau2twc8ny2qyia3" alt="stadium" style="margin-right:50px;float:center;display: block;margin-left: 300px; margin-top:150px;">
    </body>
</html>