<?php

function presentPrice($price)
{
    return '£'.number_format(floatval($price) / 100, 2);
}
