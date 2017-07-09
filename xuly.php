<?
	header('Content-Type: text/html; charset = utf-8');
	if (!empty($_POST['mb_submit'])){
		$errors = array();
		$username = addslashes($_POST['mb_user']);
		$pass = md5($_POST['mb_pass']);
		$email = addslashes($_POST['mb_email']);
		$phone = addslashes($_POST['mb_phone']);
		$lever = (int)$_POST['mb_level'];

		if (empty($username)){
			$errors['mb_user'] = 'INVALID';
		}
		if (empty($_POST['mb_pass'])){
			$errors['mb_pass'] = 'INVALID';
		}
		if (empty($_POST['mb_email'])){
			$errors['mb_email'] = 'INVALID';
		}
		if (empty($_POST['mb_phone'])){
			$errors['mb_phone'] = 'INVALID';
		}
		if (empty($errors)){
			$conn = mysqli_connect('localhost', 'root', '', 'demo') or die('Can not connect to database');
			mysqli_set_charset('utf8');
			$sql = "SELECT * FROM member WHERE username = '$username' OR password = '$email'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0){
				echo '<script language="javascript">alert("Thông tin đăng nhập đã tồn tại."); window.location="dangky.php";</script>';
				die();
			}
			else{
				$sql = "INSERT INTO member(username, password, email, phone, level) VALUES ('$username', '$pass', '$email', '$phone', '$level') ";

				if (mysqli_query($conn, $sql)){
           				echo '<script language="javascript">alert("Đăng ký thành công"); window.location="dangky.php";</script>';
        				}
        				else {
            				echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="dangky.php";</script>';
        				}
			}
			mysqli_close($conn);
		}
	}
?>
