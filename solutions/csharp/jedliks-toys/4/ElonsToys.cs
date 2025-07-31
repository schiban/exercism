using System;

class RemoteControlCar
{
    public static RemoteControlCar Buy() => RemoteControlCar car = new RemoteControlCar();
    private int _distance;
    private int _battery = 100;

    public string DistanceDisplay() => $"Driven {_distance} meters";


    public string BatteryDisplay()
    {
        if (_battery == 0)
            return "Battery empty";
        else
            return $"Battery at {_battery}%";
    }

    public void Drive()
    {
        if (_distance < 2000 && _battery > 0)
        {
            _distance += 20;
            _battery -= 1;
        }
    }
}
