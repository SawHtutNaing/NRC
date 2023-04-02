<?php 

$randPort = rand(8000, 9999);

system(" php -S localhost:$randPort");