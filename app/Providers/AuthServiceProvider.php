<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization Services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('nivel-adm', function (User $user){
            if ($user->role === "Administrador")
                return Response::allow();
            else
                return Response::deny("Você não possui acesso!");
        });
    }
}
