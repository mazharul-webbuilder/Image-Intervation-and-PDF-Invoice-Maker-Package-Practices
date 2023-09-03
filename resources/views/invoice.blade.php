<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 mx-auto d-flex flex-column-reverse ">
                <button class="btn btn-primary py-3 mt-2" id="domPdf">Generate domPdf Invoice</button>
                <button class="btn btn-warning py-3 mt-4" id="laravelInvoice">Generate Laravel Invoice</button>
            </div>
        </div>
    </div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#laravelInvoice').on('click', function(e) {
                e.preventDefault()
                window.location.href = '{{url('/invoice-laravel-invoice')}}'

            })
        })
        $(document).ready(function(){
            $('#domPdf').on('click', function(e) {
                e.preventDefault()
                window.location.href = '{{url('/invoice-dompdf')}}'
            })
        })
    </script>

</body>
</html>
