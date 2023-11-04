<html>
    <head>
        <title>NEWS UPDATES</title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
            .newslink{
                color:#5d5c5c;
            }
            .container {
            display: flex;
            }
        .image-container {
     border: 3px solid #594d5b;
    padding: 10px;
    margin: 10px;
    width: 350px;
    height: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  .image-container img {
    max-width: 100%;
    max-height: 100%;
   }
  .text-container {
    margin: 20px;
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
    <marquee behavior="scroll" direction="right"><h1 style="font-family: Arial, Helvetica, sans-serif;">NEWS UPDATES</h1></marquee>
    <div class="container">
        <div class="image-container">
            <img src="https://th.bing.com/th/id/OIP.r96kC8nnWzRoS-Gf8W2XHQHaEK?w=298&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="something" style="height:250px;width:300px;">
        <div class="text-container">
            <a class="newslink" href="https://www.skysports.com/amp/olympics/news/15234/12372160/tokyo-2020-olympics-sky-brown-wins-skateboarding-bronze-to-become-youngest-british-summer-olympic-medal-winner" >Tokyo Olympics:Sky, The Youngest Britain Athlete to win an Olympic </a>
        </div>
        </div>
        <div class="image-container">
            <img src="https://images.hindustantimes.com/img/2021/07/26/1600x900/PTI07_25_2021_000208A_1627288812238_1627288833753.jpg" alt="something" style="height:250px;width:350px;">
        <div class="text-container">
            <a class="newslink" href="https://www.hindustantimes.com/sports/olympics/tokyo-olympics-india-men-s-hockey-team-look-to-bounce-back-against-spain-101627288746884.html" >Tokyo Olympics:India men's Hockey Team bounce back against Spain</a>
        </div>
        </div>
        <div class="image-container">
            <img src="https://img.olympicchannel.com/images/image/private/t_16-9_480/f_auto/v1538355600/primary/qaxh7rw23ho4duy0yowj" alt="something" style="height:250px;width:300px;">  
        <div class="text-container">
            <a class="newslink" href="https://olympics.com/en/news/69th-senior-national-kabaddi-championship-women-2023-result-score-standings">National Women’s Kabaddi Championship 2023: Get all results, scores and points table</a>
        </div>
        </div>
        <div class="image-container">
            <img src="https://img.etimg.com/thumb/msid-84812113,width-1200,height-900,resizemode-4,imgsize-231485/tokyo-olympics-news-and-live-updates-july-28.jpg"alt="something" style="height:300px;width:300px;">
         <div class="text-container">
            <a class="newslink" href="https://economictimes.indiatimes.com/news/sports/tokyo-olympics-news-and-live-updates-july-28/liveblog/84812113.cms">Tokyo Olympics Update </a>
         </div>
        </div>
    </div>


     <div class="container">
        <div class="image-container">
            <img src="https://images.wsj.net/im-382265/?width=1278&size=1"alt="something" style="height:300px;width:300px;">
        <div class="text-container">
            <a class="newslink" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.wsj.com%2Farticles%2Fteam-usa-tokyo-olympics-medal-tally-women-soar-11628425153&psig=AOvVaw3-qWADbfpTi52hwtrZdHjU&ust=1679666854059000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMDr-uOc8v0CFQAAAAAdAAAAABAJ">Team USA's Medal Tally </a>
        </div>
        </div>
        <div class="image-container">
            <img src="https://e3.365dm.com/21/07/1600x900/skynews-teaser-picture-olympic_5460058.jpg?20210727142345"alt="something" style="height:400px;width:400px;">
        <div class="text-container">
            <a class="newslink" href="https://news.sky.com/story/tokyo-olympics-the-full-list-of-medal-winners-from-team-gb-so-far-12365281?dcmp=snt-sf-twitter">Tokyo Olympics: The full list of medal winners from Team GB</a>
        </div>
        </div>
        <div class="image-container">
            <img src="https://www.nippon.com/en/ncommon/contents/news/962129/962129.jpg"alt="something" style="height:400px;width:400px;">
        <div class="text-container">
            <a class="newslink" href="https://www.nippon.com/en/news/reu20210801KBN2F217S/olympics-athletics-italian-jacobs-wins-men's-100m-gold-at-tokyo-olympics.html">Italian Jacobs wins Men's 100m Gold </a>
        </div>
        </div>
         <div class="image-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_qIFSo5Z6w7hpPFT1achkxfxEQQ_PtYUBaQ&usqp=CAU"alt="something" style="height:250px;width:250px;">
        <div class="text-container">
            <a class="newslink" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Feconomictimes.indiatimes.com%2Fnews%2Fnewsblogs%2Ftokyo-olympics-2021-day-5-latest-news-olympic-games-medal-tally-live-updates-jul-27%2Fliveblog%2F84779369.cms&psig=AOvVaw3-qWADbfpTi52hwtrZdHjU&ust=1679666854059000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMDr-uOc8v0CFQAAAAAdAAAAABAS" style="font-size:20px;">
                Tokyo Olympics 2020 updates: Boxer Lovlina Borgohain wins; mixed team shooters suffer qualifying exit</a>
        </div>
        </div>    
     </div>
    </body>
</html>







