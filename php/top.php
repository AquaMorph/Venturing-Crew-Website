<?php 
function top($title,$image) {
    echo "<!DOCTYPE>
    <html>";
    include 'head.php';
    title($title);
    echo "<div id='holder'>";
    include 'menu.php'; 
    image($image,$title);
    echo "    <div class='wrapper'>
            <div class='content'>";
}
?>