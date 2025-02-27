<?php

header( "Access-Control-Allow-Origin: *" );

http_response_code( 200 );

require "db_connection.php";

$sql = (
"
    SELECT COUNT( * )
    AS count
    FROM messages;
" );

$result = $db_connection->query( $sql );

if ( $result === true ) {
    while ( $row = $result->fetch_array() ) {
        echo htmlspecialchars( $row[ "count" ] );
    }
}

?>
