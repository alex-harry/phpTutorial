<?php

echo "Welcome " . $_POST['username']; // print welcome with the username
setCookie('username', $_POST['username']); // the function setcookie with the name username and the value that the user entered
header( "refresh:3;url=displayCookie.php" ); // redirect the user after 3 seconds to the page displayCookie.php

echo "In the page ' displayCookie ' the username is " . $_COOKIE['username']; // print the value of the cookie 'username'

setCookie('username', $_POST['username']); // setcookie to change the username of the user passed from the form of displayCookie.php

echo "You have changed your username to : " . $_COOKIE['username']; // print the new username ( new cookie )

// Two methods

//setcookie('username'); // name without the other parameters

setCookie('username', 'Alex', time() - 3600 ); // change the expiry date less then the creation date

echo "After deletion the username is " . $_COOKIE['username']; // print the new username ( new cookie )

?>