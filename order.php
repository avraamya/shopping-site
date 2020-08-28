<?php
include('header.php');
include('arrays.php');

$obj = json_decode($_POST['array_data'], true);
$totalPrice = $_POST['totalPrice'];

echo '
<div class="my-container">
<table class="table table-dark">
<thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Amount</th>
            <th scope="col">picture</th>
        </tr>
        </thead>
        <tbody>
        
        ';
$count = 0;
foreach ($obj as $row) {
    if ($row['amount'] > 0) {
        echo
            '<tr>
            <th scope="row">' . $row['name'] . '</th>
            <td>' . $row['price'] . '</td>
            <td>' . $row['amount'] . '</td>
            <td><img class="img-fluid img-thumbnail" src=' . $Items[$count]['picture'] . '></td>     
        </tr>';
    }
    $count++;
}

echo '</tbody>
</table>
</div>';

echo '<div class="bg-dark my-container text-center">
        <h1 class="text-white">'. $totalPrice . '</h1>
    </div>';

include('footer.php');
?>