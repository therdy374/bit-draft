<!-- Header -->
<?php 
include "includes/header.php";


if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {

    // echo "<script>alert('Naka login ka pa');</script>";
    // echo "<script>window.location.href='index.php';</script>";

    echo
    "<script>
            Swal.fire({
                icon: 'warning',
                title: 'Opps! You are in the session!',
                text: 'Oops! Please logout first!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'index';
                }
            });
        </script>
        ";

    exit();
}
?>

<form method="post" action="" id="form1">
    <div class="aspNetHidden">
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
            value="/wEPDwUKMTkxMTYzMTIyOQ9kFgJmD2QWCgIBDxYCHgRUZXh0BeIBDQogICAgICAgIDxsaT48YSBocmVmPSIvVHJhZGluZy5hc3B4Ij7qsbDrnpjshow8L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvQmFsYW5jZS5hc3B4Ij7snoXstpzquIg8L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvQm9hcmQvTGlzdC5hc3B4P2lkPW5vdGljZSI+6rO17KeA7IKs7ZWtPC9hPjwvbGk+DQogICAgICAgIGQCAg8WAh8ABVc8bGk+PGEgaHJlZj0iL0xvZ2luLmFzcHgiPuuhnOq3uOyduDwvYT48L2xpPjxsaT48YSBocmVmPSIvU2lnblVwLmFzcHgiPu2ajOybkOqwgOyehTwvYT5kAgMPFgIfAAVXPGxpPjxhIGhyZWY9Ii9Mb2dpbi5hc3B4Ij7roZzqt7jsnbg8L2E+PC9saT48bGk+PGEgaHJlZj0iL1NpZ25VcC5hc3B4Ij7tmozsm5DqsIDsnoU8L2E+ZAIEDxYCHwBlZAIFDxYCHwAF4gENCiAgICAgICAgPGxpPjxhIGhyZWY9Ii9UcmFkaW5nLmFzcHgiPuqxsOuemOyGjDwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9CYWxhbmNlLmFzcHgiPuyehey2nOq4iDwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9Cb2FyZC9MaXN0LmFzcHg/aWQ9bm90aWNlIj7qs7Xsp4Dsgqztla08L2E+PC9saT4NCiAgICAgICAgZGTT1s1Mg2G4juhKCfgclhEnR6Zqy2DUCY8LhUME3TxA7Q==">
    </div>

    <div class="aspNetHidden">

        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="C2EE9ABB">
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
            value="/wEdAAQeeOyum5l02jXHWjDM6ExfdcqziCVoMOCpBmEcloBnomTaiMw7O7nfZoaBJ32VVoSDfspwq3R7+k4CM0vQlo+nRxVlGUptcl+ZsWhyQg8v+/gQEfF5siEYMf4vPFyZR7o=">
    </div>

    <div class="subRouteContent">
        <div class="wrapper">
            <div class="sub-contents-layout">
                <div class="frameWrapper">
                    <div class="_layer_background"></div>
                    <div class="invest_wrap">
                        <!-- 메인컨텐츠 시작 -->

                        <section class="loginContainer">
                            <h2>LOG IN</h2>
                            <p>거래에 참여하려면 로그인하십시오.</p>

                            <div>
                                <input name="username" type="text" id="cpContent_txtUserId"
                                    placeholder="아이디를 입력하세요.">
                                <input name="user_password" type="password" id="cpContent_txtPasswd"
                                    placeholder="비밀번호 입력하세요">
                            </div>

                            <input type="submit" name="login_submit" value="로그인"
                                id="cpContent_btnRegister" class="btn_login">

                            <ul>
                                <li><a href="SignUp.html">회원가입</a></li>
                                <li><a href="https://open.kakao.com/o/s7IwKFMe" target="_blank">아이디 찾기</a></li>
                                <li><a href="https://open.kakao.com/o/s7IwKFMe" target="_blank">비밀번호 재설정</a></li>
                            </ul>
                        </section>
                        <!-- 메인컨텐츠 끝 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
require 'config/function.php';


if (isset($_POST['login_submit'])) {

    if (!empty(trim($_POST['username'])) && !empty(trim($_POST['user_password']))) {

        $user_id = validate($_POST['username']);
        $password = validate($_POST['user_password']);

        $login_query = "SELECT * FROM users WHERE username=? LIMIT 1";
        $stmt = mysqli_prepare($conn, $login_query);
        mysqli_stmt_bind_param($stmt, 's', $user_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $hashpassword = $row['user_password'];


            if (!password_verify($password, $hashpassword)) {

                echo "<script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Opps! Email or password invalid.',
                    text: 'password must be between 4 and 13 characters and cannot be numeric only.'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'Login';
                    }
                });
                </script>";
                exit(0);
            }

            // if ($row['is_ban'] == 1) {

            //     redirect('login', 'Your account has been banned. Please contact your administrator.');
            //     exit(0);
            // }

            if ($row['is_ban'] == "0") {

                if (mysqli_stmt_execute($stmt)) {
                    // Set session variables
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['loggedInUser'] = [
                        'id ' => $row['id'],
                        'username' => $row['username'],
                        'user_id' => $row['user_id'],
                        'user_password' => $row['user_password'],
                        'realname' => $row['realname'],
                        'contact' => $row['contact'],
                        'bank_name' => $row['bank_name'],
                        'name_depositor' => $row['name_depositor'],
                        'user_credit' => $row['user_credit'],
                        'referal_code' => $row['referal_code'],
                        'is_ban' => $row['is_ban'],

                    ];

                    echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Welcome Users.',
                            text: 'Explore the page.'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'Trading';
                            }
                        });
                        </script>";

                    exit(0);
                } else {
                    echo "<script>
                    Swal.fire({
                        icon: 'warning',
                        title: 'Opps! Email and Password not existssssss',
                        text: 'Please enter your email and password correctly.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'SignUp';
                        }
                    });
                </script>";

                    exit(0);
                }
            } else {

                echo "<script>
                    Swal.fire({
                        icon: 'warning',
                        title: 'Opps! Email and Password not exist.',
                        text: 'Email and Password not exist.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'Login';
                        }
                    });
                    </script>";

                exit(0);
            }
        } else {

            echo "<script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Opps! Your Account is Banned',
                    text: 'Please contact your administrator.'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'Login';
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
                        window.location.href = 'SignUp';
                    }
                });
            </script>";
        exit(0);
    }
}


?>

<div id="positionCheck"></div>

<?php include "includes/footer.php"; ?>