<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'subject' => ['nullable', 'string', 'max:150'],
            'phone' => ['nullable', 'string', 'max:30'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $body = "New enquiry from the website contact form\n\n"
            . 'Name: ' . $validated['name'] . "\n"
            . 'Email: ' . $validated['email'] . "\n"
            . 'Phone: ' . ($validated['phone'] ?? '-') . "\n"
            . 'Subject: ' . ($validated['subject'] ?? '-') . "\n\n"
            . $validated['message'];

        try {
            Mail::raw($body, function ($mail) use ($validated) {
                $mail->to(config('site.email_primary'))
                    ->replyTo($validated['email'], $validated['name'])
                    ->subject('Website Enquiry: ' . ($validated['subject'] ?: 'General'));
            });
        } catch (\Throwable $e) {
            // Mail transport not configured or unavailable - keep the enquiry in the logs
            Log::warning('Contact form mail failed: ' . $e->getMessage(), $validated);
        }

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you for your message, ' . $validated['name'] . '! We will get back to you shortly. For urgent matters call us on ' . config('site.phone_primary') . '.');
    }
}
