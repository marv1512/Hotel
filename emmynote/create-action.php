<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] = 'POST') {
     $title = $_POST['title'];
     $note = $_POST['note'];
     // $d = $_POST['date'];
     $date = date('D-dS-m-Y');
     // $submit = $_POST['submit'];

     // $_SESSION['note_details'] = $note_details;
     if(empty($title) || empty($note) || empty($date)){
          echo $_SESSION['message'] = ' <b>* </b> Field Must no be Empty!';
     header('location: create.php');

     }
     if(!empty($title) && !empty($note) && !empty($date)){

     if (!empty(($_SESSION['note_details']))) {
          $note_details = [];
     }
     $_SESSION['note_details'][] = [
          'title' => $title,
          'note' => $note,
          'date' => $date,
     ];
     // $_SESSION['note_details'] = $note_details;
     // echo '<pre>';
     // var_dump($_SESSION['note_details']);

     header('location: saved_note.php');
     exit;
}
}else{
     echo '<h1 class="text-red"> Error Loading Page'. '</h1>';
}