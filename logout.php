<?php
session_start();
session_destroy();
header( 'Location: http://localhost:8021/new_quiz/index.php' ) ;
?>