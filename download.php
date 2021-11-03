<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'header.php' ?>
    <title>Download SAVILE</title>
</head>
<body>
    <div id="pesan" class="mt-5 text-center"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        var url = "https://google.com"; // url tujuan
        var count = 5; // dalam detik
        function countDown() {
            if (count > 0) {
                count--;
                var waktu = count + 1;
                $('#pesan').html('<h3>Kamu akan dialihkan ke halaman download setelah <font size=5 color=maroon>' + waktu + '</font> detik.</h1>');
                setTimeout(countDown, 1000);
            } else {
                window.location.href = url;
            }
        }
        countDown();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->Z
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>