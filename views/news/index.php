<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lazy - Bootstrap UI Kit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="A new design system for developing with less effort.">
    <meta name="author" content="BootstrapBay">

    <link href="/template/assets/img/favicon.ico" rel="icon" type="image/png">

    <link rel="stylesheet" href="/template/assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/template/assets/css/lazy.css">
    <link rel="stylesheet" href="/template/assets/css/demo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
</head>
<body class="index">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="./"><img src="/template/assets/img/logo.svg" alt="Example Navbar 1" class="mr-2" height="30"> Отдел депремации</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-7" aria-controls="navbarNavDropdown-7"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="page-hero bg-primary text-white" id="banner">
    <div class="bubbles d-none d-md-block">
        <!-- 				bubbles -->
        <div class="bubble bubble-1 rotate-bubble bg-warning"></div>
        <div class="bubble bubble-2 bubble-bottom-right bg-danger rotate-bubble"></div>
        <div class="bubble bubble-3 bubble-top-right bg-warning rotate-bubble"></div>
        <div class="bubble bubble-4 bubble-top-left bg-info rotate-bubble"></div>
        <div class="bubble bubble-5 bg-info rotate-bubble"></div>
        <div class="bubble bubble-6 bubble-bottom-right bg-danger rotate-bubble"></div>
        <div class="bubble bubble-7 bubble-top-right bg-success rotate-bubble"></div>
        <div class="bubble bubble-8 bubble-top-left bg-success rotate-bubble"></div>
        <div class="bubble bubble-9 bg-warning rotate-bubble"></div>
        <div class="bubble bubble-10 bg-danger rotate-bubble"></div>
        <div class="bubble bubble-11 bubble-bottom-right bg-info rotate-bubble"></div>
        <div class="bubble bubble-12 bubble-top-right bg-success rotate-bubble"></div>
        <div class="bubble bubble-13 bubble-top-left bg-success rotate-bubble"></div>
        <!--         circles -->
        <div class="circle circle-1 bg-light rotate-circle"></div>
        <div class="circle circle-2 bg-success rotate-circle"></div>
        <div class="circle circle-3 bg-danger rotate-circle"></div>
        <div class="circle circle-4 bg-info rotate-circle"></div>
        <div class="circle circle-5 bg-success rotate-circle"></div>
        <div class="circle circle-6 bg-info rotate-circle"></div>
        <div class="circle circle-7 bg-warning rotate-circle"></div>
        <div class="circle circle-8 bg-white rotate-circle"></div>
        <div class="circle circle-9 bg-warning rotate-circle"></div>
        <div class="circle circle-10 bg-danger rotate-circle"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8  offset-lg-2 text-center">
                <div class="title">
                    <h1 class="display-2 text-white">MSGA</h1>
                    <h4 class="text-white">Make Sparta Great Again</h4>
                </div>
                <div class="credits">
                    <p class="text-white mb-0 small">Made with
<!--                        Change heart colors-->
                        <?php
                        $randomValue = rand(1,5);
                            switch ($randomValue){
                                case 1:
                                    echo "<span class='text-success'><i class='fas fa-heart'></i></span>";
                                    break;

                                case 2:
                                    echo "<span class='text-info'><i class='fas fa-heart'></i></span>";
                                    break;

                                case 3:
                                    echo "<span class='text-warning'><i class='fas fa-heart'></i></span>";
                                    break;

                                case 4:
                                    echo "<span class='text-danger'><i class='fas fa-heart'></i></span>";
                                    break;

                                case 5:
                                    echo "<span class='text-secondary'><i class='fas fa-heart'></i></span>";
                                    break;
                            }
                        ?>
                        by</p>
                    <p>Andrey Grach</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="intro bg-light">
    <div class="container">
        <?php foreach ($newsList as $newsItem):?>
        <div class="section desc">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <p class="lead"><b><?php echo $newsItem['title'];?></b>
                        <p><?php echo $newsItem['short_text'];?></p>
                            <p><?php echo $newsItem['date'];?></p>
                </div>
                <div class="meta">
                    <p class="links"><a href="/news/<?php echo $newsItem["id"];?>" class="comments"> Подробнее </a>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach;?>

        <!-- Colours
        ================================================== -->
        <div class="section">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="page-header mb-5">
                        <h2 id="colours">Colours</h2>
                        <p>We have improved the Bootstrap colour selection with a brighter variation. All the components
                            from the kit will have variations for each one of this contextual classes.</p>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1">
                    <div class="row">

                        <!-- 			        primary -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card no-hover color">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="swatch" style="background-color: #611F6A; "></div>
                                    <div class="title">Primary</div>
                                    <div class="hex text-muted">#611F6A</div>
                                </div>
                            </div>
                        </div>

                        <!-- 			        secondary -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card no-hover color">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="swatch" style="background-color: #071D5C; "></div>
                                    <div class="title">Secondary</div>
                                    <div class="hex text-muted">#071D5C</div>
                                </div>
                            </div>
                        </div>

                        <!-- 			        success -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card no-hover color">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="swatch" style="background-color: #007A5B; "></div>
                                    <div class="title">Success</div>
                                    <div class="hex text-muted">#007A5B</div>
                                </div>
                            </div>
                        </div>

                        <!-- 			        info -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card no-hover color">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="swatch" style="background-color: #1264A4; "></div>
                                    <div class="title">Info</div>
                                    <div class="hex text-muted">#1264A4</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- 			        warning -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card no-hover color">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="swatch" style="background-color: #ECB22F; "></div>
                                    <div class="title">Warning</div>
                                    <div class="hex text-muted">#ECB22F</div>
                                </div>
                            </div>
                        </div>

                        <!-- 			        danger -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card no-hover color">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="swatch" style="background-color: #E01E5B; "></div>
                                    <div class="title">Danger</div>
                                    <div class="hex text-muted">#E01E5B</div>
                                </div>
                            </div>
                        </div>

                        <!-- 			        dark -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card no-hover color">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="swatch" style="background-color: #212529; "></div>
                                    <div class="title">Dark</div>
                                    <div class="hex text-muted">#212529</div>
                                </div>
                            </div>
                        </div>

                        <!-- 			        light -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card no-hover color">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="swatch" style="background-color: #EBEAEB; "></div>
                                    <div class="title">Light</div>
                                    <div class="hex text-muted">#EBEAEB</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Buttons
  ================================================== -->
        <div class="section">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="header">
                        <h2 id="buttons">Buttons</h2>
                        <p>The Bootstrap 4 buttons have been modified to fit the new colours and style. There is also a new button style for icons only.</p>

                    </div>
                    <div class="buttons">
                        <div class="component">
                            <p class="lead">Simple</p>
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-light">Light</button>
                            <button type="button" class="btn btn-dark">Dark</button>
                            <!-- 	              <button type="button" class="btn btn-link">Link</button>  -->
                        </div>
                        <div class="component">
                            <button type="button" class="btn btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn btn-outline-success">Success</button>
                            <button type="button" class="btn btn-outline-info">Info</button>
                            <button type="button" class="btn btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-outline-danger">Danger</button>
                            <button type="button" class="btn btn-outline-light">Light</button>
                            <button type="button" class="btn btn-outline-dark">Dark</button>
                        </div>
                        <div class="component">
                            <p class="lead">Pill Shaped</p>
                            <button type="button" class="btn btn-primary btn-pill">Primary</button>
                            <button type="button" class="btn btn-secondary btn-pill">Secondary</button>
                            <button type="button" class="btn btn-success btn-pill">Success</button>
                            <button type="button" class="btn btn-info btn-pill">Info</button>
                            <button type="button" class="btn btn-warning btn-pill">Warning</button>
                            <button type="button" class="btn btn-danger btn-pill">Danger</button>
                            <button type="button" class="btn btn-light btn-pill">Light</button>
                            <button type="button" class="btn btn-dark btn-pill">Dark</button>
                        </div>
                        <div class="component">
                            <button type="button" class="btn btn-outline-primary btn-pill">Primary</button>
                            <button type="button" class="btn btn-outline-secondary btn-pill">Secondary</button>
                            <button type="button" class="btn btn-outline-success btn-pill">Success</button>
                            <button type="button" class="btn btn-outline-info btn-pill">Info</button>
                            <button type="button" class="btn btn-outline-warning btn-pill">Warning</button>
                            <button type="button" class="btn btn-outline-danger btn-pill">Danger</button>
                            <button type="button" class="btn btn-outline-light btn-pill">Light</button>
                            <button type="button" class="btn btn-outline-dark btn-pill">Dark</button>
                        </div>
                        <div class="component">
                            <p class="lead">With Icons</p>
                            <button type="button" class="btn btn-success"><i class="fas fa-heart"></i> Simple</button>
                            <button type="button" class="btn btn-outline-success"><i class="fas fa-heart"></i> Outline</button>
                            <button type="button" class="btn btn-success btn-pill"><i class="fas fa-heart"></i> Pill</button>
                            <button type="button" class="btn btn-outline-success btn-pill"><i class="fas fa-heart"></i> Outline Pill</button>
                            <button type="button" class="btn btn-success btn-icon"><i class="fas fa-heart"></i></button>
                            <button type="button" class="btn btn-outline-success btn-icon"><i class="fas fa-heart"></i></button>
                        </div>
                        <!--

                                    <div class="component mb-3">
                                        <p class="lead">Disabled</p>
                                      <button type="button" class="btn btn-primary disabled">Primary</button>
                                      <button type="button" class="btn btn-secondary disabled">Secondary</button>
                                      <button type="button" class="btn btn-success disabled">Success</button>
                                      <button type="button" class="btn btn-info disabled">Info</button>
                                      <button type="button" class="btn btn-warning disabled">Warning</button>
                                      <button type="button" class="btn btn-danger disabled">Danger</button>
                                      <button type="button" class="btn btn-link disabled">Link</button>
                                    </div>
                        -->



                        <div class="component mb-3">
                            <p class="lead">With Dropdown</p>
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-primary">Primary</button>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-success">Success</button>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop2" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-info">Info</button>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-danger">Danger</button>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop4" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="component">
                            <p class="lead">Sizes</p>
                            <button type="button" class="btn btn-danger btn-lg">Large button</button>
                            <button type="button" class="btn btn-outline-danger btn-icon btn-lg"><i class="fas fa-heart"></i></button>
                            <button type="button" class="btn btn-danger">Default button</button>
                            <button type="button" class="btn btn-outline-danger btn-icon"><i class="fas fa-heart"></i></button>
                            <button type="button" class="btn btn-danger btn-sm">Small button</button>
                            <button type="button" class="btn btn-outline-danger btn-icon btn-sm"><i class="fas fa-heart"></i></button>
                        </div>

                    </div>

                </div>
            </div>


        </div>

    </div>
</div>

<div class="container">


    <!-- Inputs
    ================================================== -->
    <div class="section">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="header">
                    <h2 id="buttons">Inputs</h2>
                    <p>All form controls are improved for better contrast and visibility. Besides the Bootstrap 4 custom inputs, we have also added a special plugin for sliders.</p>
                </div>
                <div class="inputs">
                    <div class="component">
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="lead pt-3">Default</p>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email Address">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p class="lead pt-3">With Icons</p>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <!--
                                                                                    <div class="input-group mb-3">
                                                                                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                                                      <div class="input-group-append">
                                                                                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-user"></i></span>
                                                                                      </div>
                                                                                    </div>
                                -->

                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text disabled" id="basic-addon2"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon2" disabled="">
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- 					            validations -->
                    <div class="component">
                        <p class="lead">With Validation</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group has-success">
                                    <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
                                    <div class="valid-feedback">Success! You've done it.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group has-danger">
                                    <input type="text" value="wrong value" class="form-control is-invalid" id="inputInvalid">
                                    <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 					            custom inputs -->
                    <div class="component">
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="lead">Custom Select</p>
                                <div class="form-group">
                                    <select class="custom-select">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p class="lead">File Input</p>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 					            sliders -->
                    <div class="component">
                        <p class="lead">Sliders</p>
                        <div class="row">
                            <div class="col-lg-6">

                                <!-- Simple slider -->
                                <div class="input-slider-container">
                                    <div id="input-slider" class="input-slider" data-range-value-min="0" data-range-value-max="100"></div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <span id="input-slider-value" class="range-slider-value" data-range-value-low="0"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Range slider -->
                                <div id="input-slider-range" data-range-value-min="100" data-range-value-max="500"></div>
                                <div class="row">
                                    <div class="col-6">
                                        <span class="range-slider-value value-low" data-range-value-low="200" id="input-slider-range-value-low"></span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="range-slider-value value-high" data-range-value-high="400" id="input-slider-range-value-high"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- 					            checkbox/radio/toggle -->
                    <div class="component">
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="lead">Checkboxes</p>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox my-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1">Hozier</label>
                                    </div>
                                    <div class="custom-control custom-checkbox my-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">The 1975</label>
                                    </div>
                                    <div class="custom-control custom-checkbox my-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2" checked disabled>
                                        <label class="custom-control-label" for="customCheck3">Billie Eilish</label>
                                    </div>

                                    <div class="custom-control custom-checkbox my-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4" disabled>
                                        <label class="custom-control-label" for="customCheck4">Alt-J</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <p class="lead">Radio Buttons</p>
                                <div class="form-group">
                                    <div class="custom-control custom-radio my-2">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1">Glastonbury</label>
                                    </div>
                                    <div class="custom-control custom-radio my-2">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Coachella</label>
                                    </div>
                                    <div class="custom-control custom-radio my-2">
                                        <input type="radio" id="customRadio3" name="customRadio2" class="custom-control-input" checked disabled>
                                        <label class="custom-control-label" for="customRadio3">Primavera</label>
                                    </div>
                                    <div class="custom-control custom-radio my-2">
                                        <input type="radio" id="customRadio4" name="customRadio2" class="custom-control-input" disabled>
                                        <label class="custom-control-label" for="customRadio4">Burning Man</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <p class="lead">Toggle Buttons</p>
                                <div class="form-group">
                                    <div class="custom-control custom-switch my-2">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                        <label class="custom-control-label" for="customSwitch1">Music</label>
                                    </div>
                                    <div class="custom-control custom-switch my-2">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                        <label class="custom-control-label" for="customSwitch2">Movies</label>
                                    </div>
                                    <div class="custom-control custom-switch my-2">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch3" checked disabled>
                                        <label class="custom-control-label" for="customSwitch3">Crafts</label>
                                    </div>
                                    <div class="custom-control custom-switch my-2">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch3" disabled>
                                        <label class="custom-control-label" for="customSwitch3">DIY</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Typography
    ================================================== -->
    <div class="section">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="header">
                    <h2 id="typography">Typography</h2>
                    <p>Lazy Kit has the primary font family Raleway, provided by Google Fonts. It is an open-source font that bring a new look to the default Bootstrap.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="section-typography">
                    <!-- Headings -->
                    <div class="headings">
                        <p class="lead mt-4">Headings</p>
                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Heading 1</p>
                            </div>
                            <div class="col-sm-10">
                                <h1>I Was Told There'd Be Cake</h1>
                            </div>
                        </div>

                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Heading 2</p>
                            </div>
                            <div class="col-sm-10">
                                <h2>I Was Told There'd Be Cake</h2>
                            </div>
                        </div>

                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Heading 3</p>
                            </div>
                            <div class="col-sm-10">
                                <h3>I Was Told There'd Be Cake</h3>
                            </div>
                        </div>

                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Heading 4</p>
                            </div>
                            <div class="col-sm-10">
                                <h4>I Was Told There'd Be Cake</h4>
                            </div>
                        </div>

                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Heading 5</p>
                            </div>
                            <div class="col-sm-10">
                                <h5>I Was Told There'd Be Cake</h5>
                            </div>
                        </div>

                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Heading 6</p>
                            </div>
                            <div class="col-sm-10">
                                <h6>I Was Told There'd Be Cake</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Paragraphs -->
                    <div class="paragraphs">
                        <p class="lead mt-4">Paragraphs</p>
                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Paragraph</p>
                            </div>
                            <div class="col-sm-10">
                                <p>You have brains in your head. You have feet in your shoes. You can steer yourself any direction you choose. You're on your own. And you know what you know. And YOU are the one who'll decide where to go. <a href="#">Link</a></p>
                            </div>
                        </div>

                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Lead</p>
                            </div>
                            <div class="col-sm-10">
                                <p class="lead">You have brains in your head. You have feet in your shoes. You can steer yourself any direction you choose. You're on your own. And you know what you know. And YOU are the one who'll decide where to go.</p>
                            </div>
                        </div>

                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Quote</p>
                            </div>
                            <div class="col-sm-10">
                                <blockquote class="blockquote">
                                    <p class="mb-0">You have brains in your head. You have feet in your shoes. You can steer yourself any direction you choose. You're on your own. And you know what you know. And YOU are the one who'll decide where to go.</p>
                                    <footer class="blockquote-footer">Dr. Seuss in
                                        <cite title="Source Title">Oh, The Places You'll Go!</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>

                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Text Muted</p>
                            </div>
                            <div class="col-sm-10">
                                <p class="text-muted">I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.</p>
                            </div>
                        </div>
                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Text Primary</p>
                            </div>
                            <div class="col-sm-10">
                                <p class="text-primary">I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.</p>
                            </div>
                        </div>
                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Text Secondary</p>
                            </div>
                            <div class="col-sm-10">
                                <p class="text-secondary">I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.</p>
                            </div>
                        </div>
                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Text Info</p>
                            </div>
                            <div class="col-sm-10">
                                <p class="text-info">I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.</p>
                            </div>
                        </div>
                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Text Success</p>
                            </div>
                            <div class="col-sm-10">
                                <p class="text-success">I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.</p>
                            </div>
                        </div>
                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Text Warning</p>
                            </div>
                            <div class="col-sm-10">
                                <p class="text-warning">I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.</p>
                            </div>
                        </div>
                        <div class="row py-3 align-items-center">
                            <div class="col-sm-2">
                                <p class="text-primary">Text Danger</p>
                            </div>
                            <div class="col-sm-10">
                                <p class="text-danger">I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Images
    ================================================== -->
    <div class="section">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="header">
                    <h2 id="images">Images</h2>
                    <p>Images are displayed as blocks by default and they will take the entire width of their parent. Using the border and shadow utilities, you can adjust the image's display.</p>
                </div>
            </div>
        </div>
        <div class="component text-center">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <p class="lead pt-3">Default</p>
                            <img src="/template/assets/img/lorde.png" alt="Rounded image" class="img-fluid rounded" style="width: 150px;">
                        </div>
                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <p class="lead pt-3">Round</p>
                            <img src="/template/assets/img/lorde.png" alt="Circle image" class="img-fluid rounded-circle" style="width: 150px;">
                        </div>
                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <p class="lead pt-3">Raised</p>
                            <img src="/template/assets/img/lorde.png" alt="Raised image" class="img-fluid rounded shadow-lg" style="width: 150px;">
                        </div>
                        <div class="col-12 col-md-3 mt-3 mt-md-0">
                            <p class="lead pt-3">Round & Raised</p>
                            <img src="/template/assets/img/lorde.png" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 150px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu
================================================== -->
    <div class="section">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="header">
                    <h2 id="navigation">Navigation Bars</h2>
                    <p>The Bootstrap 4 comes packed with classes for menus and navbars. Using the knows markup you can easily create responsive navigation bars. Lazy Kit comes with a layer of styling, by adding new colours and Font Awesome Icons.</p>
                </div>
            </div>
        </div>
        <div class="component">
            <div class="row">
                <div class="col-lg-6">
                    <p class="lead pt-3">Menu With Text</p>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-danger rounded">
                        <div class="container">
                            <a class="navbar-brand" href="#">Menu</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-inner-primary" aria-controls="nav-inner-primary" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="nav-inner-primary">
                                <ul class="navbar-nav ml-lg-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Discover
                                            <span class="sr-only">(current)</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Profile</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="nav-inner-primary_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="nav-inner-primary_dropdown_1">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <p class="lead pt-3 mt-3 mt-md-0">Menu With Icons</p>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-info rounded">
                        <div class="container">
                            <a class="navbar-brand" href="#">Menu</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-inner-success" aria-controls="nav-inner-success" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="nav-inner-success">
                                <ul class="navbar-nav ml-lg-auto">
                                    <li class="nav-item">
                                        <a class="nav-link nav-link-icon" href="#">
                                            <i class="fa fa-globe"></i>
                                            <span class="nav-link-inner--text d-lg-none">Discover</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nav-link-icon" href="#">
                                            <i class="fa fa-user"></i>
                                            <span class="nav-link-inner--text d-lg-none">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-link-icon" href="#" id="nav-inner-success_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-heart"></i>
                                            <span class="nav-link-inner--text d-lg-none">Settings</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="nav-inner-success_dropdown_1">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar
    ================================================== -->
    <div class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <p class="lead">Navbars</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="navbars">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">

            <a class="navbar-brand d-flex align-items-center" href="#lazy"><img src="/template/assets/img/logo.svg" alt="Example Navbar 1" class="mr-2" height="30"> Lazy Kit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-1" aria-controls="navbarNavDropdown-1"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNavDropdown-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://bootstrapbay.com" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Design</a>
                            <a class="dropdown-item" href="#">Development</a>
                            <a class="dropdown-item" href="#">Marketing</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#lazy"><img src="/template/assets/img/logo.svg" alt="Example Navbar 1" class="mr-2" height="30"> Lazy Kit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-2" aria-controls="navbarNavDropdown-2"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mr-auto text-center" id="navbarNavDropdown-2">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-info mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#lazy"><img src="/template/assets/img/logo.svg" alt="Example Navbar 1" class="mr-2" height="30"> Lazy Kit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-3" aria-controls="navbarNavDropdown-3"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mr-auto text-center" id="navbarNavDropdown-3">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-twitter"></i> Twitter
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-github"></i> Github
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#lazy"><img src="/template/assets/img/logo.svg" alt="Example Navbar 1" class="mr-2" height="30"> Lazy Kit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-13" aria-controls="navbarNavDropdown-3"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mr-auto text-center" id="navbarNavDropdown-13">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-twitter"></i> Twitter
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-github"></i> Github
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-warning mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#lazy"><img src="/template/assets/img/logo.svg" alt="Example Navbar 1" class="mr-2" height="30"> Lazy Kit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-4" aria-controls="navbarNavDropdown-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNavDropdown-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Discover</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#lazy"><img src="/template/assets/img/logo.svg" alt="Example Navbar 1" class="mr-2" height="30"> Lazy Kit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-5" aria-controls="navbarNavDropdown-5"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mr-auto text-center" id="navbarNavDropdown-5">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Timeline
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Friends</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#lazy"><img src="/template/assets/img/logo.svg" alt="Example Navbar 1" class="mr-2" height="30"> Lazy Kit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-6" aria-controls="navbarNavDropdown-6"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mr-auto text-center" id="navbarNavDropdown-6">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-campground"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-binoculars"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-fire"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#lazy"><img src="/template/assets/img/logo.svg" alt="Example Navbar 1" class="mr-2" height="30"> Lazy Kit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-7" aria-controls="navbarNavDropdown-7"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNavDropdown-7">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-cat"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-crow"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-dog"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-fish"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-otter"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="demo-background">
        <div class="filter"></div>
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark mb-4">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#lazy"><img src="/template/assets/img/logo.svg" alt="Example Navbar 1" class="mr-2" height="30"> Lazy Kit</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-17" aria-controls="navbarNavDropdown-7"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarNavDropdown-17">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cat"></i> Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-dog"></i> Profile
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-fish"></i> Dashboard
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <!-- Tables
    ================================================== -->
    <div class="section">

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="page-header">
                    <h2 id="tables">Tables</h2>
                    <p>Tables get a new look inside the Lazy Kit. Using contextual classes you can colour rows and cells.</p>
                </div>

                <div class="component">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Type</th>
                            <th scope="col">Column heading</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="table-light">
                            <th scope="row">Light</th>
                            <td>Let it be.</td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">Active</th>
                            <td>Eat well, feel well.</td>
                        </tr>
                        <tr class="table-dark">
                            <th scope="row">Dark</th>
                            <td>But first coffee.</td>
                        </tr>
                        <tr class="table-primary">
                            <th scope="row">Primary</th>
                            <td>Think before you speak.</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">Secondary</th>
                            <td>Carpe diem.</td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">Success</th>
                            <td>Success. It’s a Mind Game.</td>
                        </tr>
                        <tr class="table-danger">
                            <th scope="row">Danger</th>
                            <td>One day at a time.</td>
                        </tr>
                        <tr class="table-warning">
                            <th scope="row">Warning</th>
                            <td>Good vibes only.</td>
                        </tr>
                        <tr class="table-info">
                            <th scope="row">Info</th>
                            <td>All you need is sleep.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Navs
    ================================================== -->
    <div class="section">

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="page-header">
                    <h2 id="navs">Navigation</h2>
                    <p>Having to organise a list of links is a very common situation and knowing how to create Bootstrap 4 Navs will help you solve this.</p>
                </div>

                <div class="component">
                    <p class="lead pt-3">Tabs</p>
                    <!-- 	            with text -->
                    <ul class="nav nav-tabs d-flex flex-column flex-md-row text-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade show active" id="home">
                            <p>When it comes down to it, that’s what life is all about: showing up for the people you love, again and again, until you can’t show up anymore.</p>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <p>There is nothing more dreadful than the habit of doubt. Doubt separates people. It is a poison that disintegrates friendships and breaks up pleasant relations. It is a thorn that irritates and hurts; it is a sword that kills.</p>
                        </div>
                        <div class="tab-pane fade" id="dropdown1">
                            <p>You can go through life and make new friends every year - every month practically - but there was never any substitute for those friendships of childhood that survive into adult years. Those are the ones in which we are bound to one another with hoops of steel.</p>
                        </div>
                        <div class="tab-pane fade" id="dropdown2">
                            <p>I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at my best.</p>
                        </div>
                    </div>

                    <!--               with icons -->
                    <ul class="nav nav-danger nav-tabs mt-3 d-flex flex-column flex-md-row text-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">
                                <i class="fas fa-tshirt"></i> Shirts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile">
                                <i class="fas fa-shoe-prints"></i> Shoes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">
                                <i class="far fa-stop-circle"></i> Disabled
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile">
                                <i class="fas fa-socks"></i> Socks
                            </a>
                        </li>
                    </ul>

                    <!--               just icons -->
                    <ul class="nav nav-info nav-icons nav-tabs mt-3 d-flex flex-column flex-md-row text-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">
                                <i class="fas fa-chess-queen"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile">
                                <i class="fas fa-chess-rook"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">
                                <i class="fas fa-chess-king"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile">
                                <i class="fas fa-chess-knight"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="component">
                    <p class="lead pt-3">Pills</p>
                    <ul class="nav nav-pills nav-secondary mt-4 d-flex flex-column flex-md-row text-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home2">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Actions</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile2">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" data-toggle="tab" href="#profile2">Dashboard</a>
                        </li>
                    </ul>
                    <div id="myTabContent2" class="tab-content">
                        <div class="tab-pane fade show active" id="home2">
                            <p>Believe in yourself. You are braver than you think, more talented than you know, and capable of more than you imagine.</p>
                        </div>
                        <div class="tab-pane fade" id="profile2">
                            <p>I suspect the most we can hope for, and it's no small hope, is that we never give up, that we never stop giving ourselves permission to try to love and receive love.</p>
                        </div>
                    </div>

                    <!--               with icons -->
                    <ul class="nav nav-pills nav-success mt-5 d-flex flex-column flex-md-row text-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home2"> <i class="fas fa-igloo"></i> Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-location-arrow"></i> Actions</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile2"><i class="fas fa-address-card"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" data-toggle="tab" href="#profile2"><i class="fas fa-chart-line"></i> Dashboard</a>
                        </li>
                    </ul>

                    <!--               just icons -->
                    <ul class="nav nav-pills nav-icons nav-warning mt-5 d-flex flex-column flex-md-row text-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home2"> <i class="fas fa-igloo"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-location-arrow"></i></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile2"><i class="fas fa-address-card"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" data-toggle="tab" href="#profile2"><i class="fas fa-chart-line"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Indicators
    ================================================== -->
    <div class="section">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="header">
                    <h2 id="indicators">Indicators</h2>
                    <p>Indicators are useful elements that can help you keep your users informed. Breadcrumbs and pagination let you know about your current page. Badged and progress bars give extra information about the information you are currently viewing.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="component">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead">Breadcrumbs</p>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Home</li>
                            </ol>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Library</li>
                            </ol>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active">Data</li>
                            </ol>
                        </div>

                        <div class="col-md-6 mt-5 mt-md-0">
                            <p class="lead">Pagination</p>
                            <div>
                                <ul class="pagination pagination-lg">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#a"><i class="fas fa-long-arrow-alt-left"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#a">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#a">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#a">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#a"><i class="fas fa-long-arrow-alt-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#a"><i class="fas fa-long-arrow-alt-left"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#a">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#a">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#a">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#a"><i class="fas fa-long-arrow-alt-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="pagination pagination-sm">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#a"><i class="fas fa-long-arrow-alt-left"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#a">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#a">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#a">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#a"><i class="fas fa-long-arrow-alt-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="component">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead">Badges</p>
                            <div class="mb-2">
                                <span class="badge badge-primary">Primary</span>
                                <span class="badge badge-secondary">Secondary</span>
                                <span class="badge badge-success">Success</span>
                                <span class="badge badge-danger">Danger</span>
                                <span class="badge badge-warning">Warning</span>
                                <span class="badge badge-info">Info</span>
                                <span class="badge badge-light">Light</span>
                                <span class="badge badge-dark">Dark</span>
                            </div>
                            <div class="mb-2">
                                <span class="badge badge-pill badge-primary">Primary</span>
                                <span class="badge badge-pill badge-secondary">Secondary</span>
                                <span class="badge badge-pill badge-success">Success</span>
                                <span class="badge badge-pill badge-danger">Danger</span>
                                <span class="badge badge-pill badge-warning">Warning</span>
                                <span class="badge badge-pill badge-info">Info</span>
                                <span class="badge badge-pill badge-light">Light</span>
                                <span class="badge badge-pill badge-dark">Dark</span>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5 mt-md-0">
                            <p class="lead">Progress Bars</p>
                            <div class="component">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alerts
    ================================================== -->
    <div class="section">

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="header">
                    <h2 id="alerts">Alerts</h2>
                    <p>Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
                </div>
            </div>
        </div>
        <div class="component">
            <!-- Info Dismissible Alert -->
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="fa fa-info"></i>
                <strong>Hey!</strong> I think you should know <a href="#">this</a>.
            </div>

            <!-- Success Dismissible Alert -->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="fa fa-check"></i>
                <strong>Yay!</strong> Everything is fine! You can go back to your <a href="#">page</a>.
            </div>

            <!-- Warning Dismissible Alert -->
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="fa fa-warning"></i>
                <strong>Oops!</strong> Something might be wrong. Make a quick <a href="#">test</a>!
            </div>

            <!-- Danger Dismissible Alert -->
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="fa fa-exclamation-circle"></i>
                <strong>On no!</strong> Something really bad happened! Clear the premises and go <a href="#">somewhere safe</a>!
            </div>
        </div>

    </div>

    <!-- Cards
    ================================================== -->
    <div class="section">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="header">
                    <h2>Cards</h2>
                    <p>The original structure for the Bootstrap 4 cards remains intact. Lazy Kit brings more focus on them with the help of shadows and hover events.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="component">
                    <div class="card">
                        <div class="card-header">
                            <img class="card-img" src="/template/assets/img/dog-1.jpg" alt="dog">
                        </div>
                        <div class="card-body">
                            <span class="badge badge-success mb-2">Pets</span>
                            <h4 class="card-title">How to look after and care for a dog</h4>
                            <p class="card-text">Owning a dog is great fun and immensely rewarding. But, dogs have complex needs and each dog is unique. </p>
                        </div>
                        <div class="card-footer">
                            <a href="#a" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="component">
                    <div class="card">
                        <div class="card-header">
                            <img class="card-img" src="/template/assets/img/dog-2.jpg" alt="dog">
                        </div>
                        <div class="card-body">
                            <span class="badge badge-warning mb-2">Vacation</span>
                            <h4 class="card-title">Woof! How to find dog-friendly beaches in Spain</h4>
                            <p class="card-text">Considering Spain's abundant coastline, beaches that do allow you to take your pooch to feel sand... </p>
                        </div>
                        <div class="card-footer">
                            <a href="#a" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="component">
                    <div class="card">
                        <div class="card-header">
                            <img class="card-img" src="/template/assets/img/dog-3.jpg" alt="dog">
                        </div>
                        <div class="card-body">
                            <span class="badge badge-secondary mb-2">Hobby</span>
                            <h4 class="card-title">Getting Started With Your Puppy</h4>
                            <p class="card-text">This new addition to your family will require lots of love, attention and plenty of supplies. </p>
                        </div>
                        <div class="card-footer">
                            <a href="#a" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- JavaScript Components
    ================================================== -->
    <div class="section">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="header">
                    <h2 id="tooltips-popovers">Tooltips and Popovers</h2>
                    <p>Both tooltips and popovers offer an easy way to display more information on hover or click. You must enable them inside your Javascript in order to use them.</p>
                </div>
                <div class="component">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="lead">Tooltips</p>
                            <!-- Tooltip: Top -->
                            <button type="button" class="btn btn-success mr-1" data-toggle="tooltip" data-placement="top" title="I'm on top!👇 ">Top</button>

                            <!-- Tooltip: Bottom -->
                            <button type="button" class="btn btn-success mr-1" data-toggle="tooltip" data-placement="bottom" title="I'm at the bottom! 👆">
                                Bottom
                            </button>
                            <!-- Tooltip: Left -->
                            <button type="button" class="btn btn-success mr-1" data-toggle="tooltip" data-placement="Left" title="I'm on the left! 👉">
                                Left
                            </button>

                            <!-- Tooltip: Right -->
                            <button type="button" class="btn btn-success mr-1 mt-2 mt-md-0" data-toggle="tooltip" data-placement="right" title="I'm on the right! 👈">
                                Right
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <p class="lead">Popovers</p>
                            <!-- Popovers: Top -->
                            <button type="button" class="btn btn-secondary mr-1" data-container="body" data-toggle="popover" data-placement="top" data-content="Hey hey hey!">
                                Top
                            </button>

                            <!-- Popovers: Bottom -->
                            <button type="button" class="btn btn-secondary mr-1" data-container="body" data-toggle="popover" data-placement="bottom"
                                    data-content="How you doing?">
                                Bottom
                            </button>

                            <!-- Popovers: Left -->
                            <button type="button" class="btn btn-secondary mr-1" data-container="body" data-toggle="popover" data-placement="left" data-content="Everything is good?">
                                Left
                            </button>

                            <!-- Popovers: Right -->
                            <button type="button" class="btn btn-secondary mr-1 mt-2 mt-md-0" data-container="body" data-toggle="popover" data-placement="right" data-content="Alright!">
                                Right
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="header">
                    <h2 id="modals">Modals</h2>
                    <p>Use the modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
                </div>
                <div class="component">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#glassAnimals">
                        Click for More
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Examples
================================================== -->
<div class="examples section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Examples</h1>
                <p class="lead">Besides all the redesigned elements, we have also created 3 example pages! <br /> They will give you a better idea of what you can build with the kit :) </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="register.html" target="_blank">
                    <div class="card text-center mt-5">
                        <div class="card-header p-0">
                            <img class="card-img" src="/template/assets/img/register.png" alt="dog">
                        </div>
                        <div class="card-footer bg-primary p-4">
                            <h4 class="text-white">Register Page</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="profile.html" target="_blank">
                    <div class="card text-center mt-5">
                        <div class="card-header p-0">
                            <img class="card-img" src="/template/assets/img/profile.png" alt="dog">
                        </div>
                        <div class="card-footer bg-primary p-4">
                            <h4 class="text-white">Profile Page</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 offset-md-3">
                <a href="landing.html" target="_blank">
                    <div class="card text-center mt-5">
                        <div class="card-header p-0">
                            <img class="card-img" src="/template/assets/img/landing.png" alt="dog">
                        </div>
                        <div class="card-footer bg-primary p-4">
                            <h4 class="text-white">Landing Page</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Documentation
================================================== -->
<div class="documentation section bg-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="emoji mb-3">
                    <img src="/template/assets/img/gifs/thinking.gif" width="50" />
                </div>
                <h1>Read the Docs</h1>
                <p class="lead">Check out the documentation for every element in order to fully see its possibilities. You will find examples for every component and the variations that it comes with.</p>
                <a href="/template/documentation/getting_started.html" target="_blank" class="btn btn-outline-primary btn-lg mt-4">See Documentation</a>
            </div>
        </div>
    </div>
</div>

<div class="download bg-primary text-center text-white">
    <div class="emoji mb-3">
        <img src="/template/assets/img/gifs/hearteyes.gif" width="50" />
    </div>
    <h1 class="text-white">Try Lazy Kit for free</h1>
    <p class="lead">Do you like how this kit looks? See what you can built with it! <br /> We would love to see your work.</p>
    <a href="#a" class="btn btn-white btn-lg mt-4">Download</a>
</div>


<div class="modal fade" id="glassAnimals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Here is a modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Modals are a simple way to display information upon request. They let you easily add another layer upon your site and give you the possibility to create popups.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">View More</button>
            </div>
        </div>
    </div>
</div>


<footer class="footer-1 bg-light text-dark">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div class="links">
                <ul class="footer-menu list-unstyled d-flex flex-row text-center text-md-left">
                    <li><a href="https://bootstrapbay.com/" target="_blank">Store</a></li>
                    <li><a href="https://bootstrapbay.com/about" target="_blank">About Us</a></li>
                    <li><a href="https://bootstrapbay.com/blog/" target="_blank">Blog</a></li>
                    <li><a href="https://bootstrapbay.com/terms" target="_blank">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="social mt-4 mt-md-0">
                <a class="twitter btn btn-outline-primary btn-icon" href="https://twitter.com/bootstrapbay" target="_blank">
                    <i class="fab fa-twitter"></i>
                    <span class="sr-only">View our Twitter Profile</span>
                </a>
                <a class="facebook btn btn-outline-primary btn-icon" href="https://www.facebook.com/bootstrapbayofficial/" target="_blank">
                    <i class="fab fa-facebook"></i>
                    <span class="sr-only">View our Facebook Profile
        <span>
                </a>
                <a class="github btn btn-outline-primary btn-icon" href="https://github.com/bootstrapbay" target="_blank">
                    <i class="fab fa-github"></i>
                    <span class="sr-only">View our GitHub Profile</span>
                </a>
            </div>
        </div>
        <div class="copyright text-center">
            <hr />
            <p class="small">&copy; 2019, made with <span class="text-danger"><i class="fas fa-heart"></i></span> by BootstrapBay</p>
        </div>
    </div>
</footer>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/template/assets/vendor/jquery/jquery.min.js"></script>
<script src="/template/assets/vendor/popper/popper.min.js"></script>
<script src="/template/assets/vendor/bootstrap/bootstrap.min.js" ></script>

<!-- optional plugins -->
<script src="/template/assets/vendor/nouislider/js/nouislider.min.js"></script>

<!--   lazy javascript -->
<script src="/template/assets/js/lazy.js"></script>
</body>
</html>
