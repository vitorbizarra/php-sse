<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server-Sent Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid vh-100 d-flex">
        <div class="card m-auto">
            <div class="card-header">
                <h1>Relógio</h1>
            </div>
            <div class="card-body text-center">
                <output id="clock"></output>
            </div>
        </div>
    </div>
    <script>
        const eventSource = new EventSource('/sse.php');
        eventSource.addEventListener('horario', e => {
            console.log(e);
            document.getElementById('clock').innerText = e.data;
        });

        eventSource.onmessage = function () {};
    </script>
</body>

</html>