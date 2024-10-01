<x-layout>
  <div class="container">
    <div class="row p-lg-3">
      <div class="col">
        <h1>Tambah Buku</h1>
        <form>
          <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}" required>
          </div>
          <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="{{ old('penulis') }}" required>
          </div>
          <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select form-select-md mb-3" id="kategori" name="kategori" required>
              <option selected>Pilih kategori</option>
              <option value="Novel">Novel</option>
              <option value="Komik">Komik</option>
              <option value="Biografi">Biografi</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="sampul" class="form-label">Sampul Buku</label>
            <img class="img-preview img-fluid mb-3" width="250px">
            <input class="form-control" type="file" id="sampul" name="sampul" onchange="previewImage()" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    function previewImage() {
      const image = document.querySelector('#sampul');
      const imagePreview = document.querySelector('.img-preview');
      
      imagePreview.style.display = 'block';
      
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      
      oFReader.onload = function (oFREvent) {
        imagePreview.src = oFREvent.target.result;
      };
    }
  </script>
</x-layout>