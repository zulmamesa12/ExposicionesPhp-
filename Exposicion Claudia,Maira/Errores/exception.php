
<?php
    set_exception_handler( 'exc_handler' );
    function exc_handler($exception) {
        echo "Uncaught exception: " , $exception->getMessage(), "\n";
    }
    function errorone() {
        throw new Exception("Test 1");
    }
    function errortwo() {
        throw new Exception("Test 2");
    }
    function test() {
        errorone();
        errortwo();
    }
    test();
    test();
?>
