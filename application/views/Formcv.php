<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= $title ?></title>
  <link rel="icon" href="<?= base_url('uploads/') ?>cv logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="<?= base_url('assets/css/') ?>stylecv.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
  <div class="cont mt-5 mb-3">
    <div class="row">
      <div class="col-4">
        <button class="bg-dark text-light" style="border: none; border-radius: 10px">back</button>
      </div>
      <div class="col-8" style="display: flex">
        <button class="bg-dark text-light" style="flex: 1; border: none; border-radius: 10px">help</button>
        <?php foreach ($id_users as $id_user) { ?>
          <a href="<?= base_url('User/view_cv/' . $id_user->id) ?>"><button class="ms-3 bg-dark text-light" style="flex: 1; border: none; border-radius: 10px">quick preview</button></a>
        <?php } ?>
        <button class="ms-3 bg-dark text-light" style="flex: 1; border: none; border-radius: 10px" onclick="submitForm()">save</button>
        <button class="ms-3 bg-dark text-light" style="flex: 1; border: none; border-radius: 10px">download</button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="formcontrol">
      <div class="cont">
        <div class="d-flex align-items-start bg-dark text-light" style="min-height: 50vh">
          <div class="nav flex-column col-3 nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Basic Information</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">Work Experience</button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="true">Education</button>
          </div>
          <div class="tab-content p-3 border border-dark shadow-lg" style="width: 100%; min-height: 50vh" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
              <!-- start basic -->
              <div class="row">
                <h4>Basic Information</h4>
              </div>
              <form method="POST" enctype="multipart/form-data" action="<?= base_url('Cv/inputCv') ?>" id="f1">
                <div class="row">
                  <div class="col-6">
                    <div class="mb-3">
                      <label for="binffname" class="form-label">Full name</label>
                      <input type="text" class="form-control" name="fname" id="binffname" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="m-auto">
                      <label for="binfemail" class="form-label">E-mail address</label>
                      <input type="email" class="form-control" name="email" id="binfemail" aria-describedby="emailHelp" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="mb-3">
                      <label for="binfpnum" class="form-label">Phone number</label>
                      <input type="text" class="form-control" name="phonenum" id="binfpnum" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="m-auto">
                      <label for="binfweb" class="form-label">Websites</label>
                      <input type="text" class="form-control" name="website" id="binfweb" />
                    </div>
                  </div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-6">
                    <div class="mb-3">
                      <label for="binfal1" class="form-label">Address line 1</label>
                      <input type="text" class="form-control" name="address1" id="binfal1" />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="m-auto">
                      <label for="binfal2" class="form-label">Address line 2</label>
                      <input type="text" class="form-control" name="address2" id="binfal2" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="mb-3">
                      <label for="binfal3" class="form-label">Address line 3</label>
                      <input type="text" class="form-control" name="address3" id="binfal3" />
                    </div>
                  </div>
                </div>
                <label for="qtarea" class="form-label">Qualifications</label>
                <textarea class="form-control" name="qualy" id="qtarea" rows="8"></textarea>
                <label for="itarea" class="form-label">Interest</label>
                <textarea class="form-control" name="interest" id="itarea" rows="8"></textarea>
                <div class="row">
                  <div class="col-6">
                    <label class="form-label" for="upimg">Unggah foto</label>
                    <input type="file" class="form-control mb-3" name="photo" id="upimg" />
                  </div>
                </div>
                <?php foreach ($id_users as $id_user) { ?>
                  <input type="hidden" name="id_user" value="<?= $id_user->id ?>">
                <?php } ?>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
            <!-- end of basic -->
            <!-- start work  -->
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
              <div class="row">
                <h4>Work Experience</h4>
              </div>
              <div class="sets" id="sets">
                <div class="set">
                  <form method="POST" enctype="multipart/form-data" action="<?= base_url('Cv/inputWe') ?>" id="f2">
                    <div class="row">
                      <div class="col-6">
                        <div class="mb-3">
                          <label for="wejobttl" class="form-label">Job title</label>
                          <input type="text" name="jobtit" class="form-control" id="wejobttl" />
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="m-auto">
                          <label for="wecname" class="form-label">Company name</label>
                          <input type="text" name="compname" class="form-control" id="wecname" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="mb-3">
                          <label for="wesd" class="form-label">Start date</label>
                          <input type="text" name="startw" class="form-control" id="wesd" />
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="m-auto">
                          <label for="weed" class="form-label">End date</label>
                          <input type="text" name="endw" class="form-control" id="weed" value="" />
                        </div>
                      </div>
                    </div>
                    <label for="wetarea" class="form-label">Other information</label>
                    <textarea class="form-control" name="otherwe" id="wetarea" rows="5"></textarea>
                    <input type="hidden" name="id_user" value="<?= $id ?>">
                    <?php foreach ($id_users as $id_user) { ?>
                      <input type="hidden" name="id_user" value="<?= $id_user->id ?>">
                    <?php } ?>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- end of work -->
            <!-- start of edu -->
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
              <div class="row">
                <h4>Education</h4>
              </div>
              <div class="sets2">
                <div class="set">
                  <form method="POST" action="<?= base_url('Cv/inputEdu') ?>" id="f3">
                    <div class="row">
                      <div class="col-6">
                        <div class="mb-3">
                          <label for="ecname" class="form-label">Course name</label>
                          <input type="text" name="cname" class="form-control" id="ecname" />
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="m-auto">
                          <label for="einame" class="form-label">Institution name</label>
                          <input type="text" name="iname" class="form-control" id="einame" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="mb-3">
                          <label for="esd" class="form-label">Start date</label>
                          <input type="text" name="start" class="form-control" id="esd" />
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="m-auto">
                          <label for="eed" class="form-label">End date</label>
                          <input type="text" name="end" class="form-control" id="eed" />
                        </div>
                      </div>
                    </div>
                    <label for="etarea" class="form-label">Other information</label>
                    <textarea class="form-control" name="otheredu" id="etarea" rows="5"></textarea>
                    <?php foreach ($id_users as $id_user) { ?>
                      <input type="hidden" name="id_user" value="<?= $id_user->id ?>">
                    <?php } ?>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- end of edu -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    submitForm = function() {
      document.getElementById("f1").submit();
      document.getElementById("f2").submit();
      document.getElementById("f3").submit();
    }
  </script>
  <script src="<?= base_url('assets/js/') ?>script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>