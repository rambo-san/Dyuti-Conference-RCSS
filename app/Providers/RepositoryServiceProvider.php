<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


use App\Data\Repositories\User\EloquentRepository as UserEloquent;
use App\Data\Repositories\User\UserRepository;

use App\Data\Repositories\Permission\EloquentRepository as PermissionEloquent;
use App\Data\Repositories\Permission\PermissionRepository;


use App\Data\Repositories\Role\EloquentRepository as RoleEloquent;
use App\Data\Repositories\Role\RoleRepository;

use App\Data\Repositories\Registration\EloquentRepository as RegistrationEloquent;
use App\Data\Repositories\Registration\RegistrationRepository;

use App\Data\Repositories\Contact\EloquentRepository as ContactEloquent;
use App\Data\Repositories\Contact\ContactRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->singleton(UserRepository::class, UserEloquent::class);
        $this->app->singleton(PermissionRepository::class, PermissionEloquent::class);
        $this->app->singleton(RoleRepository::class, RoleEloquent::class);
        $this->app->singleton(RegistrationRepository::class, RegistrationEloquent::class);
        $this->app->singleton(ContactRepository::class, ContactEloquent::class);
    }
    
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       
    }
}
