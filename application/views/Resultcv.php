<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <title><?= $title ?></title>
</head>

<body class="bg-light text-dark">
  <div class="container mt-5">
    <?php foreach ($basic as $isi) { ?>
      <div class="row">
        <div class="col-md-4">
          <div class="text-center">
            <img class="img-thumbnail" src="<?= base_url('uploads/photo/' . $isi->photo) ?>" alt="profile picture" style="width: 400px; height: 400px" ; />
          </div>
          <h3 class="pt-4" style="text-align: center"><?= $isi->fname  ?></h3>
          <h4 class="text-center pt-3"><?= $isi->email  ?></h4>
          <div class="row text-center pt-5">
            <div class="col-md-6">
              <h5>Phone Number</h5>
              <p><?= $isi->phonenum  ?></p>
            </div>
            <div class="col-md-6">
              <h5>Websites</h5>
              <p><?= $isi->website  ?></p>
            </div>
          </div>
          <hr />
          <div class="row text-center">
            <h5 class="pt-3">Address</h5>
            <ul>
              <li>
                <p><?= $isi->address1  ?></p>
              </li>
              <li>
                <p><?= $isi->address2  ?></p>
              </li>
              <li>
                <p><?= $isi->address3  ?></p>
              </li>
            </ul>
          </div>
        </div>
      <?php } ?>
      <!-- end of basic -->
      <!-- start of work ex -->
      <?php foreach ($works as $work) { ?>
        <div class="col-md-8">
          <h3>Work Experience</h3>
          <div class="row">
            <div class="col-md-6">
              <h5>Company Name</h5>
              <h4><?= $work->compname ?></h4>
              <p><?= $work->jobtit; ?></p>
            </div>
            <div class="col-md-6">
              <h5>Stard Date - End Date</h5>
              <h4><?= $work->startw . ' - ' . $work->endw; ?></h4>
            </div>
          </div>
          <ul>
            <li>
              <p><?= $work->otherwe ?></p>
            </li>
          </ul>
          <br />
        <?php } ?>
        <hr style="border: 3px solid black" />
        <!-- end of work -->
        <!-- start of edu -->
        <h3>Education</h3>
        <?php foreach ($edus as $edu) { ?>
          <div class="row">
            <div class="col-md-6">
              <h5>Course Name</h5>
              <h5><?= $edu->cname; ?></h5>
              <p><?= $edu->iname; ?></p>
            </div>
            <div class="col-md-6">
              <h5>Stard Date - End Date</h5>
              <h4><?= $edu->start . '-' . $edu->end; ?></h4>
            </div>
          </div>
          <ul>
            <li>
              <p><?= $edu->otheredu ?></p>
            </li>
          </ul>
        <?php } ?>
        <br />
        <hr style="border: 3px solid black" />
        <!-- end of edu -->
        <!-- start  for rest of basic -->
        <?php foreach ($basic as $isi) { ?>
          <h3>Qualification</h3>
          <ul>
            <li>
              <p><?= $isi->qualy; ?></p>
            </li>
          </ul>
          <br />
          <hr style="border: 3px solid black" />
          <h3>Interest</h3>
          <ul>
            <li>
              <p><?= $isi->interest ?></p>
            </li>
          </ul>
        <?php } ?>
        </div>
      </div>
      <!-- end for rest of basic -->
  </div>
  <script>
    window.print();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>