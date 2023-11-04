<html>
    <head>
        <title>SKATEBOARDING</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
     </head>
    <body style="background-color:#bebebe;">
    <div class="menu-btn" style="width:100%; display: flex; justify-content: center;">
        <button type="button" class="btn menu-btn" style="width:15%;"><?php echo '<a href="olympics.php" target="_self"><img  style="width:220px; padding-top:10px; padding-right:90px;" src="https://th.bing.com/th/id/R.a89bcb4393629ae24250fc970ee0b2d2?rik=j%2fDtl3dEqK5PSA&riu=http%3a%2f%2flogos-download.com%2fwp-content%2fuploads%2f2016%2f05%2fOlympic_Rings_logo_with_rims.png&ehk=yfrTkYOPajpJZdu3LYu0BvwsXEcy3K3yJETlosvU00U%3d&risl=&pid=ImgRaw&r=0"class="logo" alt="Olympics logo"></a>';?></button>
            <div class="dropdown">
                <button type="button" class="dropbtn" style="width:15%; margin-top:1.5%;font-size: 25.2px;">Olympic Games</button>
                    <div class="dropdown-content">
                        <?php echo '<a href="rio2016.php" target="_blank" style="text-decoration:none;">Rio 2016 </a>';?>
                        <?php echo '<a href="pyeongchang2018.php" target="_blank" style="text-decoration:none;">PyeongChang 2018 </a>';?>
                        <?php echo '<a href="buenosaries2018.php" target="_blank" style="text-decoration:none;">Buenoes Aries 2018 </a>';?>
                        <?php echo '<a href="lausanne2020.php" target="_blank" style="text-decoration:none;">Lausanne 2020 </a>';?>
                        <?php echo '<a href="tokyo2020.php" target="_blank" style="text-decoration:none;">Tokyo 2020 </a>';?>
                        <?php echo '<a href="beijing2022.php" target="_blank" style="text-decoration:none;">Beijing 2020 </a>';?>
                    </div>
            </div>
        <button type="button" class="btn menu-btn" style="width:15%;"><?php echo '<a href="athletes.php" target="_self" style="padding-left:40px;text-decoration:none;">Athletes</a>';?></button>
        <button type="button" class="btn menu-btn" style="width:15%"><?php echo '<a href="news.php" target="_self" style="text-decoration:none;" >News</a>';?></button>
        <button type="button" class="btn menu-btn" style="width:15%"><?php echo '<a href="sports.php" target="_blank" style="text-decoration:none;">Sports </a>';?></button>
        <button type="button" class="btn menu-btn" style="width:15%"><?php echo '<a href="signin.php" target="_self" style="text-decoration:none;">Sign In</a>';?></button>
       
    </div>
    <br>
        <div class="heading-photo">
            <div class="mainphoto">
            <img src="data:image/jpeg;base64,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" alt="skateboarding" style="height:300px;width:450px;">
            </div>
            <div class="heading">
            <p>SKATEBOARDING</p>
            </div>
        </div>
        <br>
       
        <br>
        <table class="table table-bordered">
              <tr>
                <td style="color:#7d7b7b; padding-left: 100px;">Olympic Debut</td>
                <td>Tokyo 2020</td>
              </tr>
         
           
          </table>  
          <BR></BR>
          <div class="info">
            <div class="heading" style="margin-bottom:auto;">
              <p><h1>HISTORY OF SKATEBOARDING</h1> </p>
            </div>  
          <p class="athlete-info"><h4> Skateboarding made its Olympic debut in Tokyo 2020. The competition was held at the Ariake Urban Sports Park. </div>  
          <div class="info">
            <div class="heading" style="margin-bottom:auto;">
              <p><h1>Park</h1></p>
            </div>  
          <p class="athlete-info"><h4>The park competition comprises two rounds: prelims and finals.
                   In the prelims, 20 skaters will first compete in four heats of five skaters. The first eight skaters from the combined ranking of the heats will progress to the finals.
                  In each round, the skater's best of three 45-second runs count as their final round score. Five judges use a 0-100.00 point scale. The highest and lowest scores for each run are dropped, and the remaining three scores are averaged to two decimal places resulting in the final run score.
                </h4>
             <br>        
          </div>    
          <div class="info">
            <div class="heading" style="margin-bottom:auto;">
              <p><h1>Street</h1></p>
            </div>  <h4> The street competition is made up of two rounds: prelims and finals.
                    In the prelims, 20 skaters will first compete in four heats of five skaters. The first eight skaters from the combined ranking of the heats will progress to the finals.
                   In each round, the skaters will perform two 45-second runs and five tricks. Five judges use a 0-10.0 point scale. The highest and lowest scores for each run or trick are dropped, and the remaining three scores are averaged to one decimal place resulting in the final score.
                   In each round, the skater's four highest run or trick scores are added to create their final round score.
                   </h4>
          <br>        
          </div>
         
         
           
         
               
               


    </body>
</html>
