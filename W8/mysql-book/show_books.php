<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    table td {
        border: 1px solid blue;
    }
    </style>
</head>
<body>
    
    

<?php

try {
    require_once('db.inc.php');

    $query = 'select * from book';
    $result = $conn->query($query);

    if ($result->num_rows == 0)
        print('<p>There is no book</p>');
    else {
        print('<table>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Year of publication</th>
                <th>Action</th>
            </tr>');

        $idx = 1;
        while ($row = $result->fetch_assoc()) {
            print('<tr>
                    <td>' . $idx . '</td>
                    <td>' . $row['title'] . '</td>
                    <td>' . $row['author'] . '</td>
                    <td>' . $row['publisher'] . '</td>
                    <td>' . $row['yop'] . '</td>
                    <td><a href="remove_book.php?id=' . $row['id'] . '">Remove</a></td>
                </tr>');
            $idx++;
        }

        $result->free_result();


        print('</table>');
    }

} catch (mysqli_sql_exception $e) {
    print('Error: ' . $e->getMessage());
}
    

?>
</body>
</html>