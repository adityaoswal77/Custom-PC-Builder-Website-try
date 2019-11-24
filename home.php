<?php
session_start();
if(isset($_SESSION["uid"]))
{
    //header("location:index.php");
}
else{
    header("location:login.php");
}
include("./connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<center>
    <div class="row">
            <h1 style="color:skyblue;border:2px solid black">THE CUSTOM PC BUILDER</h1> <br>
    </div>
            <div class="topnav">
    
<hr>
<ul>
    <li style="background-color:blue; border-radius:20px;height:50px"><a href="./home.php">Home</a></li>
    <li style="background-color:chocolate; border-radius:20px; height:50px"><a href="./logout.php"> Logout </a></li>
    <li style="background-color:chocolate;border-radius:20px; height:50px"><a href="./admin.php"> Admin</a></li>

</ul>      
    <hr>      

</div>

<div class="intro">
    <h2>Welcome to the Custom Builder.</h2>
    <h4>Build your own dream PC using our Website.</h4>
<h4>WHat You should Know before getting into building a PC</h4>
<h2>Graphics Card</h2>
<p>Your <a href="https://www.google.com/search?biw=1707&bih=844&sxsrf=ACYBGNSSbplh0Wf4HnMheXCVfE4P1djaFA%3A1574623007087&ei=H9faXbPzBNKRwgPkn5vYAw&q=Why+do+i+need+a+Graphic+card&oq=Why+do+i+need+a+Graphic+card">graphics card</a> 
is arguably the most important part of a gaming computer build. Anything displayed on your computer monitor has come directly from your graphics
 card (or on-board graphics processor if you don&#8217;t have a dedicated graphics card). It directly handles the processing and rendering of 
 images which are received from your central processing unit (CPU) so that they can be displayed on your screen. Many graphics cards 
 have in-built features to handle specific graphical aspects of gameplay such as image rotation/fine textures/anti-aliasing, so that your CPU
  doesn&#8217;t have to handle these particular operations and is free for other processing activities.</p>
<h2>CPU</h2>
<p>Just as important as your graphics card in gaming is your<a href="https://www.google.com/search?rlz=1C1NDCM_enIN811IN811&sxsrf=ACYBGNSJwkNjv88I-rM_h6-hjMUeAPNR8Q%3A1574623527978&ei=J9naXYauO4rcvgT5irTACQ&q=why+do+i+need+a+CPU&oq=why+do+i+need+a+CPU"> computer&#8217;s 
processor or CPU</a>. This typically handles much of the actual gameplay when you are playing games, such as taking input instructions from 
your mouse and keyboard, actually running the game, loading maps and backgrounds, and processing events which occur inside the game.
 Once calculated, these items which have been handled by the CPU are passed on to the graphics card for final rendering/display and output
  to your display monitor.</p>
<h2>Memory</h2>
<p>Your computer&#8217;s <a href="https://www.google.com/search?rlz=1C1NDCM_enIN811IN811&sxsrf=ACYBGNSQ7rMxmbQyxvoaZM7stvC_rqF4eg%3A1574622883030&ei=o9baXbK5Acr_vAT8g4Fg&q=why+do+i+need+ram&oq=why+do+i+need+ram">memory</a>, or RAM, holds short-term information which is constantly being accessed and used by the CPU. Think of this like a temporary cache/storage spot where you would put things that need to be referred to frequently.  Accessing information in RAM is a lot faster for the CPU than if it had to access the same information from say, your hard drive. It&#8217;s the equivalent of having a bar fridge right next to your couch, so you don&#8217;t have to get up to go all the way to the kitchen fridge every time you want a drink.</p>
<h2>Storage</h2>
<p>Your <a href="https://www.google.com/search?rlz=1C1NDCM_enIN811IN811&sxsrf=ACYBGNQLL4KFY71xkkV0wFA-J-4gHgBtmQ%3A1574623421265&ei=vdjaXerTD8bgvgSY4JygDA&q=why+do+i+need+SSD&oq=why+do+i+need+SSD">hard drive (or solid state drive if you&#8217;re lucky) </a>is used for storage and is where the bulk of your game lives &#8211; it&#8217;s where it got installed to on your computer. When you go to actually play, the CPU needs to access this information to display on your monitor. It does this by directly pulling information from the storage drive, and performing any actions on it. The CPU itself can&#8217;t store information, so each time it needs to access the same information it needs to pull it from the storage drive. This can slow things down if your storage drive is slow (and it often is &#8211; usually it&#8217;s the slowest component in the chain).</p>
<h2>Motherboard</h2>
<p>Your <a href="https://www.google.com/search?q=why+do+i+need+a+motherboard">motherboard </a>physically connects all the pieces 
together and provides an electrical link between all of the main parts. It can also affect the speed at which information can be passed 
from one component to another, especially if information is only passed through serially (think one wire, with one path of travel) 
instead of in a parallel manner (think multiple wires, or multiple ways to pass a bunch of information at the same time).</p>
<p>Good motherboards are optimized for the highest amount of throughput of information, so that they do not limit the speed of 
information transfer (typically you will be limited by components like your CPU, storage drives, or graphics card long before 
your motherboard).</p>

    <a href="dropdown2.php">Click here to get Started</a>
    <div>
    
    </div>
</div>

</body>
</center>
</html>

<style>
h1{
    padding:20px;
}
ul {
    margin:0;
    padding:0;
}
ul li{
    text-decoration:none;
    display:inline;
    padding:0 20px 0 20px;
    width:45px;
}
ul li a{
    
    text-decoration:none;
    color:white;
}

</style>