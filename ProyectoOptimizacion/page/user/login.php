<?php

if ( !empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        if ( $_POST['username'] != '' && $_POST['password'] != '' ) {
            include 'db.php';

            $id_admin = null;
            $sql1 = 'select * from user_admin where (username=\'$_POST[username]\' or email=\'$_POST[username]\') and password=\'$_POST[password]\' ';
            $query = $MySQLiconn->query( $sql1 );
            while ( $r = $query->fetch_array() ) {
                $id_admin = $r['id_admin'];
                break;
            }
            if ( $id_admin == null ) {
                header("Location:../../index.php");
                
            } else {
                session_start();

                header("Location:index.php");
                

            }
        }
    }
}

?>