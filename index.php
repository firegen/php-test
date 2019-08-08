<?php
#Variables
$request = $_SERVER['REQUEST_URI'];


echo '<ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</li>
      </ul>
      <hr/>';

# Router
switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}

?>
