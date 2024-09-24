<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     * @throws AuthorizationException
     */
    public function boot(): void
    {
        Model::preventLazyLoading();

        // Define the 'edit-job' gate
//        Gate::define('edit-job', function (User $user, Job $job) {
//            return $job->employer->user->is($user);
//        });
//
//        // Global model authorization: apply globally for Job model before any edit
//        Job::saving(function (Job $job) {
//            $user = Auth::user();
//            if ($user) {
//                Gate::authorize('edit-job', $job);
//            }
//        });

            Gate::define('update-job',function(User $user, Job $job) {});
            Gate::define('delete-job',function(User $user, Job $job) {});

//        Gate::define('edit-job', function (User $user, Job $job) {
//            return $job->employer->user->is($user);
//        });

//
//        Gate::authorize('edit-job', function (User $user, Job $job) {
//            return $job->employer->user->is($user);
//        });

    }
}
