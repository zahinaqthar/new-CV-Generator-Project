<div class="banner">
  <div class="container">
    <h1>CV Maker</h1>
    <h2>Create beautiful, professional resumes in minutes, <b>free</b>
      <?php foreach ($id_users as $id) { ?>
        <a href="<?= base_url('Cv/form_fill/' . $id->id) ?>" class="button1">create a CV now</a>
    </h2>
  <?php } ?>
  <div class="newDec">
    <img src="<?= base_url('uploads/') ?>second-cvtemplates-cropped.png" class="imgproperty" />
  </div>
  <div class="textinfo">
    <div class="c1">
      <p class="s1">Simple, quick & absolutely <strong>FREE</strong></p>
    </div>
    <div class="c2">
      <p class="s2">Write Your resumes effrtessly with the super simple Interface</p>
    </div>
    <div class="c3">
      <p class="s3">CV maker hosts your resumes for you to share with the World</p>
    </div>
  </div>
  </div>
</div>

<hr />

<div class="sample">
  <div class="container">
    <h2><u> wide range of templates to choose from</u></h2>
    <div class="imgcont">
      <a href="">
        <img src="<?= base_url('uploads/') ?>cv1.jpg" alt="" class="imgsrc1" />
      </a>
      <a href="">
        <img src="<?= base_url('uploads/') ?>cv2.png" alt="" class="imgsrc2" />
      </a>
      <a href="">
        <img src="<?= base_url('uploads/') ?>cv3.jpg" alt="" class="imgsrc3" />
      </a>
      <a href="">
        <img src="<?= base_url('uploads/') ?>CVlsc1.png" alt="" class="imglsc1" />
      </a>
      <a href="">
        <img src="<?= base_url('uploads/') ?>cvlsc2.jpg" alt="" class="imglsc2" />
      </a>
    </div>
  </div>