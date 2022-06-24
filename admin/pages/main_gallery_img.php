<?php
    $sql = "SELECT * FROM `gallery` WHERE `id_gallery` = '$id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0 ){
        while ($rows = mysqli_fetch_array($result)){
?>
<div style="margin: 0 auto; width : 94%">
<?php 
    $sql_img = "SELECT * FROM `gallery_img` WHERE `id_gallery` = '$id'";
    $result_img = mysqli_query($conn,$sql_img);
    if(mysqli_num_rows( $result_img) > 0 ){
        while ($rows_img = mysqli_fetch_array($result)){
?>
  <h3>Thêm ảnh cho dòng xe <span class="text-primary"><?php print $rows['name']?></span></h3>


  <form id="fAddGalleryImg" class="needs-validation" enctype="multipart/form-data" novalidate>
    <input type="hidden" value="<?php print $id ?>" name="id_gallery">
    <div class="form-group">
      <label for="thumnail">Ảnh dòng xe :</label>
      <input type="file" class="form-control" name="gallery_img[]" id="gallery_img" multiple required>
      <div class="invalid-feedback">Vui lòng nhập ảnh dòng xe</div>
    </div>

    <button type="submit" class="btn btn-primary">Thêm</button>

  </form>
<?php
        }
    }
?>
</div>
<?php
    }//Kết thúc vòng lặp while
}//Kết thúc vòng lặp if
?>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>