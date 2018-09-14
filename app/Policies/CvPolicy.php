<?php

namespace WebPro\Policies;

use WebPro\User;
use WebPro\Cv;
use Illuminate\Auth\Access\HandlesAuthorization;

class CvPolicy
{
    use HandlesAuthorization;

    public function before($user,$ability){
   
        if($user->is_admin and $ability !='delete'){
        return true;
        }
     }
    /**
     * Determine whether the user can view the cv.
     *
     * @param  \WebPro\User  $user
     * @param  \WebPro\Cv  $cv
     * @return mixed
     */
    public function view(User $user, Cv $cv)
    {
        return true;
    }

    /**
     * Determine whether the user can create cvs.
     *
     * @param  \WebPro\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the cv.
     *
     * @param  \WebPro\User  $user
     * @param  \WebPro\Cv  $cv
     * @return mixed
     */
    public function update(User $user, Cv $cv)
    {
      // return $user->id === $cv->user_id;
        return $user->id === $cv->user_id;
    }

    /**
     * Determine whether the user can delete the cv.
     *
     * @param  \WebPro\User  $user
     * @param  \WebPro\Cv  $cv
     * @return mixed
     */
    public function delete(User $user, Cv $cv)
    {
        return $user->id === $cv->user_id;
    }
}
