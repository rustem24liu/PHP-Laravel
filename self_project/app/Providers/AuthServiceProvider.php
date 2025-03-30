<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // Пример: Post::class => PostPolicy::class,
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        $this->registerArticlePolicies();
//
//        // Пример: создание кастомного Gate
//        Gate::define('update-post', function ($user, $post) {
//            return $user->id === $post->user_id;
//        });


    }
    public function registerArticlePolicies(){
        Gate::define('create-article', function ($user) {
            return $user->hasAccess(['create-article']);
        });

        Gate::define('update-article', function ($user, $article) {
            return $user->hasAccess(['update-any-article']) ||
                ($user->hasAccess(['update-own-article']) && $user->id === $article->user_id);
        });

        Gate::define('delete-article', function ($user, $article) {
            return $user->hasAccess(['delete-any-article']) ||
                ($user->hasAccess(['delete-own-article']) && $user->id === $article->user_id);
        });

        Gate::define('view-article', function ($user, $article) {
            return $user->hasAccess(['read-any-article']) ||
                ($user->hasAccess(['read-own-article']) && $user->id === $article->user_id);
        });
    }
}
