<?php

function clean($data){
    return htmlentities(strip_tags(trim($data)));
}