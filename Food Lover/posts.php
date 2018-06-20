<?php
    $result = $conn->query($sql);
    if($result->num_rows >0){
        while($row = $result->fetch_assoc() ){
            $id = $row["id"];
            $pic_src = $row["pic_src"];
            $food_name = $row["food_name"];
            $about_food = $row["about_food"];
            $food_prise = $row["food_prise"];
            echo"
                <div class=\"content\" style=\"padding:20px; background-color:#ccc; overflow:hidden;\">
                    <img style=\"float:left; width:110px; height:110px;\" src=" . $row["pic_src"] .">
                    <div id=". $row["id"] . " style=\"float:left; width:60%; padding:0 20px;\">
                        <h4 style=\"font-size:120%;\">". $row["food_name"] . "</h4>
                        <p>".
                            $row["about_food"]
                        ."</p>
                    </div>
                <i id=\"a2\" style=\"float:right; color:rgb(55, 87, 135);margin-top: -15px; margin-top: 5px;\" onclick=' addToOrder_id({$id}) , addToOrder(\"{$food_name}\") , addToOrder_prise({$food_prise})' class=\"fa fa-plus-circle fa-2x\" aria-hidden=\"true\"></i>
                <i style=\" float:right; color:rgb(35, 158, 110);font-size: 30px;position: absolute; margin-top: 50px;\" aria-hidden=\"true\">" . $row["food_prise"] . "$</i>
                </div>			
            ";
            
        }
    }
    
?>