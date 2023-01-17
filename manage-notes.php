<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/62ff51034b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/manage-notes.css">
    <link rel="stylesheet" href="./css/header.css">
</head>

<body>
    <header>
        <?php include_once('includes/header.html') ?>
    </header>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Notes Details
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Note Title</th>
                        <th>Category</th>
                        <th>Creation date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>

                        <th>Note Title</th>
                        <th>Category</th>
                        <th>Creation date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $userid = $_SESSION["edmsid"];
                    $query = mysqli_query($con, "select * from tblnotes where createdBy='$userid'");
                    $cnt = 1;
                    while ($row = mysqli_fetch_array($query)) {
                        ?>

                        <tr>
                            <td>
                                <?php echo htmlentities($cnt); ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['noteTitle']); ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['noteCategory']); ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['creationDate']); ?>
                            </td>
                            <td>
                                <a href="view-note.php?noteid=<?php echo $row['id'] ?>" class="btn btn-primary">View</a>
                                <a href="manage-notes.php?id=<?php echo $row['id'] ?>&del=delete"
                                    onClick="return confirm('Are you sure you want to delete?')"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php $cnt = $cnt + 1;
                    } ?>

                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>

</html>