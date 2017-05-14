<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    protected $roles = [1 => "User", 2 => "Moderator", 3 => "Admin"];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin-access', function($user) {
            if($this->roles[$user->role_id] == "Admin")
                return true;

            return false;
        });

        Gate::define('manage-categories', function($user){
            if($this->roles[$user->role_id] == "Admin")
                return true;

            return false;
        });

        Gate::define('manage-thread', function($user, $thread) {
            $role = $this->roles[$user->role_id];
            if($role == "Admin" || $role == "Moderator" || $user->id == $thread->user_id)
                return true;

            return false;
        });

        Gate::define('manage-post', function($user, $post) {
            $role = $this->roles[$user->role_id];
            if($role == "Admin" || $role == "Moderator" || $user->id == $post->user_id)
                return true;

            return false;
        });

        //
    }
}
