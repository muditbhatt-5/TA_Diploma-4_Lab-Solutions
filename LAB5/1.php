<?php
    // Without argument and without return
    function printNameWithoutArgWithoutReturn() {
        echo "Mudit Bhatt<br/>";
    }
    printNameWithoutArgWithoutReturn();

    // With argument and without return
    function printNameWithArgWithoutReturn($name) {
        echo $name . "<br/>";
    }
    printNameWithArgWithoutReturn("Mudit Bhatt");

    // Without argument and with return
    function printNameWithoutArgWithReturn() {
        return "Mudit Bhatt<br/>";
    }
    echo printNameWithoutArgWithReturn();

    // With argument and with return
    function printNameWithArgWithReturn($name) {
        return $name . "<br/>";
    }
    echo printNameWithArgWithReturn("Mudit Bhatt");
?>
