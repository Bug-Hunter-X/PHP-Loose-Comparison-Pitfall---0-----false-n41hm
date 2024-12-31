# PHP Loose Comparison Pitfall

This repository demonstrates a common, yet subtle, error in PHP related to loose comparisons (`==`) and the unexpected behavior when comparing strings and booleans.

The issue lies in the way PHP handles type juggling during loose comparisons. A numerical string '0' is unexpectedly considered equal to the boolean `false`.  This can lead to difficult-to-debug logic errors in your applications.

## How to Reproduce

1. Clone the repository.
2. Run `bug.php`.
3. Observe the output, which will highlight the unexpected equality of '0' and `false`.

## Solution

The `bugSolution.php` file shows the corrected code.  It uses strict comparison (`===`) to prevent type juggling and ensure that only values of the same type are compared.