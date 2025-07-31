class Lasagna
{
    // TODO: define the 'ExpectedMinutesInOven()' method
    public int ExpectedMinutesInOven()
    {
        return 40;
    }

    // TODO: define the 'RemainingMinutesInOven()' method
    public int RemainingMinutesInOven(int remainingMinutes)
    {
        return ExpectedMinutesInOven() - remainingMinutes;
    }

    // TODO: define the 'PreparationTimeInMinutes()' method
    public int PreparationTimeInMinutes(int layersNumber)
    {
        return layersNumber * 2;
    }

    // TODO: define the 'ElapsedTimeInMinutes()' method
    public int ElapsedTimeInMinutes(int layersNumber, int elapsedMinutes)
    {
        return PreparationTimeInMinutes(layersNumber) + elapsedMinutes;
    }
}