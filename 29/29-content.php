<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-29">
    <div class="container">
        <div class="menu">
            <ul class="bread pl-5">
                <li class="item-bread w-auto">
                    <a href="#" class="item">Home</a>
                </li>
                <li class="item-bread w-auto">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item"> Log in to the site</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p class="alert alert-danger">Home Log in to the site</p>
                <div class="boder-login">
                    <input class="username" type="text" placeholder="Enter Username" name="uname" required>
                    <input class="username" type="text" placeholder="Enter Username" name="uname" required>
                    <label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
                    <button class="login w-100 p-2 bg-danger text-white " type="submit">Login</button>
                </div>
                <p>
                    <a class="text-danger d-block fa-1x" href="#">Forgotten your username or password?</a>
                </p>
                <p>
                    Cookies must be enabled in your browser <i class="fas fa-question-circle text-info" data-toggle="popover" data-placement="right" data-content="The essential one is the session cookie, usually called MoodleSession. You must allow this cookie in your browser to provide continuity and to remain logged in when browsing the site. When you log out or close the browser, this cookie is destroyed (in your browser and on the server).</p>

<p>The other cookie is purely for convenience, usually called MOODLEID or similar. It just remembers your username in the browser. This means that when you return to this site, the username field on the login page is already filled in for you. It is safe to refuse this cookie - you will just have to retype your username each time you log in"></i>
                </p>
                <p class="forgetpass d-inline">Cookies must be enabled in your browser </p>
                <button class="login w-100 p-2 bg-danger text-white " type="submit">Log in as a guest</button>
            </div>
            <div class="col-lg-6">
                <h3 class="title text-dark">Is this your first time here?</h3>
                <div class="accordion" id="accordionExample">
                    <div class="card my-1">
                        <div class="card-header p-0" id="headingOne">
                            <h2 class="m-0">
                                <a href="" class="btn btn-block text-left p-0 overflow-hidden text-uppercase d-flex align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="pl-3 text-black-50 font-weight-bold" >Login info for students</span>
                                </a>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card my-1">
                        <div class="card-header p-0" id="headingTwo">
                            <h2 class="m-0">
                                <a href="" class="btn btn-block text-left p-0 overflow-hidden text-uppercase d-flex align-items-center" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <span class="pl-3 text-black-50 font-weight-bold"> Login info for teachers</span>
                                </a>
                            </h2>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card my-1 ">
                        <div class="card-header p-0" id="headingThree">
                            <h2 class="m-0">
                                <a href="" class="btn btn-block text-left p-0 overflow-hidden text-uppercase d-flex align-items-center" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <span class="pl-3 text-black-50 font-weight-bold"> Privacy policy</span>
                                </a>
                            </h2>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>