using System;

public static class PhoneNumber
{
    public static (bool IsNewYork, bool IsFake, string LocalNumber) Analyze(string phoneNumber)
    {
        return (phoneNumber.Split('-')[0].ToString()=="212", phoneNumber.Split('-')[1].ToString()=="555", phoneNumber.Split('-')[2].ToString());
    }

    public static bool IsFake((bool IsNewYork, bool IsFake, string LocalNumber) phoneNumberInfo)
    {
        // throw new NotImplementedException($"Please implement the (static) PhoneNumber.IsFake() method");
    }
}
