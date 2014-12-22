<div class="headerspace"></div>
<div class="header">
    <div id="mobile">
    	<div id="box" onClick="toggleVisibility('menu')"><div id="line"></div><div id="line"></div><div id="line"></div></div>
    	<a href="index.php"><h1>Crew 208</h1></a>      
    </div>
    <div id="menu">
        <ul>
            <a href="index.php"><img src="webmenu.png"></a>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Calendar</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
</div>
<?php
function image($img,$text) {

echo "<div class='feature-container'>
        <div class='feature-img'>
            <div class='feature'>
                <div style='background:url($img) center/cover' class='featured-image'></div>
                <div style='background:url($img) center/cover' class='featured-image2'></div>
            </div>
        </div>
        <div class='feature-text'><h1>$text</h1></div>
    </div>";

}?>