<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use Illuminate\Validation\Rules\Enum as RulesEnum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CinemaRoomStatus extends RulesEnum
{
    const Active =   0;
    const Upgrading =   1;
    const Removed = 2;
}
