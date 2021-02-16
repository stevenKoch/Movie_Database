<!doctype html>
<html lang="en">
  <head>
    <!-- Common Header Info -->
  	<?php include "../common/header.php" ?>
    <title>Add Movie Form</title>
  </head>
  <body>
    <!--Main Navigation Bar-->
    <?php include "../common/navBar.php" ?>

<!--Form Title and RMW Logo Start-->
    <header class="page-header container-fluid">
      <div class="py-5 text-center">
        <h2>Add a New Movie</h2>
      </div>
<!--Form Title and RMW Logo End-->
    </header>
    <main>
<div class="container">
  <form class="form-horizontal">
    <div class="form-row">
      <div class="col-sm-4">
        <label for="title">Title</label>
        <input class="form-control" id="title" placeholder="Movie Title">
      </div>
      <div class="col-sm-2">
        <label for="year">Release Year</label>
        <input class="form-control" id="year" placeholder="Release Year">
      </div>
      <div class="col-sm-2">
        <label for="genre">Genre</label>
        <select list="genre" class="form-control" id="genre">
        <datalist id="genre">
          <option value="">Select Genre</option>
          <option value="Action/Adventure">Action/Adventure</option>
          <option value="Comedy">Comedy</option>
          <option value="Drama">Drama</option>
          <option value="Fantasy">Fantasy</option>
          <option value="Historical Fiction">Historical Fiction</option>
          <option value="Horror">Horror</option>
          <option value="Mystery">Mystery</option>
          <option value="Romance">Romance</option>
          <option value="Romantic Comedy">Romantic Comedy</option>
          <option value="Science Fiction">Science Fiction</option>
          <option value="Super Hero">Super Hero</option>
          <option value="Thriller">Thriller</option>
          </datalist>
        </select>
      </div>
      <div class="col-sm-2">
        <label for="movieType">Movie Type</label>
        <select list="movieType" class="form-control" id="movieType" placeholder="Release Year">
      </div>




</div>
</div>
</form>
</div>
<br>
<br>
  <!--Footer with JS Sources -->
  	<?php include "../common/footer.php" ?>
  </body>
  </html>
