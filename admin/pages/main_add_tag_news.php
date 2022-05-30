<div style="margin: 0 auto; width : 94%">
  <h5>Bài viết này hiện có các từ khóa là :</h5>
   <div>
   <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseAddNewsTag" aria-expanded="false" aria-controls="collapseExample">
    Thêm Từ Khóa Cho Bài Viết
    </button>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseUpdateNewsTag" aria-expanded="false" aria-controls="collapseExample">
    Cập Nhật Từ Khóa
    </button>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseAddTag" aria-expanded="false" aria-controls="collapseExample">
    Thêm Từ Khóa Mới
    </button>
   </div>

    <div class="collapse" id="collapseAddNewsTag">
    <div class="card card-body">
    <h4 class="text-center">Thêm từ khóa cho bài viết</h4>
    <form id="fAddTagNews" class="needs-validation" enctype="multipart/form-data" novalidate>
    <div class="form-group">
        <label>Từ Khóa</label>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">1</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        <label class="form-check-label" for="inlineCheckbox2">2</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
  </form>
    </div>
  </div>

    <div class="collapse" id="collapseUpdateNewsTag">
    <div class="card card-body">
    <h4 class="text-center">Cập nhật từ khóa cho bài viết</h4>
    <form id="fAddTagNews" class="needs-validation" enctype="multipart/form-data" novalidate>
    <div class="form-group">
        <label>Từ khóa :</label>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">1</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        <label class="form-check-label" for="inlineCheckbox2">2</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  </form>
    </div>
  </div>

  <div class="collapse" id="collapseAddTag">
    <div class="card card-body">
    <h4 class="text-center">Thêm từ khóa mới</h4>
    <form id="fAddTagNews" class="needs-validation" novalidate>
    <div class="form-group">
    <div class="form-group">
      <label for="thumnail">Tên từ khóa :</label>
      <input type="text" class="form-control" name="name" id="name" required>
      <div class="invalid-feedback">Vui lòng nhập tên từ khóa</div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
  </form>
    </div>
  </div>

</div>

<div class="container-fluid mt-4">
    <div class="row">
      <div style="width: 94%; margin : 0 auto">
        <div class="row">
          <div class="col-xl-12">
            <table id="example" class="table table-striped table-bordered" style="width: 100%;">
              <thead>
                <th>Id</th>
                <th>Tên Từ Khóa</th>
                <th>Thời gian thêm </th>
                <th>Thao tác</th>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
  </div>

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

