<?php

 class Movie{
   public $id;    //?private attributes
   public $title; //?private attributes
   public $genre; //? Enum class
   public $lang;  //? Enum class
   public $vote;
   public $poster_path;

/**
 * Movie Contructor 
 * @param integer $_id
 * @param string $_title
 * @param string $_genre
 * @param string $_lang
 * @param integer $_vote
 * @param string $_poster_path
 */
 public function __construct($_id,$_title,$_genre='action',$_lang='it',$_vote=1,$_poster_path='unkonwn'){
   $this->id=$_id;
   $this->title=$_title;
   $this->genre=$_genre;
   $this->lang=$_lang;
   $this->vote=$_vote;
   $this->poster_path=$_poster_path;
 }

 //?GETTER 
 /**
  * @return string title
  */
 public function getTitle(){
     return $this->title;
 }
 /**
  * @return string genre
  */
 public function getGenre(){
     return $this->genre;
 }
 /**
  * @return string lang
  */
 public function getLang(){
     return $this->lang;
 }
 /**
  * @return integer vote
  */
 public function getVote(){
     return $this->vote;
 }
 /**
  * @return string poster url
  */
 public function getPosterPath(){
     return $this->poster_path;
 }
/**
 * @return string render movie
 */
 public function  render()
 {
     return '<div class="movie">
     <h1>Titolo: '. $this->getTitle() .'</h1>
     <p>Genre: '. $this->getGenre() .'</br> Lingua:  '. $this->getLang() .'</p>
     <small>Voto: '. $this->getVote() .'/10 </small>
   </div>';
 }
}





