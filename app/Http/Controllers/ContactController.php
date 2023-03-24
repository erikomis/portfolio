<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\SubmitRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function submit(SubmitRequest $request)
    {
        $validated = $request->validated();

        Mail::to('thecodeholic@gmail.com')
            ->send(new ContactMail($validated['name'], $validated['email'], $validated['message']));

        return $request->all();
    }
}
