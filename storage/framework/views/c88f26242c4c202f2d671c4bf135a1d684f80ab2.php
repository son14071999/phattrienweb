<html>

<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/cssLogin.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Sign in</title>
</head>
<body>
<div class="main">
    <img class="image-icon" src="<?php echo e(asset('images/icon_login.png')); ?>"><br>

    <form class="form1" method="post" action="<?php echo e(route('postLogin')); ?>">
        <?php if(Session::has('thongbao')): ?>
            <p style="color: red" align="center"><?php echo e(Session::get('thongbao')); ?></p>
        <?php endif; ?>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input class="un" type="text" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
        <input class="pass" type="password" name="password" placeholder="Password"><br><br>
        <button class="submit" align="center" type="submit">Đăng nhập</button>
        <a href="<?php echo e(route('forgetpass')); ?>"><h4 style="color: red" align="center"><i><u>Quên mật khẩu?</u></i></h4></a>

    </form>
</div>

</body>

</html>
<?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/login.blade.php ENDPATH**/ ?>