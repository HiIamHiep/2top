<?php
// Trong file src/Model/Entity/YourEntity.php

use Cake\ORM\Entity;

class CertificateLevelEnum extends Entity
{
    public const ĐẠI_HỌC = '1';
    public const CAO_ĐẲNG = '2';

    // Các phương thức và mã khác của Entity

    public static function getArrCertificates()
    {
        return [
            self::ĐẠI_HỌC => 'CAO_ĐẲNG',
            self::CAO_ĐẲNG => 'ĐẠI_HỌC',
        ];
    }
}
