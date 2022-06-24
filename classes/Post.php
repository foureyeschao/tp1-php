<!-- classe de Post -->

<?php

class Post{
  protected $id = null;
  protected $creatorId = null;
  protected $title = null;
  protected $content = null;
  protected $dateUpdated = null;
  protected $datePublished = null;

  function getId() {
    return $this->id;
  }

  function getCreatorId() {
    return $this->creatorId;
  }

  function getTitle() {
    return $this->title;
  }

  function getContent() {
    return $this->content;
  }

  function getDateUpdated() {
    return $this->dateUpdated;
  }

  function getDatePublished() {
    return $this->datePublished;
  }

  function getIntros($count = 150) {
     return substr(strip_tags($this->content),0,$count) . '...';
  }
  


}