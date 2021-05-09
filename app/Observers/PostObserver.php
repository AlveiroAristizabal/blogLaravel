<?php

namespace App\Observers;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
class PostObserver
{
    public function creating(Post $post) 
    {
        if (! \App::runningInConsole()) {
                $post->user_id = auth()->user()->id ;
        }
    }
    function deleting (Post $post)
    {
        if ($post->image) {  //alv imagen
            Storage::delete($post->image->url); //alv imagen
        }
    }
}
