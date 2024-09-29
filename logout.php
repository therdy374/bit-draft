<!-- Add SweetAlert CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
session_start();
include 'config/function.php';

if (isset($_SESSION['loggedIn'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session cookie if it exists
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    // Destroy the session
    session_destroy();
    // Notify the user
    echo "<script>alert('Thank you for visiting!');</script>";
    // Redirect to login page
    echo "<script>window.location.href = 'login';</script>";
    

    // echo
    // "<script>
    //         Swal.fire({
    //             icon: 'warning',
    //             title: 'Thank you for visiting our site',
    //             text: 'Refer to your friends!'
    //         }).then((result) => {
    //             if (result.isConfirmed) {
    //                 window.location.href = 'Login';
    //             }
    //         });
    //     </script>
    //     ";

    
}
?>