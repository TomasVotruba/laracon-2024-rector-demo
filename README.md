# 

## List of examples

1. Upgrade PHP
    * based on composer.json
    * go one version at a time
    * control version in the `withPhpSets()`
    * promoted properties
    * readonly classes

2. Type coverage
    * Add return types
    * Add property types based on constructor or `setUp()`
    * Infer param types for private methods
    * Show `withTypeCoverageLevel()` coming soon

3. Dead code removal
    * Remove unused properties
    * Remove unused foreach elements
    * Show `withDeadCodeLevel()` coming soon

4. Create a custom Rector rule
    * Create a rule
    * Hook into a node function
    * Rename the node function

5. Make use of Laravel extension package 
    * See https://github.com/driftingly/rector-laravel/

6. Bonus: Laravel types
    * Clone laravel framework and run type coverage level there :)
    * Add upgrade set for end-users