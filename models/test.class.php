<?php

class test {
    // database connection link
    protected $db;

    // curl instance
    protected $curl;

    public function __construct() {
        $this->db = new db();
        $this->curl = new curl();
    }

    public function logIn() {
        $forumDetails = $this->db->getForumDetails(1);
        if (!empty($forumDetails)) {
            $accountDetails = $this->db->getAccountDetails(1);
            $curlConneciton = $this->curl->connect($forumDetails['link']);
            return $curlConneciton;
            //return $accountDetails;
        }
    }
}
