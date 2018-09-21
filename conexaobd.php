<?php
// Conecta-se com o MySQL
$host = getenv("OPENSHIFT_MYSQL_DB_HOST");
$username = getenv("OPENSHIFT_MYSQL_DB_USERNAME");
$port = getenv("OPENSHIFT_MYSQL_DB_PORT");
$password = getenv("OPENSHIFT_MYSQL_DB_PASSWORD");
$dbname = "tesouro";


?>