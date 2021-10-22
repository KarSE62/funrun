<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/menu.css">
</head>
<body>
<?php $session = session(); ?>
    <h1>FUN RUN GAME</h1>
    <div class="conrainer">
        <div class="row">
        <h1><?php echo " สวัสดีคุณ : " . $session->get('name') ?></h1>
        <div class="text-center">
        <a href="/regisfunrun" class="btn btn-primary">ลงทะเบียนประเภทการแข่งขัน</a><br>
        <a href="/register" class="btn btn-primary">ตรวจสอบประเภทการแข่งขัน</a><br>
        <a href="/logout" class="btn btn-danger">ออกจากระบบ</a>
        </div>
        </div>
    </div>
</body>
</html>