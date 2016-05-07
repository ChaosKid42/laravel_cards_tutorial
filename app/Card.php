<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

	protected $fillable = ['title'];

    public function notes()

    {
    	return $this->hasMany(Note::class);
    }

    
    public function addNote(Note $note, $user_id)

    {
    	$note->user_id = $user_id;
    	$this->notes()->save($note);
    }

}
