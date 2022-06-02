<div  style="width: 94%; margin : 0 auto">
<?php

?>
  <h2>SEO Cho Bài Viết</h2>

  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="seo-main-tab" data-toggle="tab" href="#seo-main" 
        role="tab" aria-controls="nav-home" aria-selected="true">SEO</a>
        <a class="nav-item nav-link" id="seo-facebook-tab" data-toggle="tab" href="#seo-facebook" 
        role="tab" aria-controls="nav-profile" aria-selected="false">FACEBOOK</a>
        <a class="nav-item nav-link" id="seo-twitter-tab" data-toggle="tab" href="#seo-twitter" 
        role="tab" aria-controls="nav-contact" aria-selected="false">TWITTER</a>
    </div>
  </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="seo-main" role="tabpanel" aria-labelledby="seo-main-tab">
            <h5 class="mt-3">Thêm SEO chính</h5>
            <form id="fseomain" class="needs-validation"novalidate>
                <input type="hidden" name="id_news" value=""  required>

                <div class="form-group">
                <label for="title">Tiêu đề :</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-title" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" id="title" name="title" 
                placeholder="Nhập tiêu đề cho bài viết" onkeyup="limit(this,100,'#n-title')" 
                onkeydown="limit(this,100,'#n-title')" required>
                <div class="invalid-feedback">Vui lòng nhập tiêu đề cho bài viết</div>
                </div>

                <div class="form-group">
                <label for="description">Mô tả:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-description" class="text-danger">250</span> ký tự</span>
                <input type="text" maxlength="250" class="form-control" id="description" name="description" 
                placeholder="Nhập mô tả cho bài viết" onkeyup="limit(this,250,'#n-description')" 
                onkeydown="limit(this,250,'#n-description')" required>
                <div class="invalid-feedback">Vui lòng nhập mô tả cho bài viết</div>
                </div>
                
                <div class="form-group">
                <label for="keyword">Từ khóa :</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-keyword" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" id="keyword" name="keyword" 
                placeholder="Nhập mô tả bài viết" onkeyup="limit(this,100,'#n-keyword')" 
                onkeydown="limit(this,100,'#n-keyword')" required>
                <div class="invalid-feedback">Vui lòng nhập từ khóa cho bài viết</div>
                </div>
                
                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
        <div class="tab-pane fade" id="seo-facebook" role="tabpanel" aria-labelledby="seo-facebook-tab">

        </div>
        <div class="tab-pane fade" id="seo-twitter" role="tabpanel" aria-labelledby="seo-twitter-tab">

        </div>
    </div>
</div>

<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
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