<?php
function unique_code($prefix = 'AA-',$limit = 8)
{
    $c = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    return $prefix . $c;
}
