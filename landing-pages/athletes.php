<html>
    <head>
        <title>
            Athletes
        </title>
        <style>
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
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="background-color:#f0f0f1">   
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
        <p style="font-size: 50px;margin-top: 30px;padding-top:20px;text-align:center;font-family:AktivGrotesk,Arial,Helvetica,sans-serif; font-weight:bolder;">ATHLETES</P>
        <button type="button" class="icon"><?php echo '<a href="neerajchopra.php" target="_blank"><img class="athlete-photo" src="https://img.olympicchannel.com/images/image/private/t_1-1_600/f_auto/primary/o7jvipsa0kfv8uv9hzbm" alt="neeraj chopra">Neeraj Chopra</a>';?></button>
        <button type="button" class="icon"><?php echo '<a href="pvsindhu.php" target="_blank"><img class="athlete-photo" src="https://img.olympicchannel.com/images/image/private/t_1-1_600/f_auto/primary/gsfzbbjmgyi8atet8iot" alt="pv sindhu">P.V.Sindhu</a>';?></button>
        <button type="button" class="icon"><?php echo '<a href="marykom.php" target="_blank"><img class="athlete-photo" src="https://img.olympicchannel.com/images/image/private/t_1-1_600/f_auto/primary/qhy6cdfwxyrdqrnx7ypx" alt="mary kom">Mary Kom</a>';?></button>
        <button type="button" class="icon"><?php echo '<a href="serenawilliams.php" target="_blank"><img class="athlete-photo" src="https://img.olympicchannel.com/images/image/private/t_1-1_600/f_auto/primary/vhfr6hduzmldcu4dhgre" alt="serena williams">Serena Williams</a>';?></button>
        <button type="button" class="icon"><?php echo '<a href="chongweilee.php" target="_blank"><img class="athlete-photo" src="https://img.olympicchannel.com/images/image/private/t_1-1_600/f_auto/primary/ainucfilqcytvytnhakk" alt="chong wei lee">Chong Wei Lee</a>';?></button>
        <button type="button" class="icon"><?php echo '<a href="usainbolt.php" target="_blank"><img class="athlete-photo" src="https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/lmusmqtktq8slg9yl1xj" alt="usain bolt">Usain Bolt</a>';?></button>
        <button type="button" class="icon"><?php echo '<a href="sainanehwal.php" target="_blank"><img class="athlete-photo" src="https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/vd9axsj5jkpm6f3tijfy" alt="saina nehwal">Saina Nehwal</a>';?></button>
        <button type="button" class="icon"><?php echo '<a href="saniamirza.php" target="_blank"><img class="athlete-photo" src="https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/v1622204621/primary/p0hwbzlt71nzc7n5puld" alt="sania mirza">Sania Mirza</a>';?></button>
    </body>
</html>