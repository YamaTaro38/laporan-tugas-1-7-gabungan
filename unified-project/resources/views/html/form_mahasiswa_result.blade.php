<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 40px 0; }
        .result-container { background: white; border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.15); padding: 40px; }
        .back-link { color: #667eea; text-decoration: none; font-weight: 600; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <a href="{{ route('html.form') }}" class="back-link">← Kembali ke Form</a>
                <div class="result-container mt-3">
                    <h2>✅ Data Berhasil Disimpan</h2>
                    <hr>
                    @if(isset($data))
                        @foreach($data as $key => $value)
                            @if($key !== '_token')
                                <p><strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong> 
                                    @if(is_array($value))
                                        {{ implode(', ', $value) }}
                                    @else
                                        {{ $value }}
                                    @endif
                                </p>
                            @endif
                        @endforeach
                    @endif
                    <a href="{{ route('html.form') }}" class="btn btn-primary mt-3">Isi Form Lagi</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>