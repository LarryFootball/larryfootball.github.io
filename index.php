<!-- Save this HTML file and set it as your browser startpage e.g. -->
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="favicon.ico">
  <meta charset="utf8">
  
  <?php
  $bg = array('1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg','8.jpg','9.jpg','10.jpg'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
  ?>
    
  <title>
    AAHYWE
  </title>
  <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1.0, user-scalable=no">
  <style>
    body {
      width: 100%;
      min-height: 100vh;
      /* uncomment next line and link an image file to use a bg image */
      background-color: #D06293;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      font-family: 'Helvetica', sans-serif;
      margin: 0;
      padding: 0;
      background: url(images/<?php echo $selectedBg; ?>) no-repeat;
    }
    .wrapper {
      display: flex;
      flex-flow: row wrap;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      width: 100%;
    }
    .box-item {
      margin: 14px;
      width: 240px;
      text-align: center;
    }
    .item-heading {
      border-top: 6px solid rgba(159,23,73,0.1);
      border-right: 6px solid rgba(159,23,73,0.1);
      border-left: 6px solid rgba(159,23,73,0.1);
      height: 55px;
      line-height: 54px;
      background: rgba(228,231,236,0.6);
      font-weight: 900;
      color: rebeccapurple;
      font-size: 1.4em;
    }
    ul {
      background: rgba(42,54,59, 0.6);
      border: 6px solid rgba(159,23,73,0.1);
      padding: 20px 0px 20px 0px;
      margin: 0;
      min-height: 230px;
    }
    li {
      padding: 14px 0;
      font-size: 1em;
      font-weight: bold;
      list-style: none;
    }
    li a, a:link, a:visited, a:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
    li a:hover {
      color: #F67B97;
      cursor: pointer;
      font-weight: 700;
      text-decoration: none;
    }
    #clock {
      position: fixed;
      font-family: 'Verdana', sans-serif;
      bottom: 10px;
      right: 10px;
      font-size: .62em;
      color: transparent;
      text-align: center;
      width: auto;
      background-image: linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red);
      -webkit-background-clip: text;
    }
    
  </style>
</head>
  <body>
    <base> <!-- lets all links open in a new window -->
    <div id="clock"><h1>"...what I now feel be no longer felt. Soon these burning miseries will be extinct.”</h1></div>
    <div class="wrapper">
      <div class="box-item">  
        <div class="item-heading">Sport</div>
        <ul>
          <li><a href="http://liveonscore.tv/">liveonscore</a></li>
          <li><a href="https://sportsbay.org/free-live-streams">sportsbay</a></li>
          <li><a href="https://archive.org/details/sports">Archives</a></li>
        </ul>
       </div>
      <div class="box-item">
        <div class="item-heading">Film</div>
        <ul>
          <li><a href="https://lookmovie.ag">Lookmovie</a></li>
          <li><a href="https://soapgate.org/">TV</a></li>
          <li><a href="https://ymovies.se/">Ymovies</a></li>
          <li><a href="https://snagfilms.club/home/">SnagFilms</a></li>
          <li> <a href="https://topdocumentaryfilms.com/">Documentaries</a></li>
        </ul>
      </div>
      <div class="box-item">
        <div class="item-heading">Main</div>
        <ul>
          <li><a href="https://www.netflix.com/browse">Netflix</a></li>
          <li><a href="https://www.youtube.com/">Youtube</a></li>
          <li><a href="https://www.disneyplus.com/en-gb">Disney+</a></li>
          <li><a href="https://www.sky.com/tv">Sky</a></li>
          <li><a href="https://www.bbc.co.uk/iplayer">IPlayer</a></li>
        </ul>
      </div>
      <div class="box-item">
        <div class="item-heading">Anime</div>
        <ul>
          <li><a href="https://kissanime.lol/kissanime-home.html">Kiss</a></li>
          <li><a href="https://animekaizoku.com/">Kaizoku</a></li>
          <li><a href="https://gogoanime.vc/">gogo</a></li>
        </ul>
      </div>
    </div>
    <!-- uncomment next line to display clock -->
    
  </body>
</html>
