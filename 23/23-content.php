<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-23">
    <div class="container">
        <h3>Box icon type 3</h3>
        <p class="content-title text-muted">Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Pellentesque in ipsum id orci
            porta dapibus. <br> Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis <br>
            quis ac lectus. Donec rutrum congue leo eget malesuada.</p>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 mb-4 ">
                    <div class="content-hover d-flex align-items-center h-100 ">
                        <div class="theme-icon bg-danger h-100 d-flex">
                            <i class="fas fa-gift icon-content m-auto"></i>
                        </div>
                        <div class="box-content p-2">
                            <h5 class="Proin">Proin eget tortor</h5>
                            <p class="content">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="content-hover d-flex align-items-center h-100 ">
                        <div class="theme-icon bg-info h-100 d-flex">
                            <i class="fas fa-info m-0 icon-content m-auto"></i>
                        </div>
                        <div class="box-content p-2">
                            <h5 class="Proin">Proin eget tortor</h5>
                            <p class="content">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="content-hover d-flex align-items-center h-100">
                        <div class="theme-icon badge-success h-100 d-flex">
                            <i class="fas fa-check m-0 icon-content m-auto"></i>
                        </div>
                        <div class="box-content p-2">
                            <h5 class="Proin">Proin eget tortor</h5>
                            <p class="content">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="content-hover d-flex align-items-center h-100 ">
                        <div class="theme-icon badge-secondary h-100 d-flex">
                            <i class="fas fa-flag m-0 icon-content m-auto"></i>
                        </div>
                        <div class="box-content p-2">
                            <h5 class="Proin">Proin eget tortor</h5>
                            <p class="content">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4"></div>

        <div class="double"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 mb-4 ">
                        <div class="content-hover d-flex align-items-center h-100 mx-2 ">
                            <div class="theme-icon bg-danger h-100 d-flex">
                                <i class="fas fa-gift icon-content m-auto"></i>
                            </div>
                            <div class="box-content1 p-2">
                                <p class="content">Vivamus suscipit tortor eget</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="content-hover d-flex align-items-center h-100 mx-2 ">
                            <div class="theme-icon bg-info h-100 d-flex">
                                <i class="fas fa-info m-0 icon-content m-auto"></i>
                            </div>
                            <div class="box-content1 p-2">
                                <p class="content">Vivamus suscipit tortor eget</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="content-hover d-flex align-items-center h-100 mx-2 ">
                            <div class="theme-icon badge-success h-100 d-flex">
                                <i class="fas fa-check m-0 icon-content m-auto"></i>
                            </div>
                            <div class="box-content1 p-2">
                                <p class="content">Vivamus suscipit tortor eget</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="content-hover d-flex align-items-center h-100 mx-2 ">
                            <div class="theme-icon badge-secondary h-100 d-flex">
                                <i class="fas fa-flag m-0 icon-content m-auto"></i>
                            </div>
                            <div class="box-content1 p-2">
                                <p class="content">Vivamus suscipit tortor eget</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>