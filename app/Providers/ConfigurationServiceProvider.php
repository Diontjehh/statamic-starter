<?php

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class ConfigurationServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->configureAutomaticallyEagerLoadRelationships();
        $this->configureModels();
        $this->configureCommands();
        $this->configurePasswordValidation();
    }

    /**
     * Configure the automatically eager load relationships.
     */
    private function configureAutomaticallyEagerLoadRelationships(): void
    {
        Model::automaticallyEagerLoadRelationships();
    }

    /**
     * Configure the models.
     */
    private function configureModels(): void
    {
        Model::shouldBeStrict(! app()->isProduction());
    }

    /**
     * Configure the commands.
     */
    private function configureCommands(): void
    {
        DB::prohibitDestructiveCommands(app()->isProduction());
    }

    /**
     * Configure the password validation rules.
     */
    private function configurePasswordValidation(): void
    {
        Password::defaults(fn () => app()->isProduction()
            ? Password::min(8)->uncompromised()
            : null
        );
    }
}
