<?php
    class book{
        public $title;
        public $author;
        public $publish_date;

        public function about()
        {
            echo('The title of book: '.$this->title. 'The author: '.$this->author);
        }
    }
?>