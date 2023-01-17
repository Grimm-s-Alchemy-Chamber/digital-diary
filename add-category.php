<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link rel="stylesheet" href="./css/header.css">

</head>

<body>
    <header>
        <?php include_once('includes/header.html') ?>
    </header>
    <div class="card mb-4">
        <div class="card-body">
            <form method="post">
                <div class="label">Category Name</div>
                <div class="form-ip">
                    <input type="text" placeholder="Enter category Name" name="category" class="form-control" required>
                </div>
                <div class="form-submit">
                    <div class="submit">
                        <button type="submit" name="submit" class="btn ">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>

</html>