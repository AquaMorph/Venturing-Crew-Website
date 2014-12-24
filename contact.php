<?php include 'top.php'; top("Contact Us","img/IMG_1121.JPG") ?>
<form method="post" action="process.php">
        
    <label>Name</label>
    <input name="name">
            
    <label>Email</label>
    <input name="email" type="email">
    
    <label>Subject</label>
    <input name="subject">
            
    <label>Message</label>
    <textarea name="message" rows="4"></textarea>
            
    <input id="submit" name="submit" type="submit" value="Submit">
        
</form>
<?php include 'bottom.php'; ?>