<!-- Namespace -->

<?php
    require '12products.php';
    require '12testing.php';

    function wow(){
        echo "Wow from Index file<br>";
    }
    use pro\v1\command as cmd;
    $obj = new cmd\product();
    // $obj2 = new pro\product();
    // pro\wow();

?>