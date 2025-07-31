<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        return $is_knight_awake == true ? false : true;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return $is_knight_awake || $is_archer_awake || $is_prisoner_awake == true ? true : false;
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return ($is_archer_awake == false && $is_prisoner_awake == true) ? true : false;
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        if ($is_dog_present)
        {
            if ($is_archer_awake == false)
                return true;
            else
                return false;
        }
        else
        {
            if ($is_prisoner_awake && $is_knight_awake == false && $is_archer_awake == false)
                return true;
            else
                return false;
        }
    }
}
