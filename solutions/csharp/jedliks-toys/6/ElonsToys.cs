using System;

class RemoteControlCar
{
    private int _distance;
    private int _battery = 100;
    
    public static RemoteControlCar Buy() => new RemoteControlCar;

    public string DistanceDisplay() => $"Driven {_distance} meters";

    public string BatteryDisplay()
    {
        return battery == 0 ? "Battery empty"; : $"Battery at {battery}%";
    }

    public void Drive()
    {
        if (_battery > 0)
        {
            _distance += 20;
            _battery -= 1;
        }
    }
}
