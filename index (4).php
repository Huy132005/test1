<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background:url('img/hh.jpg') no-repeat;
        background-size: cover;
        background-position: center;


    }
    .content{
        width: 420px;
        background: transparent;
        border: 2px solid white;
        color: #fff;
        border-radius: 10px;
        padding: 30px 40px;
    }
    .content h3{
        font-size: 30px;
        text-align: center;
    }
    .content .input-box{
        position: relative;
        width: 100%;
        height: 50px;
     
        margin: 30px 0;
    }
    .input-box input{
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid white;
        border-radius: 40px;
        font-size:16px;
        color: #fff;
        padding: 20px 45px 20px 20px;
    }
    .input-box input::placeholder{
        color:#fff;
    }
    .input-box i{
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
    }
    .content .remember-forgot{
        display: flex;
        justify-content: space-between;
        font-size: 14.5px;
        margin: -15px 0 15px;
    }
    .remember-forgot label input{
        accent-color: #fff;
        margin-right: 3px;

    }
    .remember-forgot a{
        color: #fff;
        text-decoration: none;
    }
    .remember-forgot a:hover{
        text-decoration: underline;
    }
    .content .btn input{
        width: 100%;
        height: 45px;
        background: #fff;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px black;
        cursor: pointer;
        font-size: 16px;
        color: #333;
        font-weight: 600;
    }
    .content .register-link{
        font-size: 14.5px;
        text-align: center;
       margin: 20px 0 15px;

    }
    .register-link p a{
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }
    .register-link p a:hover{
        text-decoration: underline;
    }
    </style>
</head>
<body>
    <form action="" method="POST">
        <div class="content">
        <h3>Thông tin đăng nhập</h3>
        
        <div class="input-box">
             <input type="text" name="user" placeholder="Username" required>
             <i class='bx bxs-user'></i>
            </div>
        <div class="input-box">
            <input type="password" name="pass" placeholder="Password" required>
            <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label for=""><input type="checkbox">remember me</label>
                <a href="#">Forgot password?</a>
            </div>
        <div class="btn">
            <input type="submit" value="Login" name="btn_gui">
      </div>
      <div class="register-link">
        <p>Don't have an account? <a href="#">Register</a></p>
      </div>
      </div>
    </form>
    <?php
    session_start();
    if(isset($_POST['btn_gui'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if($user == 'client' && $pass == '123456'){
            $_SESSION['user'] = $user;
            header("location:index1.html");
            
        }else if($user =='admin' && $pass =='123456'){
            $_SESSION['user'] = $user;
            header("location:admin/index.php");
         } 
        else{
            echo"Đăng nhập không thành công";
        }
    }
    ?>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>