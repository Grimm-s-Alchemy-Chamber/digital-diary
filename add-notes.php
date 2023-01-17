<?php session_start();
include_once('includes/config.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php include_once('includes/header.html')?>
    </header>
    <div class="form-container">
        <form>
            <div class="form-ele">
                <div class="label">Select Category</div>
                <select name="category" id="category" class="form-control" required>
                    <option value="">Select Category</option>
                    <?php $userid = $_SESSION["edmsid"];
                    $query = mysqli_query($con, "select * from tblcategory where createdBy='$userid'");
                    while ($row = mysqli_fetch_array($query)) { ?>

                        <option value="<?php echo $row['categoryName']; ?>">
                            <?php echo $row['categoryName']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-ele">
                <div class="label">Note Title</div>
                <input type="text" name="notetitle" placeholder="enter title" class="form-control">
            </div>
            <div class="form-ele">
                <div class="label">Note Description</div>
                <textarea name="notedescription" placeholder="enter description" rows="6"></textarea>
            </div>
            <div class="btn">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>