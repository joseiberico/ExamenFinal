<?php

function isLogged(): bool
{
    if(!isset($_SESSION['username'])){
        return false;
    }
    return true;
}