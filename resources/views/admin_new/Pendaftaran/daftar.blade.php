<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/daftar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>

    <div class="container">

        <div class="wrapper">

            <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <div class="side-image">
                    <img src="{{ asset('img/woman.png') }}">
                </div>
            </div>
            <div class="logo-container">
                <div class="logo-image">
                    <img src="{{ asset('img/dhs_logo.png') }}" alt="dhs-logo">
                </div>
            </div>
            <div class="form-wrapper">
                <h2>REGISTER</h2>
                <form action="{{ route('daftar.store') }}" method="POST" enctype="multipart/form-data"
                    class="custom-validation">
                    @csrf

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap') }}"
                            placeholder="Masukkan nama lengkap">
                        <span class="focus-border"></span>
                    </div>



                    <div class="form-row">
                        <div class="form-group">
                            <label for="tanggal">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                value="{{ old('tanggal_lahir') }}">
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>

                            <div class="select-wrapper">
                                <select id="gender" name="gender" required>
                                    <option value="">Pilih jenis kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <textarea rows="4" name="alamat" id="alamat" placeholder="Masukkan alamat lengkap">{{ old('alamat') }}</textarea>
                        <span class="focus-border"></span>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" id="asal_sekolah"
                                value="{{ old('asal_sekolah') }}" placeholder="Masukkan asal sekolah">
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group">
                            <label>Media Social <span>(opsional)</span></label>
                            <input type="text" name="sosmed" id="sosmed" value="{{ old('sosmed') }}"
                                placeholder="Masukkan media sosial">
                            <span class="focus-border"></span>
                        </div>
                    </div>



                    <div class="form-row">
                        <div class="form-group">
                            <label>Nomor Ponsel</label>
                            <input type="tel" name="nomor_ponsel" id="nomor_ponsel"
                                value="{{ old('nomor_ponsel') }}" placeholder="Masukkan nomor aktif">
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group">
                            <label>Alamat Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                placeholder="Masukkan email aktif">
                            <span class="focus-border"></span>
                        </div>
                    </div>

                    <label style="margin-left: 80px;">Bukti Pembayaran</label>
                    <div class="box">
                        <div class="upload-box" id="uploadArea">
                            <p id="uploadText">Drag and drop file here or <span>Upload File</span></p>
                            <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" accept="image/*"
                                required>
                            <img id="previewImage" style="display:none; width:100%; height:100%; object-fit:contain;">
                        </div>
                    </div>

                    <input type="hidden" name="status" value="0">

                    <div class="button-container">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="register.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
    const fileInput = document.getElementById('bukti_pembayaran');
    const preview = document.getElementById('previewImage');
    const text = document.getElementById('uploadText');
    const uploadBox = document.getElementById('uploadArea');

    // Preview saat pilih file
    fileInput.addEventListener('change', function() {
        showPreview(this.files[0]);
    });

    // FUNGSI PREVIEW
    function showPreview(file) {
        if (file && file.type.startsWith("image/")) {
            let reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = "block";
                text.style.display = "none";
                uploadBox.style.border = "2px solid #383880";
            };
            reader.readAsDataURL(file);
        }
    }

    // DRAG & DROP EVENTS
    uploadBox.addEventListener("dragover", (e) => {
        e.preventDefault();
        uploadBox.style.borderColor = "#007acc";
    });

    uploadBox.addEventListener("dragleave", () => {
        uploadBox.style.borderColor = "#383880";
    });

    uploadBox.addEventListener("drop", (e) => {
        e.preventDefault();
        uploadBox.style.borderColor = "#383880";

        const file = e.dataTransfer.files[0];
        fileInput.files = e.dataTransfer.files;
        showPreview(file);
    });
</script>

</body>

</html>
