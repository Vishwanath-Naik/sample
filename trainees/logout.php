
<?php
session_start();
session_unset();
session_destroy();
echo '<script>alert("You are Logged out")
window.location.href="index.html"
        </script>';
?>