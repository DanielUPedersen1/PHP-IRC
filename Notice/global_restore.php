<?php

//:MYUSERNAME PRIVMSG SERV    :COMMAND PARAMS
//$com[0]     $com[1] $com[2] $com[3]  $com[4]

restore_backup();

socket_write_($socket, ":Global!services@PHPIrc NOTICE {$com[1]} :Backup Restored.\r\n");

?>