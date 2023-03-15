<?php

namespace App\Mail;

use App\Models\Evenementpage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMessageEvenement extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $title ;
    public $name ;
    public $location ;
    public $start_at ;
    public $end_at;
    public $id;
    public function __construct(string $title,string $name,string $location , string $start_at,string $end_at,int $id)
    {
        $this->title=$title;
        $this->name=$name;
        $this->location=$location;
        $this->start_at=$start_at;
        $this->end_at=$end_at;
        $this->id=$id;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Inscription évènement',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.messageEvenement',
            with:[
                'title'=> $this->title,
                'name'=>$this->name,
                'location'=> $this->location,
                'start_at'=>$this->start_at,
                'end_at'=>$this->end_at,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        $getFile=Evenementpage::where('evenement_id',$this->id)->get();
        $data=[];
        foreach ($getFile as $key => $item) {
            $x=Attachment::fromStorage(public_path('storage/1.jpg'));
           array_push($data,$x);
        }
        /*$data= [
            Attachment::fromStorage('/path/to/file'),
        ];*/
        /*return [
            Attachment::fromPath(public_path('storage/1.jpg')),
        ];
        */
        return $data;
       
    }
}