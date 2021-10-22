<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียนFun-Run</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/regisfunrun.css">
</head>

<body>
<?php $session = session(); ?>
    <div class="container">
        <h1>ลงทะเบียนFun-Run</h1>
    </div>
    <div class="container mt-5">
        <form action="/saveregis" method="POST" class="signin-form">
        <div class="form">
            <div class="row" style="justify-content: center;">
                <div class="col-md-3">
                    <label>เลขบัตรประชาชน</label>
                    <input type="text" name="member" class="form-control" id="member" value="<?php echo  $session->get('id_card') ?>">
                    <label>ID</label>
                    <input type="text" name="ID" class="form-control" id="ID" value="<?= set_value('ID'); ?>">
                    <div class="button">
                <button type="submit" class=" btn btn-primary" onclick="susccess()">
                    บันทึกข้อมูล
                </button>
                <a href="/menu" class="btn btn-danger">กลับเมนูหลัก</a>
            </div>
                </div>
                <div class="col-md-3">
                  <input type="radio" id="category_run" name="category_run" value="1"> <label for="FUN RUN">FUN RUN</label>
                  <input type="radio" id="category_run" name="category_run" value="2"> <label for="MINI MARATHON">MINI MARATHON</label>
                  <input type="radio" id="category_run" name="category_run" value="3"> <label for="VIP">VIP</label>
                  <input type="radio" id="category_run" name="category_run" value="4"> <label for="SUPER VIP">SUPER VIP</label>
                </div>
                
            </div>
            </div>  

            
        </form>

    </div>
<script>
function susccess() {
  alert("ลงทะเบียนการแข่งขันสำเร็จ");
}
</script>
</body>

</html>