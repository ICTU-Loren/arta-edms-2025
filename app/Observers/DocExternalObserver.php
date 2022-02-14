<?php

namespace App\Observers;

use App\Externals;

class DocExternalObserver
{
    /**
     * Handle the Documents "created" event.
     *
     * @param  \App\Models\Documents  $documents
     * @return void
     */
    public function created(Externals $externals)
    {
        // if (auth()->check()) {
        //     $externals->created_by_user_id = auth()->id();
        //     $externals->save();
        // }
    }

    /**
     * Handle the Documents "updated" event.
     *
     * @param  \App\Models\Documents  $documents
     * @return void
     */
    public function updated(Externals $externals)
    {
        //
    }

    /**
     * Handle the Documents "deleted" event.
     *
     * @param  \App\Models\Documents  $documents
     * @return void
     */
    public function deleted(Externals $externals)
    {
        //
    }

    /**
     * Handle the Documents "restored" event.
     *
     * @param  \App\Models\Documents  $documents
     * @return void
     */
    public function restored(Externals $externals)
    {
        //
    }

    /**
     * Handle the Documents "force deleted" event.
     *
     * @param  \App\Models\Documents  $documents
     * @return void
     */
    public function forceDeleted(Externals $externals)
    {
        //
    }
}
