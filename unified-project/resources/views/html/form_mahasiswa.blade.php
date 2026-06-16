<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa - HTML Module</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 40px 0; }
        .form-container { background: white; border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.15); padding: 40px; }
        h2 { color: #333; border-bottom: 3px solid #667eea; padding-bottom: 10px; margin-bottom: 30px; }
        .btn-submit { background: linear-gradient(135deg, #667eea, #764ba2); border: none; }
        .btn-submit:hover { opacity: 0.85; }
        .back-link { color: #667eea; text-decoration: none; font-weight: 600; display: inline-block; margin-bottom: 20px; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{ route('home') }}" class="back-link">← Kembali ke Dashboard</a>
                <div class="form-container">
                    <h2>📝 Form Data Mahasiswa</h2>
                    
                    <form action="{{ route('html.form.submit') }}" method="POST">
                        @csrf
                        <table class="table table-borderless">
                            <tr>
                                <td style="width: 180px; font-weight: 600;">NIM</td>
                                <td>: <input type="text" name="nim" class="form-control" style="width: 250px; display: inline-block;" required></td>
                            </tr>
                            <tr>
                                <td style="font-weight: 600;">Nama</td>
                                <td>: <input type="text" name="nama" class="form-control" style="width: 350px; display: inline-block;" size="40" required></td>
                            </tr>
                            <tr>
                                <td style="font-weight: 600;">Tgl Lahir</td>
                                <td>: <input type="date" name="tgl_lahir" class="form-control" style="width: 200px; display: inline-block;" required></td>
                            </tr>
                            <tr>
                                <td style="font-weight: 600;">Jenis Kelamin</td>
                                <td>: 
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" value="Laki-laki" id="jk_l">
                                        <label class="form-check-label" for="jk_l">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" value="Perempuan" id="jk_p">
                                        <label class="form-check-label" for="jk_p">Perempuan</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: 600; vertical-align: top;">Alamat di Bandung</td>
                                <td>: <textarea name="alamat" class="form-control" rows="4" cols="30" style="width: 350px; display: inline-block;"></textarea></td>
                            </tr>
                            <tr>
                                <td style="font-weight: 600;">Tinggal di</td>
                                <td>: 
                                    <select name="tinggal" class="form-select" style="width: 250px; display: inline-block;">
                                        <option value="">--pilih--</option>
                                        <option value="Kos">Kos/kontrakan</option>
                                        <option value="Saudara">Rumah saudara</option>
                                        <option value="Orang Tua">Rumah orang tua</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: 600; vertical-align: top;">Pilih 2 hobi yang paling disukai</td>
                                <td>: 
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="hobi[]" value="Science" id="hobi1">
                                        <label class="form-check-label" for="hobi1">Science</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="hobi[]" value="Technology" id="hobi2">
                                        <label class="form-check-label" for="hobi2">Technology</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="hobi[]" value="Art" id="hobi3">
                                        <label class="form-check-label" for="hobi3">Art</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="hobi[]" value="Sport" id="hobi4">
                                        <label class="form-check-label" for="hobi4">Sport</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <br>
                                    <button type="submit" class="btn btn-submit text-white">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>