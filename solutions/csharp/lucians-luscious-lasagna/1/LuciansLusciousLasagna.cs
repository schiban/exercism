class Lasagna
{
    public int ExpectedMinutesInOver() => 40;

    public int RemainingMinutesInOven(int remainingMinutes) => ExpectedMinutesInOver() - remainingMinutes;

    public int PreparationTimeInMinutes(int layersNumber) => layersNumber * 2;

    public int ElapsedTimeInMinutes(int layersNumber, int elapsedMinutes) =>  RemainingMinutesInOven(elapsedMinutes) + PreparationTimeInMinutes(layersNumber);
}