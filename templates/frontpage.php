<?php include 'inc/header.php'; ?>

  <main role="main">

  //Main jumbotron for a primary marketing message or call to action
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3"><?php echo SITE_TITLE; ?></h1>
      <h3 class="display-6">Find a Job</h3>
      <form method="GET" action="index.php">
        <select class="form-control" name="category">
          <option value="0">Choose Category</option>
          <?php foreach($categories as $category): ?>
            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
          <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" class="btn btn-lg btn-success" value="FIND">
      </form>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <h3><?php echo $title; ?></h3>
    <?php foreach($jobs as $job): ?>
      <div class="row">
        <div class="col-md-10">
          <h4><?php echo $job->job_title; ?></h4>
          <p><?php echo $job->description; ?></p>
        </div>
        <div class="col-md-2">
          <a class="btn btn-primary" href="#">View</a>
        </div>
      </div>
      <hr>
    <?php endforeach; ?>





<?php include 'inc/footer.php'; ?>
