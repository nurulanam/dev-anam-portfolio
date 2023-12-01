<?php

namespace App\Listeners;

use App\Events\ContactFormEvent;
use App\Notifications\ContactFormNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class ContactFormListner
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ContactFormEvent $event): void
    {
        $contact_form_details = $event->contactForm;

        Notification::route('mail', 'nurulanam.bd@gmail.com')->notify(new ContactFormNotification($contact_form_details));
    }
}
