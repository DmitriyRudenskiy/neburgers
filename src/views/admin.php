<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Список пользователей</h2>

            <table class="table table-striped">
                <tbody>
                <?php foreach ($users as $value) : ?>
                <tr>
                    <td><?= $value->id ?></td>
                    <td><?= $value->email ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <h2>Список заказов</h2>

            <table class="table table-striped">
                <tbody>
                <?php foreach ($orders as $value) : ?>
                    <tr>
                        <td><?= $value->id ?></td>
                        <td><?= $value->name ?></td>
                        <td><?= $value->phone ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>