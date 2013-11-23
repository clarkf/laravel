<?php
namespace App\Commands;

use Illuminate\Database\Console\Migrations\MigrateCommand as BaseMigrateCommand;

class MigrateCommand extends BaseMigrateCommand {

    /**
     * Patch the getMigrationPath on the laravel's built-in migrate command
     * to utilize the PSR-0 structure.
     *
     * @return string
     */
    protected function getMigrationPath()
    {
        // Get where Laravel thinks the migrations live
        $result = parent::getMigrationPath();

        // Check to see if it's defaulting to the standard
        // app/database/migrations
        if ($result == $this->laravel['path'].'/database/migrations') {
            // Fix the result
            $result = $this->laravel['path'].'/App/Database/Migrations';
        }

        return $result;
    }

}
