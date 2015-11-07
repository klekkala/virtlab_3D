<?php


if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert':
            insert();
            break;
        case 'select':
            select();
            break;
    }
}

function insert() {
print '<pre>';
print_r($_REQUEST['field_name']);

echo "Done successfully";
print '</pre>';
//output
Array
(
    [0] => value1,
    [1] => value2,
    [2] => value3,
    [3] => value4
)
} 

?>
