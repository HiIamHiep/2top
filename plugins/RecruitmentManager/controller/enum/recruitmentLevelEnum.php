<?php

use Cake\ORM\Entity;

class RecuitmentLevelEnum extends Entity
{
    public const INTERN = '1';
    public const FRESHER = '2';
    public const JUNIOR = '3';
    public const SENIOR = '4';
    public const LEADER = '5';
    public const LECTURER = '6';
    public const MANAGER = '7';
//
//    // Các phương thức và mã khác của Entity

    public static function getStatusOptions()
    {
        return [
            self::INTERN => 'INTERN',
            self::FRESHER => 'FRESHER',
            self::JUNIOR => 'JUNIOR',
            self::SENIOR => 'SENIOR',
            self::LEADER => 'LEADER',
            self::LECTURER => 'LECTURER',
            self::MANAGER => 'MANAGER',
        ];
    }
}
