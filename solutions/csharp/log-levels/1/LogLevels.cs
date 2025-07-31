using System;

static class LogLine
{
    public static string Message(string logLine)
    {
        // throw new NotImplementedException("Please implement the (static) LogLine.Message() method");
        return logLine[(logLine.IndexOf(':') + 1)..].Trim();
    }

    public static string LogLevel(string logLine)
    {
        // throw new NotImplementedException("Please implement the (static) LogLine.LogLevel() method");
        return logLine[1..logLine.IndexOf(']')].ToLower();
    }

    public static string Reformat(string logLine)
    {
        // throw new NotImplementedException("Please implement the (static) LogLine.Reformat() method");
        return $"{Message(logLine)} ({LogLevel(logLine)})";
    }
}
