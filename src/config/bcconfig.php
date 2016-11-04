<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
return [
    'site' => filter_input(INPUT_SERVER, 'HTTP_HOST', FILTER_SANITIZE_STRING)
];