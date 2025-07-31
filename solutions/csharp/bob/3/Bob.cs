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
    private static bool IsQuestion(this string statement)
        => statement.EndsWith("?");

    private static bool IsYell(this string statement)
        => statement.ToUpper() == statement && statement.ToLower() != statement;
    
    private static bool IsYellQuestion(this string statement)
        => IsYell(statement) && IsQuestion(statement);

    private static bool IsSilence(this string statement)
        => string.IsNullOrWhiteSpace(statement) && string.IsNullOrEmpty(statement);
}