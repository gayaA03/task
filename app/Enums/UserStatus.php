<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static blocked()
 * @method static static deleted()
 * @method static static active()
 */
final class UserStatus extends Enum
{
    const active = '0';
    const blocked = '1';
    const deleted = '2';

    /**
     * @param int $value
     * @return string
     */
    public static function getDescription($value): string
    {
        switch ($value) {
            case self::active:
                return 'Active';
                break;
            case self::blocked:
                return 'Blocked';
                break;
            case self::deleted:
                return 'Deleted';
                break;
            default:
                return '';
        }
    }
}
