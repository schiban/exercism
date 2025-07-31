using System;

public static class Bob
{
    public static string Response(string statement)
    {
        // throw new NotImplementedException("You need to implement this function.");
        if (statement.IsSilence())
            return "Fine. Be that way!";
        if (statement.IsYellQuestion())
            return "Calm down, I know what I'm doing!";
        if (statement.IsQuestion())
            return "Sure.";
        if (statement.IsYell())
            return "Whoa, chill out!";
        return "Whatever.";
    }
    private static bool IsQuestion(string statement)
        => statement.EndsWith("?");

    private static bool IsYell(string statement)
        => statement.ToUpper() == statement && statement.ToLower() != statement;
    
    private static bool IsYellQuestion(string statement)
        => IsYell(statement) && IsQuestion(statement);

    private static bool IsSilence(string statement)
        => string.IsNullOrWhiteSpace(statement);
}