<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Mail\DocumentReadyMail;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;

class GenerateAndSendPdfJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */

    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $pdf = Pdf::loadView('pdf.document', ['name' => $this->data['name']]);
        $path = storage_path('app/temp/' . $this->data['name'] . '_doc.pdf');
        file_put_contents($path, $pdf->output());

        Mail::to($this->data['email'])->send(new DocumentReadyMail($this->data['name'], $path));

        unlink($path); // Delete the file after sending the email
    }
}
