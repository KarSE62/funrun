<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียนFun-Run</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/register.css">
</head>

<body>

    <div class="container">
        <h1>ลงทะเบียนFun-Run</h1>
    </div>
    <div class="container">
        <form action="/register/save" method="POST" class="signin-form">
        
            <div class="row" style="justify-content: center;">
                <div class="col-md-3">
                    <label>เลขบัตรประชาชน</label>
                    <input type="text" name="id_card" class="form-control" id="id_card" value="">
                </div>
                <div class="col-md-3">
                    <label>ชื่อ</label>
                    <input type="text" name="name" class="form-control" id="name" value="">
                </div>
                
            </div>
            <div class="row" style="justify-content: center;">
                <div class="col-md-3">
                    <label>อายุ</label>
                    <input type="text" name="age" class="form-control" id="age" value="">
                </div>
                <div class="col-md-3">
                    <label>รหัสผ่าน</label>
                    <input type="password" name="password" class="form-control" id="password" value="">
                </div>
                
            </div>
            <div class="row" style="justify-content: center;">
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="">
                </div>
            </div>

            <div class="button">
                <button type="submit" class=" btn btn-primary" onclick="register()">
                    บันทึกข้อมูล
                </button>
                <a href="/" class="btn btn-primary">กลับหน้าหลัก</a>
            </div>
        </form>

    </div>

</body>

</html>