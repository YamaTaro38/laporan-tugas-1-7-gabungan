<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum AJAX - Web Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 40px 0; }
        .ajax-container { background: white; border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.15); padding: 40px; }
        h1 { color: #333; text-align: center; }
        #data { margin-top: 20px; padding: 15px; border: 1px solid #ddd; border-radius: 5px; min-height: 100px; background-color: #fafafa; max-height: 400px; overflow-y: auto; }
        .message { padding: 10px; margin: 5px 0; background-color: #e3f2fd; border-left: 4px solid #2196F3; border-radius: 3px; }
        .back-link { color: rgba(255,255,255,0.9); text-decoration: none; font-weight: 600; }
        .back-link:hover { text-decoration: underline; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('home') }}" class="back-link">← Kembali ke Dashboard</a>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <div class="ajax-container">
                    <h1>🔄 Praktikum Web Service</h1>
                    <h3 style="text-align:center; color: #666;">AJAX dengan jQuery</h3>
                    
                    <form id="form1">
                        <div class="form-group text-center mb-3">
                            <input type="text" name="pesan" id="msg" class="form-control" placeholder="Masukkan pesan Anda..." style="width: 70%; display: inline-block;" />
                            <input type="button" value="Shout!" id="shoutbutton" class="btn btn-success" />
                        </div>
                    </form>
                    
                    <hr>
                    <h5>Hasil Response dari Server:</h5>
                    <div id="data"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Set the AJAX URL to the Laravel route
            var ajaxUrl = "{{ route('ajax.shout') }}";
            
            $("#shoutbutton").click(function() {
                var pesan = $("#msg").val();
                
                if (pesan.trim() === "") {
                    $("#data").append("<div class='message' style='background-color:#ffebee; border-left-color:#f44336;'>⚠️ Silakan masukkan pesan terlebih dahulu!</div>");
                    return;
                }
                
                $.ajax({
                    type: "GET",
                    url: ajaxUrl,
                    data: $("#form1").serialize(),
                    success: function(rsp) {
                        $("#data").append("<div class='message'>" + rsp + "</div>");
                        $("#msg").val("");
                        $("#data").scrollTop($("#data")[0].scrollHeight);
                    },
                    error: function(rsp) {
                        alert("Error: " + rsp.status + " - " + rsp.statusText);
                    }
                });
            });
            
            $("#msg").keypress(function(event) {
                if (event.which === 13) {
                    event.preventDefault();
                    $("#shoutbutton").click();
                }
            });
        });
    </script>
</body>
</html>