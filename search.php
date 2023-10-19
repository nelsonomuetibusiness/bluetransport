<?php
if (isset($_POST['search'])) {
    $bus_route = array();


    $bus_route = $_POST['trip'];
    $date = $_POST['date'];
    $bus_query = "SELECT * FROM bus WHERE trip = $bus_route";
    $bus_query = mysqli_query($mysqli, $bus_query);

    if ($bus_query) {
        while ($row = mysqli_fetch_assoc($bus_query)) {
            $trip_id[] = $row["id"];
            $bus_number[] = $row["bus_number"];
            $route[] = $row["trip"];
            $price[] = $row["price"];
        }
    }

?>
    <div>
        <div>
            <table>
                <thead>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $bus_number[1] ?>
                        </td>
                        <td>
                            <?php echo $route[2] ?>
                        </td>
                        <td>
                            <?php echo $price[3] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php


}

?>