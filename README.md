# PHP Foreach Loop with Unset() - Key Preservation
This repository demonstrates an uncommon error in PHP related to using `unset()` within a `foreach` loop on an array.  The issue is that `unset()` doesn't automatically reindex the array, leading to unexpected behavior when you're expecting consecutive keys.

The `bug.php` file showcases the problem.  The `bugSolution.php` demonstrates a solution using `array_filter()` to achieve the desired key preservation.