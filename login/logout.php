
<?php 
    session_start();
    session_destroy();
    echo "<script> alert('ออกจากระบบสำเร็จ!'); </script>";
    header( 'refresh:0.5;url=http://localhost/zocute/login/login.php' );
    exit(0);