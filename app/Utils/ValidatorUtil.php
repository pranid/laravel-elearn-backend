<?php


namespace App\Utils;


class ValidatorUtil
{
    public static function getMobileValidateRegx()
    {
        return '/^(?:0|94|\+94)?(?:(?P)(?P<land_carrier>0|2|3|4|5|7|9)|7(?P<mobile_carrier>0|1|2|5|6|7|8)\d)\d{6}$//';
    }
}
