<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
<div class="navbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/register">ลงทะเบียน</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
        <div align ='center'>
        <?php if (session()->getFlashdata('msg')) : ?>
              <div class="alert alert-danger" style="color:red; background-color:white"><?= session()->getFlashdata('msg'); ?></div>
            <?php endif; ?>
        </div>
    <form class="box" action="/auth" method="POST" >
       <h1>Login</h1>
        <input type="text" name="id_card" placeholder="เลขบัตรประชาชน" value="<?= set_value('StudentID');?>">
        <input type="password" name="password" placeholder="รหัสผ่าน" value="<?= set_value('Password');?>">
        <button type="submit" >เข้าสู่ระบบ</button>
    </form>
    
</body>
</html>