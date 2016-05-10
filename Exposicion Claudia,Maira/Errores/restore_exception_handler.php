<?php
    function gestor_excepciones_1(Exception $e)
    {
        echo '[' . __FUNCTION__ . '] ' . $e->getMessage();
    }

    function gestor_excepciones_2(Exception $e)
    {
        echo '[' . __FUNCTION__ . '] ' . $e->getMessage();
    }

    set_exception_handler('gestor_excepciones_2_1');
    set_exception_handler('gestor_excepciones_2');

    restore_exception_handler();

    throw new Exception('Esto dispara el primer gestor de excepciones...');
?>