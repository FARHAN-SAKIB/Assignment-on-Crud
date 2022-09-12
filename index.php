<html>
    <head></head>
    <body style="text-align: center">
<div id="main-content">
    <h2 style="background:blue;color:white">All Records</h2>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "product") or die("Connection Failed");

        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");

        if(mysqli_num_rows($result) > 0) {
    ?>
    <table style="margin:auto;background:white" cellpadding="7px">
        <thead style="background:#33FF33">
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Expire Date</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['expire_date']; ?></td>
                <td>
                    <button style="background:#E7C011"><a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a></button>
                    <button style="background:#9B8F94 "><a href='delete.php?id=<?php echo $row['id']; ?>'><b>Delete</b></a></button>
                    
                </td>
            </tr>
           <?php } ?>
        </tbody>
        
    </table>
    
    <?php }
        else echo "<h1>No Record Found</h1>";
        mysqli_close($conn);
    ?>
    <div style="text-align: center;padding-top: 5%">
    <button style="background:#D133FF">
    <a href='add.php'>ADD NEW RECORD</a>
   </button>
   </div>
</div>
</div>
</body>
</html>