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
<!-- ///  PHP ///// -->
<?php
session_start();
$_SESSION['note_details'] ?? '';



if (isset($_GET['delete'])) {
     $delete_key = $_GET['delete'];
     unset($_SESSION['note_details'][$delete_key]);
     $_SESSION['note_details'] = array_values($_SESSION['note_details']);
     header('location: saved_note.php');
}
// }
// exit;
?>

<body>
    <div class="position-relative">
        <div class="container-fluid  p-0">
            <div class="note-header pt-5 pb-3 w-100">
                <div class="header-info text-white  fw-bold d-flex justify-content-between">
                    <button class="btn button">
                        <i class="fa fa-arrow-back text-white">
                        </i>
                    </button>
                    <p class="text-white">Notes Saved</p>
                    <div class=""></div>
                </div>
            </div>
            <div class="note-body p-3">

                <?php
                    // echo date('D-tS-m-Y');

                    $no = 1; ?>
                <?php if ($_SESSION != null) { ?>
                <?php foreach ($_SESSION['note_details'] as $notes => $notebook) : ?>
                <div class="card mb-3">
                    <div class="card-header bg-transparent" title="Note number">
                        <b> <i>Note. <?= $no++ ?> </i></b>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" title="Title"> Title: <?= $notebook['title']; ?></h5>
                        <p class="card-text" title="Content"> <?= $notebook['note']; ?></p>
                    </div>
                    <div class="card-footer text-muted  bg-transparent d-flex justify-content-between px-4">
                        <i title="Date"><?= $notebook['date']; ?></i>
                        <form action="" method="get">
                            <!-- <input type="submit" name="delete" value="<?= $dkey; ?>"> -->
                            <div class="d-flex justify-content-between align-items-center bg-dager">
                                <a href="update.php?edit=<?= $notes;?>"
                                    class="edit fa fa-edit text-primary text-decoration-none">
                                    <!-- <button type="submit" name="edit" title="edit" value="<?= $notes; ?>" class="border-0 bg-transparent"> -->

                                    <!-- <i class="fa fa-edit text-primary"></i> -->
                                    <!-- </button>  -->
                                </a>

                                <button type="submit" name="delete" title="delete" value="<?= $notes; ?>"
                                    class="border-0 bg-transparent">
                                    <i class="delete fa fa-trash-alt text-danger"></i>
                                </button>



                            </div>
                        </form>
                    </div>
                </div>
                <?php
                         // echo '<pre>';
                         // var_dump(count($_SESSION['note_details']));
                         // echo '</pre>';
                         endforeach;
                    }  ?>

                <a href="create.php">
                    <button type="button" class="add-button add btn rounded rounded-pill bg-primary " title="Add Note">
                        <i class="fa fa-plus text-white"></i>
                    </button>
                </a>
                <?php


                    if ($_SESSION == null) {
                         $no_messages = 'No Notes Found';
                         echo '<div class="text-center"><i><small>'  . $no_messages . '</small></i></div>';
                         exit;
                    }
                    if (count($_SESSION['note_details']) <= 0) {
                         $no_messages = 'No Notes Found';
                         echo '<div class="text-center"><i><small>'  . $no_messages . '</small></i></div>';
                         exit;
                    }
                    ?>

            </div>
        </div>

    </div>
    <!-- <div class="add-button w-25 text-end p-2 mt-5 pb-5 d-flex justify-content-center flex-end" style="float: rght;"> -->

    <!-- <a href="create.php">
               <button type="button" class="add-button add btn rounded rounded-pill bg-primary  ">
                    <i class="fa fa-plus text-white"></i>
               </button>
          </a> -->

    <!-- </div> -->
    <script src="/js/bootstrap.js"></script>

</body>

</html>

<?php