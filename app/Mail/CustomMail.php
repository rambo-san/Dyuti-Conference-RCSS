<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

// use Illuminate\Contracts\Queue\ShouldQueue;

class CustomMail extends Mailable
{
    use Queueable, SerializesModels;

    public $view_blade;
    public $subject;
    public $content;
    public $attach_files;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {


        $this->view_blade = $data["view_blade"];
        $this->subject = $data["subject"];
        $this->content = $data["content"];
        $this->from_mail = isset($data["from"]) ? $data["from"] : config('constant.email');
        $this->from_name = isset($data["from"]) ? $data["from_name"] : config('constant.project_name');
        $this->attach_files = isset($data["attach_files"]) ? $data["attach_files"] : [];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $view = $this->from($this->from_mail, $this->from_name)
            ->subject($this->subject)
            ->view($this->view_blade);
 
        foreach ($this->attach_files as $file) {


            $view->attach($file["file"], $file["options"]);
        }


        return $view;
    }
}
