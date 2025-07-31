class Lasagna
{
    // TODO: define the 'ExpectedMinutesInOven()' method
    public int ExpectedMinutesInOven() => 40;

    // TODO: define the 'RemainingMinutesInOven()' method
    public int RemainingMinutesInOven(int remainingMinutes) => ExpectedMinutesInOven() - remainingMinutes;

    // TODO: define the 'PreparationTimeInMinutes()' method
    public int PreparationTimeInMinutes(int layersNumber) => layersNumber * 2;

    // TODO: define the 'ElapsedTimeInMinutes()' method
    public int ElapsedTimeInMinutes(int layersNumber, int elapsedMinutes) => PreparationTimeInMinutes(layersNumber) + elapsedMinutes;
}