<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_post['username']; 
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
