<?php 
class MathUtils {
    public static float $pi = 3.14159;
    private static int $num = 9;

    public static function multiply($num): float {
        return $num * $num;
    }

    public static function divide($num): int {
        return $num / $num;
    }

    public static function getNum(): int {
        return self::$num;
    }// getter
}

// Access and print
echo MathUtils::$pi . "\n";
echo MathUtils::divide(MathUtils::getNum()) . "\n";     // Access private via getter
echo MathUtils::multiply(MathUtils::$pi) . "\n";
echo MathUtils::multiply(4);




