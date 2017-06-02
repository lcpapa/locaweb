<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tweet
 *
 * @author Larissa
 */
class Tweet {
    public $followers_count;
    public $retweet_count;
    public $favourites_count;
    public $screen_name;
    public $created_at;
    public $text;
    public $id_str_Tweet;
    public $id_str_User;
    
    public function Tweet ($followersCount, $retweetCount, $favoritesCount, $screenName, $createdAt, $text_, $idStrTweet, $idStrUser){
        $this->followers_count = $followersCount;
        $this->favourites_count = $favoritesCount;
        $this->retweet_count = $retweetCount;
        $this->screen_name = $screenName;
        $this->created_at = $createdAt;
        $this->text = $text_;
        $this->id_str_tweet = $idStrTweet;
        $this->id_str_user = $idStrUser;
    }
    
    public function getFollowersCount(){
        return $this->followers_count;
    }
    
    public function getRetweetCount(){
        return $this->retweet_count;
    }
    
    public function getFavoritesCount(){
        return $this->favourites_count;
    }
    
    public function getScreenName(){
        return $this->screen_name;
    }
    
    public function getCreatAt(){
        return $this->created_at;
    }
    
    public function getText(){
        return $this->text;
    }
    
    public function setFollowers_count($followers_count) {
        $this->followers_count = $followers_count;
    }

    public function setRetweet_count($retweet_count) {
        $this->retweet_count = $retweet_count;
    }

    public function setFavorites_count($favorites_count) {
        $this->favourites_count = $favorites_count;
    }

    public function setScreen_name($screen_name) {
        $this->screen_name = $screen_name;
    }

    public function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    public function setText($text) {
        $this->text = $text;
    }
    
    public function getId_str_tweet() {
        return $this->id_str_tweet;
    }

    public function setId_str_tweet($id_str_tweet) {
        $this->id_str = $id_str_tweet;
    }
    
    public function getId_str_user() {
        return $this->id_str_user;
    }

    public function setId_str_user($id_str_user) {
        $this->id_str = $id_str_user;
    }
}

?>
