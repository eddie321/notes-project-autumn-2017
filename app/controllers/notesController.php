<?php

namespace app\controllers;

// use our implementation of view
use \codingbootcamp\tinymvc\view;
use \app\Note;

class notesController
{
    public function listing()
    {
        $note = Note::find(1);

        $document = new view('document');

        $list = new view('notes/list');
        $list->note = $note;
        
        // "give" the variable $content to the template
        $document->content = $list;

        return $document;
    }

    public function edit()
    {
        $note = new \app\Note();
        $note->title = 'This is my first note';
        $note->text = 'This is the text of my first note.';
        $note->added_at = date('Y-m-d H:i:s');
        $note->insert();

        $document = new view('document');
        
        // "give" the variable $content to the template
        $document->content = 'Here we will be editting the note';

        return $document;
    }
}