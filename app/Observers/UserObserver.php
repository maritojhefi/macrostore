<?php

namespace App\Observers;

use App\Models\User;
use Elasticsearch\Client;
class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    public function created(User $user)
    {
        //
    }
    public function saved(User $model)
    {
        $this->client->index([
            'index' => 'users',
            'type' => 'users',
            'id' => $model->id,
            'body' => [
                'name' => $model->name
            ]
        ]);
    }
    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
