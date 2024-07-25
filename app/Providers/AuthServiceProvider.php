<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('Admin', function(User $user){
            return $user->roles_id == 1;
        });
        Gate::define('Assesor', function(User $user){
            return $user->roles_id == 2;
        });
        Gate::define('Siswa', function(User $user){
            return $user->roles_id == 3;
        });
    }
}
