<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */

declare(strict_types=1);

$arr1 = ["João", "Bandeira"];
$arr2 = ["Marta", "Guedes"];
$arr3 = ["João", "Marcos", "da", "Costa", "Moreira", "Bandeira"];
$predicate = "Moreira";

$teste = new ListOps();
//print_r($teste->append($arr1, $arr2));
//print_r($teste->concat($arr1, $arr2, $arr2, $arr2));
print_r($teste->filter($predicate, $arr3));

class ListOps
{
    public function append(array $list1, array $list2): array
    {
        for($i=0;$i<count($list2);$i++)
        {
            $list1[] = $list2[$i];
        }
        return $list1;
    }

    public function concat(array $list1, array ...$listn): array
    {
        $listResult = [];
        foreach($listn as $list)
        {
            for($i=0;$i<count($list);$i++)
            {
                $listResult[] = $list[$i];
            }
        }
        
        return $this->append($list1, $listResult);
    }

    /**
     * @param callable(mixed $item): bool $predicate
     */
    public function filter(callable $predicate, array $list): array
    {
        for($i=0;$i<count($list);$i++)
        {
            if($predicate == $list[$i]) return $list[$i];
        }
    }

    public function length(array $list): int
    {
        throw new \BadMethodCallException("Implement the length function");
    }

    /**
     * @param callable(mixed $item): mixed $function
     */
    public function map(callable $function, array $list): array
    {
        throw new \BadMethodCallException("Implement the map function");
    }

    /**
     * @param callable(mixed $accumulator, mixed $item): mixed $function
     */
    public function foldl(callable $function, array $list, $accumulator)
    {
        throw new \BadMethodCallException("Implement the foldl function");
    }

    /**
     * @param callable(mixed $accumulator, mixed $item): mixed $function
     */
    public function foldr(callable $function, array $list, $accumulator)
    {
        throw new \BadMethodCallException("Implement the foldr function");
    }

    public function reverse(array $list): array
    {
        throw new \BadMethodCallException("Implement the reverse function");
    }
}
