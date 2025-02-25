<table style="border: 2px solid black;">
    <tr>
        <td>Filter Name</td>
        <td>Filter Id</td>
    </tr>

    <?php
    foreach(filter_list() as $id => $filter) {
        echo '<tr><td>' . $filter . '</td><td>' . filter_id( $filter ) . '</td></tr>';
    }
    ?>

</table>