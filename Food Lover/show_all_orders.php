<!DOCTYPE html>
    <html>
        <head>
            <title>Users Orders</title>
            <link rel="stylesheet" href="css/resturant.css">
            <link rel="stylesheet" href="css/save.css">
            <link rel="stylesheet" href="css/restaurant_content.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <style>
                
            </style>
        </head>
        <body>
            <?php include"header.php" ?>
            <table id="showAllOrders" style="width: 100%;margin: 0">
                <tr>
                    <th style="padding: 15px;">ID</th>
                    <th style="padding: 15px;">Name</th>
                    <th style="padding: 15px;">Telephone</th>
                    <th style="padding: 15px;">Address</th>
                    <th style="padding: 15px;">Post Code</th>
                    <th style="padding: 15px;">E-mail</th>
                    <th style="padding: 15px;">ID Orders</th>
                    <th style="padding: 15px;">Total Price</th>
                    <th style="padding: 15px;">Reserved Time</th>
                </tr>
                <?php
                            require"database_connection.php";
                            
                            $sql = "SELECT * FROM user ORDER BY time DESC";
                            $result = $conn->query($sql);
                            if($result->num_rows >0){
                                while($row = $result->fetch_assoc() ){
                                    echo"<tr>";
                                    echo "<td > " . $row['id'] . " </td>"  ;
                                    echo "<td > " . $row['fname'] . $row['lname'] . " </td> ";
                                    echo "<td > " . $row['telephone'] . "</td>";
                                    echo "<td > " . $row['str_number'] . " <br> " . $row['str_name'] . " <br> " . $row['city'] . " <br> " . $row['country'] . "</td>";
                                    echo "<td > " . $row['post_code'] . "</td>";
                                    echo "<td > " . $row['email'] . "</td>";
                                    echo "<td > " . $row['order_ids'] . "</td>";
                                    echo "<td > " . $row['total_price'] . " $ " . "</td>";
                                    echo "<td > " . $row['time'] . "</td>";
                                    echo"</tr>";
                                }
                            }
                ?>
            </table>
        </body>
    </html>