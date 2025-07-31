using System;
using System.Linq;


public static class LogAnalysis 
{
    // TODO: define the 'SubstringAfter()' extension method on the `string` type  
    public static string SubstringAfter(this string message, string delimiter) => message.Split(delimiter).Last();

    // TODO: define the 'SubstringBetween()' extension method on the `string` type
    public static string SubstringBetween(this string message, string leftSquareBracket, string rightSquareBracket) =>  message.Split(rightSquareBracket).First().Split(leftSquareBracket).Last();

    // TODO: define the 'Message()' extension method on the `string` type
    public static string Message(this string message) => message.SubstringAfter(": ");

    // TODO: define the 'LogLevel()' extension method on the `string` type
    public static string LogLevel(this string message) => message.SubstringBetween("[", "]");
}