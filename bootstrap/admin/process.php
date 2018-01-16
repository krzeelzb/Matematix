<?php

$mysqli = new mysqli('localhost', 'root', '', 'ajaxdata');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

$page = isset($_GET['p'])? $_GET['p'] : '' ;
if($page=='view'){
    $result = $mysqli->query("SELECT * FROM tabledit WHERE deleted != '1'");
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['klasa'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['oceny'] ?></td>
        </tr>
        <?php
    }
} else{

    // Basic example of PHP script to handle with jQuery-Tabledit plug-in.
    // Note that is just an example. Should take precautions such as filtering the input data.

    header('Content-Type: application/json');

    $input = filter_input_array(INPUT_POST);



    if ($input['action'] == 'edit') {
        $mysqli->query("UPDATE tabledit SET name='" . $input['name'] . "', klasa='" . $input['klasa'] . "', email='" . $input['email'] . "', phone='" . $input['phone'] . "', oceny='" . $input['oceny'] . "' WHERE id='" . $input['id'] . "'");
    } else if ($input['action'] == 'trash') {
        $mysqli->query("UPDATE tabledit SET deleted=1 WHERE id='" . $input['id'] . "'");
    } else if ($input['action'] == 'restore') {
        $mysqli->query("UPDATE tabledit SET deleted=0 WHERE id='" . $input['id'] . "'");
    }

    mysqli_close($mysqli);

    echo json_encode($input);
    
}
?>