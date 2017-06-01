<?php
        $password1 = '123456';
        echo "{$password1}<br>";

        $hash1 = password_hash($password1,PASSWORD_DEFAULT);
        echo "{$hash1}<br>";

        $password2 = '12456';
        echo "{$password2}<br>";

        if (password_verify($password1,$hash1)){
            echo "OK";
        }else {
            echo "XX";
        }