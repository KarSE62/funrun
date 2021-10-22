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
    <h1>FUN RUN GAME</h1>
    <div class="conrainer">
        <div class="row">
        <h1>รายชื่อผู้เข้าแข่งขัน FUN RUN</h1>
        <div class="row justify-content-md-center">
        <!-- data table ใช้เเสดงข้อมูลเเละเเบ่งหน้าให้อัตโนมัติ -->
        <div class="col-sm-8">
            <table class="table table-striped table-bordered table-hover table-responsive-sm" id="student-list">
                <thead class="thead-dark">
                    <tr style="text-align: center;">
                        <th>ชื่อ</th>
                        <th>อายุ</th>
                        <th>อีเมล</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($student) : ?>
                        <?php foreach ($student as $user) : ?>
                            <tr style="text-align: center;">
                
                                <td style="background-color:white;color : black"><?php echo $user['name']; ?></td>
                                <td style="background-color:white;color : black"><?php echo $user['age']; ?></td>
                                <td style="background-color:white;color : black"><?php echo $user['email']; ?></td>


                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        
        </div>
        </div>
        <a href="/" class="btn btn-danger">กลับหน้าหลัก</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#student-list').DataTable();
            });
        </script>
        <script src="/main.js"></script>
</body>
</html>