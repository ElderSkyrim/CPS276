<?php

require_once 'Db_conn.php';
require_once 'Pdo_methods.php';

class Date_time {

    private $pdo;

    public function __construct() {
        $this->pdo = new PdoMethods();
    }

    public function checkSubmit() {

        if(isset($_POST['addNote'])) {
            return $this->addNote();
        }

        if(isset($_POST['getNotes'])) {
            return $this->getNotes();
        }

        return "";
    }

    private function addNote() {

        if(empty($_POST['dateTime']) || empty(trim($_POST['note']))) {
            return "<div class='alert alert-danger'>
                        You must enter a date, time, and note.
                    </div>";
        }

        $timestamp = strtotime($_POST['dateTime']);

        $sql = "INSERT INTO note(date_time,note)
                VALUES(:date_time,:note)";

        $bindings = [
            [":date_time",$timestamp,"int"],
            [":note",trim($_POST['note']),"str"]
        ];

        $result = $this->pdo->otherBinded($sql,$bindings);

        return "<div class='alert alert-success'>
                    Note Added
                </div>";
    }

    private function getNotes() {

        if(empty($_POST['begDate']) || empty($_POST['endDate'])) {
            return "<div class='alert alert-danger'>
                    No notes found for the date range selected
                    </div>";
        }

        $begDate = strtotime($_POST['begDate']." 00:00:00");
        $endDate = strtotime($_POST['endDate']." 23:59:59");

        if($begDate > $endDate) {
            return "<div class='alert alert-danger'>
                    Beginning date cannot be after ending date.
                    </div>";
}

        $sql = "SELECT date_time, note
                FROM note
                WHERE date_time BETWEEN :begDate AND :endDate
                ORDER BY date_time DESC";

        $bindings = [
            [":begDate",$begDate,"int"],
            [":endDate",$endDate,"int"]
        ];

        $records = $this->pdo->selectBinded($sql,$bindings);

        if(count($records) == 0){
            return "<div class='alert alert-danger'>
                    No notes found for the date range selected
                    </div>";
        }

        $output = "
            <table class='table table-bordered'>
                <tr>
                    <th>Date and Time</th>
                    <th>Note</th>
                </tr>";

        foreach($records as $row){

            $formattedDate =
                date("m/d/Y h:i a",$row['date_time']);

            $output .= "
                <tr>
                    <td>{$formattedDate}</td>
                    <td>{$row['note']}</td>
                </tr>";
        }

        $output .= "</table>";

        return $output;
    }
}
?>