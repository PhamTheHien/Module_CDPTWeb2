<?php
// $url_host = $_SERVER['HTTP_HOST'];

// $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

// $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

// preg_match_all($pattern_uri, __DIR__, $matches);

// $url_path = $url_host . $matches[1][0];

// $url_path = str_replace('\\', '/', $url_path);

?>
<div class="type-8 pt-5 pb-5">
<div class="container">
<div class="title p-1"> <h5 class="p-title">Theme elements</h5></div>
    <div class="menu">
            <ul class="bread pl-5">
                <li class="item-bread w-auto">
                    <a href="#" class="item">Home</a>
                </li>
                <li class="item-bread w-auto">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item"> Courses</a>
                </li>
                <li class="item-bread w-auto">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item">Theme</a>
                </li>
                <li class="item-bread w-auto">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item">Theme elements</a>
                </li>
            </ul>
        </div>
        <div class="d-flex border">
            <div class="tab">
                <button class="tablinks text-muted border-bottom" onclick="openCity(event, 'Front')" id="defaultOpen">Front page builder</button>
                <button class="tablinks text-muted border-bottom" onclick="openCity(event, 'Course')">Course dashboard</button>
                <button class="tablinks text-muted border-bottom" onclick="openCity(event, 'Site')">Site menu</button>
                <button class="tablinks text-muted border-bottom" onclick="openCity(event, 'Coursesindex')">Courses A-Z index</button>
                <button class="tablinks text-muted border-bottom" onclick="openCity(event, 'Differentcourses')">Different courses formats</button>
                <button class="tablinks text-muted border-bottom" onclick="openCity(event, 'Differentheader')">Different header styles</button>
                <button class="tablinks text-muted border-bottom" onclick="openCity(event, 'Font')">Font size switcher</button>
                <button class="tablinks text-muted border-bottom" onclick="openCity(event, 'Responsive')">Responsive design</button>
                <button class="tablinks text-muted border-bottom" onclick="openCity(event, 'Social')">Social icons</button>
                <button class="tablinks text-muted border-bottom" onclick="openCity(event, 'Unlimited')">Unlimited colors</button>
            </div>
            <div id="Front" class="tabcontent h-100">
                <h3>Front page builder</h3>
                <p class="text-muted">Front page builder is a local plugin which allows build front page content with friendly drag and drop interface. Using front page builder you may import demo content by one click, as well as edit and add new elements. This is a first page builder plugin in Moodle</p>
                <img class="w-100" src="images/font.png" alt="font.png">
                <img class="w-100" src="images/font1.png" alt="font1.png">
                <img class="w-100" src="images/font2.png" alt="font2.png">
                <img class="w-100" src="images/font4.png" alt="font4.png">
                <img class="w-100" src="images/font5.png" alt="font5.png">
                <img class="w-100" src="images/font6.png" alt="font6.png">
            </div>
            <div id="Course" class="tabcontent h-100">
                <h3>Course dashboard</h3>
                <p class="text-muted">Course dashboard enables students to get info about course details, as well as check their course progress. It allows teachers easily navigate on course and manage their online classroom.</p>
                <img class="w-100" src="images/course.png" alt="course.png">
                <img class="w-100" src="images/course1.png" alt="course1.png">
                <img class="w-100" src="images/course2.png" alt="course2.png">
                <img class="w-100" src="images/course3.png" alt="course3.png">
            </div>
            <div id="Site" class="tabcontent h-100">
                <h3>Site menu</h3>
                <p class="text-muted">Site menu is a list of quick links to allow fast navigate on Moodle site. Site menu enables students to find interesting content. It allows teachers, managers and admin esier manage courses and whole site.</p>
                <img class="w-100" src="images/site1.png" alt="site1.png">
                <img class="w-100" src="images/site2.png" alt="site2.png">
                <img class="w-100" src="images/site3.png" alt="site3.png">
            </div>
            <div id="Coursesindex" class="tabcontent h-100">
                <h3>Courses A-Z index</h3>
                <p>Course A-Z plugin is a custom block in which you may display all courses in an A to Z listing. If letter does not have any course block displays unlinked letter. Block's settings allows you to add custom alphabet which is great feature for different alphabets, for example Greek or Cyrillic. Here you may see this block in action.</p>
                <img class="w-100" src="images/index.png" alt="index.png">
            </div>
            <div id="Differentcourses" class="tabcontent h-100">
                <h3>Different courses formats</h3>
                <p class="text-muted">Cognitio theme provided fully design integration with popular Moodle courses formats, such as: grid format, buttons format or collapsed topics format. See demo of all course formats:</p>
                <p class="text-muted">Buttons format</p><br>
                <p class="text-muted">Grid format</p><br>
                <p class="text-muted">Collapsed topics format</p>
            </div>
            <div id="Differentheader" class="tabcontent h-100">
                <h3>Different header styles</h3>
                <p class="text-muted">Cognitio theme provided different header styles. You may switch these styles by one click.</p>
                <img class="w-100" src="images/style.png" alt="style.png">
            </div>
            <div id="Font" class="tabcontent h-100">
                <h3>Font size switcher</h3>
                <p class="text-muted">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
            </div>
            <div id="Responsive" class="tabcontent h-100">
                <h3>Responsive design</h3>
                <p class="text-muted">Cognitio theme is fully responsive which means that looks great on all devices and screen sizes. Try to resize the browser window to see how it works.</p>
            </div>
            <div id="Social" class="tabcontent h-100">
                <h3>Social icons</h3>
                <p class="text-muted">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
            </div>
            <div id="Unlimited" class="tabcontent h-100">
                <h3>Unlimited colors</h3>
                <p class="text-muted">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
            </div>
        </div>
    </div>
</div>



<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
</script>