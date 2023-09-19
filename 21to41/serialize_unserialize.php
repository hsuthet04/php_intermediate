<?php

$ary=[
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"]
];

$data=serialize($ary);
echo $data;
$normal=unserialize($data);
echo "<hr>";
echo "<pre>".print_r($normal,true)."</pre>";

// echo "<pre>".print_r($ary,true)."</pre>";