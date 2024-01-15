<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return substr($name, 0);
    }

    public function initial(string $name): string
    {
        return $this->firstLetter($name) . ".";
    }

    public function initials(string $name): string
    {
        $name = explode(" ", $name);
        $firstName = $this->initial($name[0]);
        $lastName = $this->initial($name[1]);
        return $firstName . " " . $lastName;

    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $sweetheart_a = $this->initials($sweetheart_a);
        $sweetheart_b = $this->initials($sweetheart_b);
        return $sweetheart_a . "  +  " . $sweetheart_b;
    }
}
