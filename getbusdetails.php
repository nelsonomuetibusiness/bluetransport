

    <?php




    echo "<h1>see me</h1>";


    $bus_selected = $_POST['ibuses'];
    $date = $_POST['date'];


    echo "<h1>" . $bus_selected . "</h1>";
    echo  $date;


    require("functions.php");


    $sql = "SELECT * FROM bus where bus_number='$bus_selected' ";
    $busdata = mysqli_query(connect(), $sql);



    echo " <table border='1' width='80%'> ";
    echo " <thead>
        <tr>
            <td>
                bus number
            </td>
            <td>
                route
            </td>
            <td>
                price
            </td>
            <td>
                date
            </td>
            

        </tr>


    </thead>";
    echo " 
    <tbody> ";;

    while ($row = mysqli_fetch_assoc($busdata)) {
        echo " <tr>";
        echo " <td name='bus_number'>" . $row['bus_number'] . " </td>";
        echo " <td>" . $row['trip'] . " </td>";
        echo " <td>" . $row['price'] . " </td>";
        echo "<td>" . date("Y/m/d") . "</td>";
        
        echo "<td>" . '<input type="submit" name="submit">to check seats </input>';
        "</td>";
        echo "</tr>";
    }
    echo "</tbody> </table>";

    

    ?>

    






<!--echo "<td>" . "<input type='submit' name='submit' value='Check Seats'>";
        "</td>";-->


