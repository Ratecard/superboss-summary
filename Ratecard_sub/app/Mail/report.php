<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class report extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var string
     */
    protected $id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = "https://api.ratecard.io/v1/reports/$this->id";
        $response = Http::withToken(config('app.ratecard_token'))->get($url);
        $data = $response->json();

        return $this->markdown('emails.report' ,[
            'report' => $data
        ]);
    }
}
