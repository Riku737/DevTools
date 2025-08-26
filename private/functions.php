<?php

function url_for($script_path)
{
    // Ensure leading slash
    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

function is_blank($value)
{
    return !isset($value) || trim($value) === '';
}
