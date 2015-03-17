<?php

namespace Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

class Post {
    
    protected $id;
    protected $title;
    protected $text;
    
    public function setId($id) {
        $this->id = $id;
        return $this->id;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function setTitle($title) {
        $this->title = $title;
        return $this->title;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function setText($text) {
        $this->text = $text;
        return $this->text;
    }
    
    public function getText() {
        return $this->text;
    }
    
}

