<?php

require 'config/function.php';


if (isset($_POST['btn_register'])) {

    $userid = validate($_POST['username']);
    $password = validate($_POST['user_password']);
    $con_password = validate($_POST['con_password']);

    $name = validate($_POST['realname']);
    $contact = validate($_POST['contact']);

    $bank = validate($_POST['bank_name']);
    $name_depositor = validate($_POST['name_depositor']);
    $account_number = validate($_POST['account_number']);
    $referal_code = validate($_POST['referal_code']);

    $is_ban = 0;


    if (empty($userid) || empty($password) || empty($con_password) || empty($name) || empty($con_password) || empty($name) || empty($contact) || empty($bank) || empty($name_depositor) || empty($account_number) || empty($referal_code)) {
        $_SESSION['status'] = "Please fill the fields.";
        header("Location: signUp");
        exit(); // Exit to prevent further execution
    }

    $koreanPattern = '/[\x{1100}-\x{11FF}\x{3130}-\x{318F}\x{AC00}-\x{D7AF}]/u'; // Hangul syllables and Hangul Jamo

    // Check if the input contains Korean characters
    if (preg_match($koreanPattern, $userid)) {
        $_SESSION['status'] = "아이디는 영문,숫자 4자 이상가능합니다.\\n 숫자만은 불가합니다.";
        header("Location: signUp.php");
        exit();
    }


    if ($password == $con_password) {
        $minLength = 4;
        $maxLength = 13;

        if (strlen($userid) < $minLength || strlen($userid) > $maxLength || is_numeric($userid)) {

            $_SESSION['status'] = "아이디는 영문,숫자 4자 이상가능합니다.\\n 숫자만은 불가합니다.";
            header("Location: signUp.php");
            exit();
        } else {

            $check_userid = "SELECT * FROM users WHERE username = '$userid'";
            $check_result = mysqli_query($conn, $check_userid);

            if (mysqli_num_rows($check_result) > 0) {

                $_SESSION['status'] = "이미 사용중인 아이디입니다.";
                header("Location: signUp.php");
            } else {

                $bycrypt_password = password_hash($password, PASSWORD_BCRYPT);

                $query = "INSERT INTO `users`(`username`, `user_password`, `realname`, `contact`, `bank_name`, `name_depositor`, `account_number`, `referal_code`, `is_ban`) VALUES ('$userid','$password','$name','$contact','$bank','$name_depositor','$referal_code','$is_ban')";

                $query_run = mysqli_query($conn, $query);

                if ($query_run) {

                    echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Opps! Email and Password not exist',
                        text: 'Please enter your email and password correctly.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'register';
                        }
                    });
                </script>";
                } else {
                    $_SESSION['status'] = "Registration failed";
                    header("Location: signUp.php");
                }
            }
        }
    } else {
        $_SESSION['status'] = "암호가 일치하지 않습니다! ss ";
        header("Location: signUp.php");
    }
}
