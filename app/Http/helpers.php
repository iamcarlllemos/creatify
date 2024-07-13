<?php

use Carbon\Carbon;

function wordDate(string $date) {
    return Carbon::parse($date)->format('F j, Y');
}