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
            <div class="border p-3 text-center" id="drop-zone" style="border-radius: 10px;">
              <p>Drag & drop file di sini atau klik untuk memilih file</p>
              <input class="form-control" type="file" id="sampul" name="sampul" onchange="previewImage(event)" required style="display: none;">
              <img id="img-preview" class="img-fluid my-3" width="250px" alt="Preview" style="display: none;">
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    const dropZone = document.getElementById('drop-zone');
    const sampulInput = document.getElementById('sampul');
    const imgPreview = document.getElementById('img-preview');

    dropZone.addEventListener('click', () => {
      sampulInput.click();
    });

    dropZone.addEventListener('dragover', (e) => {
      e.preventDefault();
      dropZone.classList.add('border-primary');
    });

    dropZone.addEventListener('dragleave', () => {
      dropZone.classList.remove('border-primary');
    });

    dropZone.addEventListener('drop', (e) => {
      e.preventDefault();
      dropZone.classList.remove('border-primary');
      const files = e.dataTransfer.files;
      if (files.length) {
        sampulInput.files = files;
        previewImage({ target: sampulInput });
      }
    });

    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function () {
        imgPreview.src = reader.result;
        imgPreview.style.display = 'block';
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
</x-layout>
