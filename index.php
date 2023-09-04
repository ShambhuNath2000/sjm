<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title> Bootstrap 4 Registration Form Example </title>
    <style>
        body {
            color: #bd2130;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #f8f9fa;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .15rem;
        }
    </style>
</head>

<body>
    <form action="data.php" method='post'>
        <section class="vh-100" style="background-color: #c48fad;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-9">
                        <h1 class="text-white mb-4"> Online Job Registration form </h1>
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body">
                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0"> First name </h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" name="firstname" />
                                    </div>
                                </div>
                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0"> Last name </h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" name="lastname" />
                                    </div>
                                </div>
                                <hr class="mx-n3">
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0"> Email address </h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="email" class="form-control form-control-lg" name="email"
                                            placeholder="dummy@example.com" />
                                    </div>
                                </div>
                                <hr class="mx-n3">
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0"> Mobile Number</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="number" class="form-control form-control-lg" name="mobileno" />
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="gridRadios1" value="male" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="gridRadios2" value="female">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="gridRadios2" value="other">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Other
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <hr class="mx-n3">
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0"> Message </h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <textarea class="form-control" rows="3"
                                            placeholder="Message sent to the employer" name="message"> </textarea>
                                    </div>
                                </div>
                                <hr class="mx-n3">

                                <div class="px-5 py-4">
                                    <button type="submit" class="btn btn-primary btn-lg"> Send application </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>