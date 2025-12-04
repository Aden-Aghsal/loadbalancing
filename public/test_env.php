<?php
echo "DB_HOST: " . env('DB_HOST') . "<br>";
echo "getenv DB_HOST: " . getenv('DB_HOST') . "<br>";
echo "config DB_HOST: " . config('database.connections.mysql.host') . "<br>";

