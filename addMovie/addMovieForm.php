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

<!--Form Title-->
    <header class="page-header header container-fluid">
      <div class="description">
        <h1>Add a New Movie</h1>
<br>

<!--Form Start-->
    <main>
<div class="container">
  <form class="form form-horizontal">
    <div class="form-row">
      <div class="col">
        <label class="title-search" for="title">Title</label>
        <input class="form-control" id="title" placeholder="Movie Title">
      </div>
      <div class="col-sm-2">
        <label class="title-search"for="year">Release Year</label>
        <input class="form-control" id="year" placeholder="Release Year">
      </div>
      <div class="col">
        <label class="title-search"for="genre">Genre</label>
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
      <div class="col">
        <label class="title-search"for="movieType">Movie Type</label>
        <select list="movieType" class="form-control" id="movieType" placeholder="Release Year">
        <datalist id="movieType">
          <option value="">Select Type</option>
          <option value="Live Action">Live Action</option>
          <option value="Animated">Animated</option>
          <option value="Both">Both</option>
        </datalist>
      </select>
      </div>
    </div>
    <br>
    <br>
    <div class="form-row">
      <div class="col-sm-3"></div>
      <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="4K" value="4K">
  <label class="form-check-label title-search" for="inlineCheckbox1">4K UHD</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="bluRay" value="bluRay">
  <label class="form-check-label title-search" for="bluRay">Blu-Ray</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="dvd" value="dvd">
  <label class="form-check-label title-search" for="dvd">DVD</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="vhs" value="vhs">
  <label class="form-check-label title-search" for="vhs">VHS</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="digital" value="digital">
  <label class="form-check-label title-search" for="digital">Digital</label>
</div>
</div>
<br>
<div class="container">
  <div class="py-5 text-center">
<button class="btn btn-outline-secondary btn-lg" type="button">Add to Database</button>
<button class="btn btn-outline-secondary btn-lg" type="button">Add to Wish List</button>
</div>
</div>


</form>
</div>
</header>
</div>

  <!--Footer with JS Sources -->
  	<?php include "../common/footer.php" ?>

  </body>
  </html>
