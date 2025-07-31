using System;

class RemoteControlCar
{
    public static RemoteControlCar Buy()
    {
        // throw new NotImplementedException("Please implement the (static) RemoteControlCar.Buy() method");
        RemoteControlCar car = new RemoteControlCar();

        return car;
    }

    private int _distance;

    public string DistanceDisplay()
    {
        // throw new NotImplementedException("Please implement the RemoteControlCar.DistanceDisplay() method");
        return $"Driven {_distance} meters";
    }

    private int _battery = 100;

    public string BatteryDisplay()
    {
        // throw new NotImplementedException("Please implement the RemoteControlCar.BatteryDisplay() method");
        if (_battery == 0)
            return "Battery empty";
        else
            return $"Battery at {_battery}%";
    }

    public void Drive()
    {
        // throw new NotImplementedException("Please implement the RemoteControlCar.Drive() method");
        if (_distance < 2000 && _battery > 0)
        {
            _distance += 20;
            _battery -= 1;
        }
    }
}
