<?php
 $pyscript = 'C:\\xampp\\htdocs\\new\\CS455\\CS455\\process.py';
 $pyscript2 = 'C:\\xampp\\htdocs\\new\\CS455\\CS455\\process2.py';
$python = 'C:\\Python27\\python.exe';
//$filePath = 'C:\\wamp\\www\\testing\\uploads\\thumbs\\10-05-2012-523.jpeg'


exec('$python $pyscript', $output, $return );
exec('$python $pyscript2', $output, $return );?>