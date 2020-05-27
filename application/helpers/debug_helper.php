<?php

    function dd($valor){
?>

<style>
    @import "compass/css3";

    body {
    background-color: #34495e;
    font-family: helvetica, arial;
    height: 100%;
    font-size: 16px;
    line-height: 1.4;
    padding: 0;
    margin: 0;
    color: #ecf0f1;
    }

    * {
    box-sizing: border-box;
    }

    .container {
    margin-left: 350px;
    margin-right: 60px;
    padding: 2em;
    .divider {
        height: 3px;
        width: 100%;
        background-color: #ecf0f1;
        display: block;
    }
    }

    .test1 {
    z-index: 1;
    position: absolute;
    width: 50px;
    height: 50px;
    right: 10px;
    top: 0;
    }
    .test2 {
    z-index: 2;
    position: absolute;
    width: 50px;
    height: 50px;
    right: 10px;
    top: 200px;
    }
    .test3 {
    z-index: 3;
    position: absolute;
    width: 50px;
    height: 50px;
    right: 10px;
    top: 400px;
    }
    .test4 {
    z-index: 4;
    position: absolute;
    width: 50px;
    height: 50px;
    right: 10px;
    top: 600px;
    }
    .test5 {
    z-index: 5;
    position: absolute;
    width: 50px;
    height: 50px;
    right: 10px;
    top: 800px;
    }
    .test6 {
    z-index: 5;
    position: absolute;
    width: 50px;
    height: 50px;
    right: 10px;
    top: 1000px;
    }
    .test7 {
    z-index: 5;
    position: absolute;
    width: 50px;
    height: 50px;
    right: 10px;
    top: 1200px;
    }
</style>

<div class="container">
  
    <h3>
        <?php
            echo "<pre>";
            var_dump($valor);
            echo "</pre>";
            die();
            
        }
        ?>
    </h3>
</div>