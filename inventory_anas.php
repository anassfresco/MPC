<?php
include("include/connect.php");

if (isset($_POST['ins'])) {
	$pname = $_POST['name'];
	$description = $_POST['description'];
	$image = $_FILES['photo']['name'];
	$temp_image = $_FILES['photo']['tmp_name'];

	move_uploaded_file($temp_image, "product_images/$image");

	$query = "insert into `news`(title, description, img) values ('$pname', '$description', '$image')";

	$result = mysqli_query($con, $query);

	if ($result) {
		echo "<script> alert('Successfully entered product'); window.location.href = 'inventory_anas.php'; </script>";
		exit();
	}
}




if (isset($_POST['submitt'])) {
    $pname = $_POST['name1'];
    $description = $_POST['description1']; 
    $image = $_FILES['photo1']['name'];
    $temp_image = $_FILES['photo1']['tmp_name'];
    $pid = $_POST['pid1'];
    $prev_image = $_POST['prevphoto'];

    if (!empty($image)) {
        move_uploaded_file($temp_image, "product_images/$image");
        $query = "UPDATE `news` SET title='$pname', description='$description', img='$image' WHERE pid=$pid";
    } else {
        $query = "UPDATE `news` SET title='$pname', description='$description', img='$prev_image' WHERE pid=$pid";
    }

    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>alert('Successfully updated news item'); window.location.href='inventory_anas.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error updating news item');</script>";
    }
}


if (isset($_GET['odd'])) {
	$oid = $_GET['odd'];

	$query = "UPDATE orders set datedel = CURDATE() where oid = $oid";

	$result = mysqli_query($con, $query);

	header("Location: inventory.php");
	exit();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Ecommerce Inventory Management</title>
    <link rel="stylesheet" href="style.css">
    <style>
    #d1 {


        width: 100%;
    }

    .container11 {
        max-width: 100%;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: auto;

    }

    #tab1 tr {
        width: 100%;
        height: 80px;

    }

    .btns {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .order-container h1 {
        margin-bottom: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    .container1 {
        max-width: 100%;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between;
    }

    .form-container {
        width: 35%;
    }


    h1 {
        font-size: 36px;
        text-align: center;
        margin-bottom: 40px;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .search-container {
        width: 60%;
    }

    .form-container,
    .search-container {
        margin-bottom: 40px;
        padding: 20px;
        background-color: #f5f5f5;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .order-container {
        margin-bottom: 40px;
        padding: 20px;
        justify-content: center;
        background-color: #f5f5f5;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 100%;
        overflow: auto;


    }

    #tb1 tr {
        height: 60px;
    }

    .form-container label,
    .search-container label {
        display: flex;
        margin-bottom: 10px;
        font-size: 16px;
        font-weight: bold;
    }

    .form-container input,
    .search-container input,
    .form-container select,
    .search-container select {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .form-container input[type="file"] {
        display: inline-block;
    }

    .inventory-container {
        padding: 20px;
        background-color: #f5f5f5;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product {
        margin-bottom: 20px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        position: relative;
        display: flex;
    }

    .product-checkbox {
        position: absolute;
        top: 20px;
        right: 20px;
    }

    .product p {
        margin: 0;
        font-size: 16px;
        line-height: 1.5;
    }

    .product p span {
        font-weight: bold;
    }

    #delete-btn,
    #update-btn,
    #insert-btn,
    #search-btn,
    #all-btn,
    #delivered-btn,
    #undelivered-btn,
    #oupdate-btn,
    #up-btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
        color: #fff;
        background-color: #088178;
        cursor: pointer;
        margin-right: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 20px;
    }

    .insert-btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
        color: #fff;
        background-color: #088178;
        cursor: pointer;
        margin-right: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 20px;
    }

    #delete-btn:hover,
    #update-btn:hover,
    #insert-btn:hover,
    #search-btn:hover {
        background-color: #3e8e41;
    }

    #product-list {
        overflow-x: auto;
        height: 80%;
    }

    table {
        border-collapse: collapse;
        height: 350px;
        display: inline-block;
        width: 100%;
        overflow: auto;
    }

    .order-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .random {
        display: flex;
        justify-content: center;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
        white-space: nowrap;
    }

    th {
        background-color: #f2f2f2;

        position: sticky;
        top: 0;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    td img {
        max-width: 50px;
        max-height: 50px;
        margin-right: 10px;
    }

    td input[type="checkbox"] {
        margin-right: 10px;
    }

    td input[type="checkbox"]:hover {
        cursor: pointer;


    }

    #tab1 {
        height: auto;
        max-height: 900px;
        overflow-y: auto;
        overflow-x: auto;
    }

    .hidden {
        display: none;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div class="container1">
        <div class="form-container">
            <h2>Insert New</h2>
            <form id="insert-form" action="inventory_anas.php" enctype="multipart/form-data" method="post">
                <label for="name">titre:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="description">Description:</label>
                <textarea  name="description" rows="4" required></textarea>
                <label for="image">Image:</label>
                <input type="file" name="photo" id="fileInput" required>
                <button name="ins" type="submit" class="insert-btn">save</button>
            </form>
        </div>
        <div class="search-container">
            <h2>all news </h2>
            
            <div class="inventory-container">
                <div id="product-list">

                    <?php
					

                        if (isset($_GET['pid'])) {
                            $id = $_GET['pid'];
                            $query = "DELETE FROM news WHERE pid = '$id'";
                            $result = mysqli_query($con, $query);
                            if($result) {
                                echo "<script>alert('Successfully deleted news item'); window.location.href='inventory_anas.php';</script>";
                                exit();
                            }
                        }

                        $query = "select * from `news`";
                        $result = mysqli_query($con, $query);

                        echo "<table>
                              <thead>
                                <tr>
                                  <th>Title</th>
                                  <th>Description</th>
                                  <th>Image</th>
                                  <th>Delete</th>
                                  <th>Update</th>
                                </tr>
                              </thead>
                              <tbody>";
                        
						while ($row = mysqli_fetch_assoc($result)) {
							$pid = $row['pid'];
							$title = $row['title']; 
							$desc = $row['description'];
							$img = $row['img'];

							echo "<tr>
										<td>$title</td>
										<td style='max-width: 300px; max-height: 100px;'>$desc</td>
										<td><img src='product_images/$img' alt='' /></td>
									
										<td><a href ='inventory_anas.php?pid=$pid' onclick='return confirm(\"Are you sure you want to delete this item?\")' class='insert-btn'>Delete</button></td>
										<td><button onclick='showUpdateForm($pid, \"$title\", \"$desc\", \"$img\")' class='insert-btn'>Update</button></td>

										</tr>";
						}

                        echo "</tbody></table>";

                        // Add update form div
                        echo "<div id='updateFormDiv' style='display:none; position:fixed; top:50%; left:50%; transform:translate(-50%,-50%); 
                              background:white; padding:20px; border:1px solid #ccc; border-radius:5px; box-shadow:0 0 10px rgba(0,0,0,0.1);'>
                              <h3>Update News Item</h3>
                              <form id='update-form' action='inventory_anas.php' method='post' enctype='multipart/form-data'>
                                <input type='hidden' id='update_pid' name='pid1'>
                                <label for='update_title'>Title:</label>
                                <input type='text' id='update_title' name='name1' required><br><br>
                                
                                <label for='update_desc'>Description:</label>
                                <textarea id='update_desc' name='description1' rows='4' required></textarea><br><br>
                                
                                <label for='update_image'>New Image (optional):</label>
                                <input type='file' name='photo1' id='update_image'><br><br>
                                <input type='hidden' id='prev_image' name='prevphoto'>
                                
                                <button type='submit' name='submitt' class='insert-btn'>Save Changes</button>
                                <button type='button' onclick='hideUpdateForm()' class='insert-btn'>Cancel</button>
                              </form>
                              </div>

                              <script>
                              function showUpdateForm(pid, title, desc, img) {
                                document.getElementById('updateFormDiv').style.display = 'block';
                                document.getElementById('update_pid').value = pid;
                                document.getElementById('update_title').value = title;
                                document.getElementById('update_desc').value = desc;
                                document.getElementById('prev_image').value = img;
                              }

                              function hideUpdateForm() {
                                document.getElementById('updateFormDiv').style.display = 'none';
                              }
                              </script>";
					?>


                </div>
            </div>

        </div>
    </div>



    
</body>

</html>

<script>
window.addEventListener("unload", function() {
  // Call a PHP script to log out the user
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "logout.php", false);
  xhr.send();
});
</script>