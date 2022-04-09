<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        #urlinput:focus {
            box-shadow: none;
        }

    </style>
</head>

<body>
    <div class="container-fluid " style="background-color: #e6e6e6">
        <div class="row">
            <div class="col-12 d-flex justify-content-center vh-100 align-items-center">
                <form class="bg-light p-5 rounded shadow-lg" action="{{ route('short') }}" method="POST">
                    @csrf
                    <div class="row pb-3 m-auto text-center">
                        <h3>Laravel URL Shortener</h3>
                    </div>
                    <div class="row m-auto">
                        <div class="input-group mb-3">
                            <input type="text" id="urlinput" name="long_url" class="form-control rounded-start"
                                placeholder="http://example.com">
                            <div class="input-group-append">
                                <button class="btn btn-primary rounded-end" type="submit">Shorten</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">The URL has been shortened.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p>URL: <a
                            href="http://127.0.0.1:8000/sl{{ session('message') }}">http://127.0.0.1:8000/sl{{ session('message') }}</a>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    @if (session()->has('message'))
        <script>
            var myModal = new bootstrap.Modal(document.getElementById('myModal'), {})
            myModal.show()
        </script>
    @endif
</body>

</html>
