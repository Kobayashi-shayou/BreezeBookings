<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

class RoomType extends Enum
{
    const SINGLE_ROOM = 0;
    const DOUBLE_ROOM = 1;
    const SWEET_ROOM = 2;

    public static function getRoomTypeName($value): string
    {
        switch($value) {
            case self::SINGLE_ROOM:
                return 'シングルルーム';
            case self::DOUBLE_ROOM:
                return 'ダブルルーム';
            case self::SWEET_ROOM:
                return 'スイートルーム';
            default:
                return 'その他';
        }
    }

    public static function toSelectArray(): array
    {
        return [
            self::SINGLE_ROOM => self::getRoomTypeName(self::SINGLE_ROOM),
            self::DOUBLE_ROOM => self::getRoomTypeName(self::DOUBLE_ROOM),
            self::SWEET_ROOM => self::getRoomTypeName(self::SWEET_ROOM),
        ];
    }
}
