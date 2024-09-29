<?php


if (isset($_POST['login_submit'])) {
	
    if (!empty(trim($_POST['customer_email'])) && !empty(trim($_POST['customer_pass']))) {

        $user_id = validate($_POST['customer_email']);
        $password = validate($_POST['customer_pass']);

        $login_query = "SELECT * FROM customers WHERE customer_email=? LIMIT 1";
        $stmt = mysqli_prepare($db, $login_query);
        mysqli_stmt_bind_param($stmt, 's', $user_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $hashpassword = $row['customer_pass'];

        
            if (!password_verify($password, $hashpassword)) {

                // $ip_address = $_SERVER['REMOTE_ADDR'];
                // $user_agent = $_SERVER['HTTP_USER_AGENT'];
                // // $device_use = getDeviceType($user_agent);
                // $date_logs = date('Y-m-d H:i:s');
                // $status = 0; 
                // $verify_token = null; 
                
                // $logs_prob = '암호가 잘못되었습니다';

                // $insert_wrong = mysqli_query($db, "INSERT INTO `logs_history_failed` (`userid`,`ip_address`, `device_use`, `verify_token`, `status`, `logs_prob`, `date_logs`)
                //  VALUES ('$user_id ','$ip_address','$device_use','$verify_token','$status','$logs_prob','$date_logs')");

                echo "<script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Opps! Email or password invalid.',
                    text: 'password must be between 4 and 13 characters and cannot be numeric only.'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'login';
                    }
                });
                </script>";
                exit(0);
            }

            // if ($row['is_ban'] == 1) {

            //     redirect('login', 'Your account has been banned. Please contact your administrator.');
            //     exit(0);
            // }

            if ($row['verify_status'] == "1") {

                // session_regenerate_id();
                // $verify_token = session_id();

                // Insert login logs
                // $ip_address = $_SERVER['REMOTE_ADDR'];
                // $user_agent = $_SERVER['HTTP_USER_AGENT'];
                // $device_use = getDeviceType($user_agent);
                // $date_logs = date('Y-m-d H:i:s');
                // $status = 1;

                // $user_logs_query = "INSERT INTO login_logs (userid, user_id, ip_address, device_use, verify_token, status, date_logs) VALUES (?, ?, ?, ?, ?, ?, ?)";
                // $stmt = mysqli_prepare($db, $user_logs_query);
                // mysqli_stmt_bind_param($stmt, 'sisssis', $user_id, $row['id'], $ip_address, $device_use, $verify_token, $status, $date_logs);

                if (mysqli_stmt_execute($stmt)) {
                    // Set session variables
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['loggedInUser'] = [
                        'customer_id ' => $row['customer_id'],
                        'customer_name' => $row['customer_name'],
                        'customer_email' => $row['customer_email'],
                        'customer_pass' => $row['customer_pass'],
                        'customer_country' => $row['customer_country'],
                        'customer_city' => $row['customer_city'],
                        'customer_contact' => $row['customer_contact'],
                        'customer_address' => $row['customer_address'],
                        'customer_image' => $row['customer_image'],
                        'verify_status' => $row['verify_status'],
                        
                    ];

                    // Updating database for new session id
                    // $query = "UPDATE users SET verify_token = ? WHERE id = ?";
                    // $stmt = mysqli_prepare($dbn, $query);
                    // mysqli_stmt_bind_param($stmt, 'si', $verify_token, $row['id']);
                    // mysqli_stmt_execute($stmt);

                
                    echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Welcome Users.',
                            text: 'Explore the page.'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'checkout';
                            }
                        });
                        </script>";
                    // redirect('index', '로그인 성공');
                    exit(0);
                } else {
                    echo "<script>
                    Swal.fire({
                        icon: 'warning',
                        title: 'Opps! Email and Password not exist',
                        text: 'Please enter your email and password correctly.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'register';
                        }
                    });
                </script>";
                    // redirect('login', '로그인 시도를 기록하는 중 오류가 발생했습니다. 다시 시도하십시오.');
                    exit(0);
                }
            } else {
                // $ip_address = $_SERVER['REMOTE_ADDR'];
                // $user_agent = $_SERVER['HTTP_USER_AGENT'];
                // $device_use = getDeviceType($user_agent);
                // $date_logs = date('Y-m-d H:i:s');
                // $status = 0;
                // $verify_token = null; 
                // $logs_prob = '계정이 아직 승인되지 않았습니다! 관리자에게 문의하십시오!';

                // $insert_wrong = mysqli_query($db, "INSERT INTO `logs_history_failed` (`userid`,`ip_address`, `device_use`, `verify_token`, `status`, `logs_prob`, `date_logs`)
                //  VALUES ('$user_id ','$ip_address','$device_use','$verify_token','$status','$logs_prob','$date_logs')");

                // redirect('login.php', '계정이 아직 승인되지 않았습니다!\\n관리자에게 문의하십시오!');
                echo "<script>
                    Swal.fire({
                        icon: 'warning',
                        title: 'Opps! Email and Password not exist.',
                        text: 'Email and Password not exist.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'login';
                        }
                    });
                    </script>";
                
                exit(0);
            }
        } else {

            // $ip_address = $_SERVER['REMOTE_ADDR'];
            // $user_agent = $_SERVER['HTTP_USER_AGENT'];
            // $device_use = getDeviceType($user_agent);
            // $date_logs = date('Y-m-d H:i:s');
            // $status = 0; 
            // $verify_token = null; 

            // $logs_prob = '잘못된 사용자 ID';

            // $insert_wrong = mysqli_query($db, "INSERT INTO `logs_history_failed` (`userid`,`ip_address`, `device_use`, `verify_token`, `status`, `logs_prob`, `date_logs`)
            //      VALUES ('$user_id ','$ip_address','$device_use','$verify_token','$status','$logs_prob','$date_logs')");

            // redirect('login', '잘못된 사용자 ID');
            echo "<script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Opps! Your Account is Banned',
                    text: 'Please contact your administrator.'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'login';
                    }
                });
            </script>";
            exit(0);
        }
    } else {
        echo "<script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Opps! Email and Password not exist',
                    text: 'Please enter your email and password correctly.'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'register';
                    }
                });
            </script>";
        exit(0);
    }
}


?>