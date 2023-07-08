<?php

namespace App\Policies;

use App\User;
use App\Contact;

class ContactPolicy
{
    public function view(User $user, Contact $contact)
    {
        return $user->id === $contact->user_id;
    }
}
