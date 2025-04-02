<?php
session_start();
?>
<?php
$_SESSION['note_details'] ?? '';

if (isset($_GET['edit'])) {
      $_GET['edit'];
     // echo 
     // var_dump($_SESSION['note_details'][$_GET['edit']]);
     $edit = $_SESSION['note_details'][$_GET['edit']];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="/css_FA/all.css">
     <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" href="/css/bootstrap.css">
     <title>INSERT NOTE | NOTE</title>
</head>


<body>
     <div class="container-fluid p-0">
          <div class="note-header pt-5 pb-3 w-100 position-relative">
               <div class="header-info text-white  fw-bold d-flex justify-content-between ps-2 align-items-center">
                    <button class="btn button">
                         <a href="saved_note.php">
                              <i class="fas fa-2x fa-chevron-left text-white"></i>
                         </a>
                    </button>
                    <p class="text-white">Edit Note</p>
                    <div class=""></div>
               </div>
          </div>
          <div class="note-body p-5">
               <form action="create-action.php" method="post">
                    <small class="text-danger"> 
                         <?= $_SESSION['message'] ?? '' ;?> 
                    </small> <br>
                    <label for="title">Title</label> 
                    <input type="text" name="title" id="title" class="input-text p-2 ps-4 w-100" placeholder="Enter Title" value="<?= $edit['title']?>"> <br>
                    <small class="text-danger"> 
                         <?= $_SESSION['message'] ?? '' ;?> 
                    </small> <br>
                    <label for="note">Note</label> <br>
                    <textarea name="note" id="note" cols="40" rows="10" class=" w-100  p-2 ps-4" placeholder="Enter Note"><?= $edit['note']?></textarea> <br> 
                    <small class="text-danger"> 
                         <?= $_SESSION['message'] ?? '' ;?> 
                    </small> <br>
                    <!-- <label for="date">Date</label> <br>
                    <input type="date" name="date" class="date w-100 p-2 ps-4" id="date"><br> -->
                   <br>
                    <input type="submit" name="submit" value="Edit" class="btn fw-bold text-black button w-100">

                    <!-- //////////

                         <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Light card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> -->
               </form>
          </div>

     </div>


     <script src="/js/bootstrap.js"></script>
</body>

</html>
<?php
unset($_SESSION['message']);
?>