<?php
class Review {
    public $id_user;
    public $id_penjual;
    public $id_review;
    public $kritik;
    public $rating;
    public $bukti;

    function submitReview() {
        echo 'Submit Review'
    }
    function seeReview() {
        echo 'see review'
    }
    function deletereview(){
        echo 'delete review'
    }
}