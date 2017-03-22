# Spotify Login Class [Unofficial API's]
Unofficial API's
Spotify Login and Subscription checking, no API Key required.

This Class requires Curl extension.

With this Class, you could check if a given account works, and get its subscription.

For Example:

```php
//include the class 
include('class.spotify.php');
$spotify = new spotify();
echo $spotify->check("yourUsername", "yourPassword");

```

If you gave invalid credentials you'll get an output like:
{"status":"fail","error":"errorInvalidCredentials"}

If you gave valid credentials you'll get an output like this:
{"status":"success","error":"none","subscription":"PREMIUM"}

In this case, the user has a PREMIUM subscription, if the users hasn't a premium subscription, you'll get an output like this:
{"status":"success","error":"none","subscription":"FREE"}

