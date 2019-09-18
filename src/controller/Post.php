<?php

namespace App\Controller;

class Post
{

    private $listInsulte = [
        'connard',
        'pd',
        'salope'
    ];

    public function getPostPage()
    {
        return 'Je suis la page post';
    }

}