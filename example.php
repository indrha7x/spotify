<?php
//Usage Example

//include the class 
include('class.spotify.php');

$spotify = new spotify();
echo $spotify->check("yourUsername", "yourPassword");
//you will get a JSON output
