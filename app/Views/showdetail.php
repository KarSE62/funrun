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
        <h1>คุณได้ทำการลงทะเบียนแข่งขัน</h1>
        <div class="container">
    <div class="row">
    <div class="col-sm">
      <h2>หมายเลขID : <?php echo $ID ?></h2>
    </div>
    <div class="col-sm">
      <h2>ประเภทการแข่งขัน : <?php echo $category_name?></h2>
    </div>
    <div class="col-sm">
      <h2>ระยะทาง : <?php echo $length ?></h2>
    </div>
  </div>

      <h2>ค่าสมัคร : <?php echo $price ?></h2>
    

</div>   
        

        <a href="/menu" class="btn btn-danger">กลับเมนูหลัก</a>
        </div>
        </div>
    </div>
</body>
</html>