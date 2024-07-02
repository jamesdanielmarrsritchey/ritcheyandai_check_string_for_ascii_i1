<?php
function isAscii($str) {
    // Check if the entire string is ASCII
    if (mb_check_encoding($str, 'ASCII')) {
        return true;
    } else {
        // Check if parts of the string are ASCII
        for ($i = 0; $i < mb_strlen($str); $i++) {
            if (ord(mb_substr($str, $i, 1)) > 127) {
                return false;
            }
        }
        // If some parts are ASCII but not the entire string
        return 'TR/SE';
    }
}
?>