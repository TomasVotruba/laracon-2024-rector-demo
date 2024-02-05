# Laracon 2024 Amsterdam Rector demo

A small introduction to Rector 0.19.7 - released during Laracon :)

It requires PHP 7.2 as the lowest version to run. 8.0 and 8.1 to test all the features demoed on the stage. 

## Usage

Fork this repository, clone locally and then install dependencies:

```bash
composer update
```

## List of examples

1. Upgrade PHP
    * based on composer.json
    * go one version at a time
    * control version in the `withPhpSets()`
    * promoted properties
    * readonly classes

2. Type coverage
    * Add return types
    * Add property types based on constructor
    * Infer param types for private methods
    * Show `withTypeCoverageLevel()` (coming soon)

3. Dead code removal
    * Remove unused properties
    * Remove unused foreach elements
    * Show `withDeadCodeLevel()` (coming soon)

4. Create a custom Rector rule
    * Create a rule
    * Hook into a `FuncCall` node function
    * Rename the node function

5. Make use of Laravel extension package 
    * See https://github.com/driftingly/rector-laravel/

6. Bonus: Laravel types
    * Clone laravel framework and run type coverage level there :)
    * Add upgrade set for end-users

## Resources

* Laravel package for Rector: https://github.com/driftingly/rector-laravel/
* Rector book to learn fast: https://leanpub.com/rector-the-power-of-automated-refactoring (updated 2024-02 as well)

## People around Rector & Laravel to follow

* Laravel package for Rector maintainer - https://twitter.com/driftingly
* Peter - active and relentless Rector rules contributor - https://twitter.com/slyfirefox