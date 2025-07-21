<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Tim</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }



.form-group {
    margin-bottom: 15px;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

input, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box; /* Biar padding nggak ngaruh ke width */
}

input:focus, textarea:focus {
    border-color: #0054ad;
    outline: none;
}

.btn-container {
    display: flex;
    justify-content: space-between;
}

.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

.btn-submit {
    background-color: #003e80;
    color: white;
}

.btn-submit:hover {
    background-color: #0054ad;
}

.btn-reset {
    background-color: #ccc;
    color: black;
}

.btn-reset:hover {
    background-color: #b0b0b0;
}

    </style>
</head>
<body>

    <div class="form-container">
        <h2>Join Our Team</h2>
        <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data" class="custom-validation">
            @csrf

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ old('nama') }}" required>
            </div>

            <div class="form-group">
                <label>Profesi</label>
                <input type="text" name="roles" value="{{ old('roles') }}" required>
            </div>

            <div class="form-group">
                <label>Profil Singkat</label>
                <textarea name="desc" rows="4" required></textarea>
                {{ old('desc') ? strip_tags(old('desc')) : '' }}
            </div>

            <div class="form-group">
                <label>Unggah Foto Profil (max. 2MB)</label>
                <input type="file" name="foto" data-max-file-size="2M" data-allowed-file-extensions="jpg png jpeg" required>
            </div>

            <div class="form-group">
                <label>Unggah CV (max. 2MB)</label>
                <input type="file" name="cv" data-max-file-size="2M" accept="application/pdf" required>
            </div>
            
            <input type="hidden" name="status" value="0">

            <div class="btn-container">
                <button type="submit" class="btn btn-submit">Submit</button>
                <button type="reset" class="btn btn-reset">Reset</button>
            </div>
        </form>
    </div>

</body>
</html>
