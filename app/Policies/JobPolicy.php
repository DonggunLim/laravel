<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;

class JobPolicy
{
    public function edit(User $user, Job $job)
    {
        Gate::define('edit-job', function (?User $user, Job $job) {
            return $job->employer->user->is($user);
        });
    }
}
