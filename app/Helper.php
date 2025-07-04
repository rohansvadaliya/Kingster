<?php

use Illuminate\Support\Str;

function generalSetting(){

    $data = GeneralSetting::first();

    $data['address'] = "testing";
    return $data;
}
