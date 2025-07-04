<?php
/**
 * Script to update image tags in Blade files to use @prodImage directive
 * Run this script from the project root directory
 */

$bladeFiles = glob('resources/views/**/*.blade.php');
$updatedFiles = 0;

foreach ($bladeFiles as $file) {
    $content = file_get_contents($file);
    $originalContent = $content;
    
    // Pattern 1: {{ asset($variable) }}
    $content = preg_replace(
        '/<img([^>]*?)src\s*=\s*["\']\s*{{\s*asset\s*\(\s*([^)]+)\s*\)\s*}}\s*["\']([^>]*?)>/i',
        '<img$1src="@prodImage($2)"$3>',
        $content
    );
    
    // Pattern 2: {{ asset('string') }}
    $content = preg_replace(
        '/<img([^>]*?)src\s*=\s*["\']\s*{{\s*asset\s*\(\s*[\'"]([^\'"]+)[\'"]\s*\)\s*}}\s*["\']([^>]*?)>/i',
        '<img$1src="@prodImage(\'$2\')"$3>',
        $content
    );
    
    // Pattern 3: {{ URL::asset('string') }}
    $content = preg_replace(
        '/<img([^>]*?)src\s*=\s*["\']\s*{{\s*URL::asset\s*\(\s*[\'"]([^\'"]+)[\'"]\s*\)\s*}}\s*["\']([^>]*?)>/i',
        '<img$1src="@prodImage(\'$2\')"$3>',
        $content
    );
    
    // Pattern 4: {{ URL::asset($variable) }}
    $content = preg_replace(
        '/<img([^>]*?)src\s*=\s*["\']\s*{{\s*URL::asset\s*\(\s*([^)]+)\s*\)\s*}}\s*["\']([^>]*?)>/i',
        '<img$1src="@prodImage($2)"$3>',
        $content
    );
    
    // If content changed, write it back
    if ($content !== $originalContent) {
        file_put_contents($file, $content);
        $updatedFiles++;
        echo "Updated: $file\n";
    }
}

echo "\nTotal files updated: $updatedFiles\n";
echo "Remember to clear your view cache: php artisan view:clear\n";
?> 