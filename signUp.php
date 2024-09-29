<!-- Header -->
<?php 
include "includes/header.php" ?>

<!-- HTML Content -->
<div class="subRouteContent">
    <div class="wrapper">
        <div class="sub-contents-layout">
            <div class="frameWrapper">
                <div class="_layer_background"></div>
                <div class="invest_wrap">
                    <!-- Main content starts -->
                    <form method="post" action="" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">
                        <!-- Form Fields -->
                        <section class="joinContainer">
                            <h2>SIGN UP</h2>
                            <p>회원가입을 위한 정보를 입력해주세요.</p>

                            <div>
                                <input name="username" type="text" maxlength="20" placeholder="사용하실 아이디를 입력하세요. (4자리 이상)" autofill="False">

                                <span id="cpContent_SomeFieldValidator" class="warning-label" style="color:Red;font-family:Verdana;display:none;">한글아이디는 사용할 수 없습니다.</span>
                                <p>가입 후에는 사용자 아이디를 변경할 수 없습니다.<br>아이디 분실 시 자산 손실의 위험이 있으니 주의하시기 바랍니다.</p>

                                <input name="user_password" type="password" maxlength="30" id="user_password" placeholder="비밀번호 (6자리 이상)">
                                <input name="con_password" type="password" id="con_password" placeholder="비밀번호 확인">
                                <span id="cpContent_comparePasswords" style="color:Red;font-family:Verdana;display:none;">비밀번호가 일치하지 않습니다.</span>

                                <input name="realname" type="text" maxlength="30" id="realname" placeholder="이름(실명)을 입력하세요.">
                                <input name="contact" type="text" maxlength="15" id="contact" placeholder="전화번호를 입력하세요. (숫자만 입력 가능)">
                                <input name="bank_name" type="text" maxlength="20" id="bank_name" placeholder="은행명">
                                <input name="name_depositor" type="text" maxlength="20" id="name_depositor" placeholder="예금주">
                                <input name="account_number" type="text" maxlength="30" id="account_number" placeholder="계좌번호 (숫자만 입력 가능)" onkeypress="if ((event.keyCode < 48) || (event.keyCode > 57))  event.returnValue=false;">
                                <input name="referal_code" type="text" maxlength="20" id="referal_code" placeholder="가입코드를 입력하세요">
                                <input name="is_ban" type="hidden" maxlength="20" value="0" id="is_ban">
                            </div>

                            <input type="submit" name="btn_register" value="회원가입" id="btn_register" class="btn_register">
                            <p>이미 비트프로 회원이시면 <a href="Login">로그인</a>해주세요.</p>
                        </section>

                        <!-- JavaScript Validators -->
                        <script type="text/javascript">
                            var Page_Validators = new Array(document.getElementById("cpContent_SomeFieldValidator"), document.getElementById("cpContent_comparePasswords"));
                        </script>
                    </form>
                    <!-- Main content ends -->

                    <?php
                    require 'config/function.php';


                    if (isset($_POST['btn_register'])) {

                        // Sanitize user input
                        $userid = mysqli_real_escape_string($conn, validate($_POST['username']));
                        $password = validate($_POST['user_password']);
                        $con_password = validate($_POST['con_password']);

                        $name = mysqli_real_escape_string($conn, validate($_POST['realname']));
                        $contact = mysqli_real_escape_string($conn, validate($_POST['contact']));
                        $bank = mysqli_real_escape_string($conn, validate($_POST['bank_name']));
                        $name_depositor = mysqli_real_escape_string($conn, validate($_POST['name_depositor']));
                        $account_number = mysqli_real_escape_string($conn, validate($_POST['account_number']));
                        $referal_code = mysqli_real_escape_string($conn, validate($_POST['referal_code']));

                        $is_ban = 0;

                        // Check for empty fields
                        if (empty($userid) || empty($password) || empty($con_password) || empty($name) || empty($contact) || empty($bank) || empty($name_depositor) || empty($account_number) || empty($referal_code)) {
                            echo "<script>
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'Please fill all fields!.',
                                                text: 'Please fill all fields!.'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    window.location.href = 'signUp';
                                                }
                                            });
                                        </script>";
                                exit();
                        }

                        // Validate for Korean characters in the username
                        $koreanPattern = '/[\x{1100}-\x{11FF}\x{3130}-\x{318F}\x{AC00}-\x{D7AF}]/u'; // Hangul syllables and Hangul Jamo
                        if (preg_match($koreanPattern, $userid)) {
                            echo "<script>
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'You must try Korean Character.',
                                                text: 'Please try another one!'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    window.location.href = 'signUp';
                                                }
                                            });
                                        </script>";
                                exit();
                        }

                        // Check if passwords match
                        if ($password === $con_password) {
                            $minLength = 4;
                            $maxLength = 13;

                            // Validate username length and content
                            if (strlen($userid) < $minLength || strlen($userid) > $maxLength || is_numeric($userid)) {
                                echo "<script>
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'You Must enter 4 to 6 Characters.',
                                                text: 'Please try another one!'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    window.location.href = 'signUp';
                                                }
                                            });
                                        </script>";
                                exit();
                            } else {
                                // Check if the username already exists
                                $check_userid = "SELECT * FROM users WHERE username = '$userid'";
                                $check_result = mysqli_query($conn, $check_userid);

                                if (mysqli_num_rows($check_result) > 0) {
                                    echo "<script>
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'Opps! Username/UserID is already taken.',
                                                text: 'Please get another one!'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    window.location.href = 'signUp';
                                                }
                                            });
                                        </script>";
                                } else {
                                    // Hash the password
                                    $bycrypt_password = password_hash($password, PASSWORD_BCRYPT);

                                    // Insert user data into the database
                                    $query = "INSERT INTO `users`(`username`, `user_password`, `realname`, `contact`, `bank_name`, `name_depositor`, `account_number`, `referal_code`, `is_ban`) 
                                    VALUES ('$userid', '$bycrypt_password', '$name', '$contact', '$bank', '$name_depositor', '$account_number', '$referal_code', '$is_ban')";

                                    $query_run = mysqli_query($conn, $query);

                                    if ($query_run) {
                                        echo "<script>
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Congratulations! You may now login',
                                                    text: 'Please use your credentials correctly!.'
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        window.location.href = 'login';
                                                    }
                                                });
                                            </script>";
                                    } else {
                                        echo "<script>
                                                Swal.fire({
                                                    icon: 'warning',
                                                    title: 'Opps! Something went wrong!',
                                                    text: 'Please check your Info!.'
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        window.location.href = 'signUp';
                                                    }
                                                });
                                            </script>";
                                    }
                                }
                            }
                        } else {
                            echo "<script>
                                    Swal.fire({
                                        icon: 'danger',
                                        title: 'Opps! Please Fill out out all fields!',
                                        text: 'POpps! Please Fill out out all fields!.'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href = 'login';
                                        }
                                    });
                                </script>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="positionCheck"></div>
<?php include "includes/footer.php"; ?>