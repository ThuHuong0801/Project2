<div class="sidebar" data-active-color="rose" data-background-color="black">
    <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            HI
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            ADMIN
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('assets') }}/img/faces/avatar.jpg" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        Trần Thu Hường
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="./dashboard.html">
                    <i class="material-icons">home_work</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="material-icons">fact_check</i>
                    <p> Cinemas Manage
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li>
                            <a href="./pages/pricing.html">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Show </span>
                            </a>
                        </li>
                        <li>
                            <a href="./pages/rtl.html">
                                <span class="sidebar-mini"> CR </span>
                                <span class="sidebar-normal"> Create </span>
                            </a>
                        </li>
                        <li>
                            <a href="./pages/timeline.html">
                                <span class="sidebar-mini"> U </span>
                                <span class="sidebar-normal"> Update </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">list</i>
                    <p> Movie List Manage
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <a href="./components/buttons.html">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Show </span>
                            </a>
                        </li>
                        <li>
                            <a href="./components/grid.html">
                                <span class="sidebar-mini"> CR </span>
                                <span class="sidebar-normal"> Create </span>
                            </a>
                        </li>
                        <li>
                            <a href="./components/panels.html">
                                <span class="sidebar-mini"> U </span>
                                <span class="sidebar-normal"> Update </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">schedule</i>
                    <p> Movie Schedule Manager
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li>
                            <a href="./forms/regular.html">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Show </span>
                            </a>
                        </li>
                        <li>
                            <a href="./forms/extended.html">
                                <span class="sidebar-mini"> CR </span>
                                <span class="sidebar-normal"> Create </span>
                            </a>
                        </li>
                        <li>
                            <a href="./forms/validation.html">
                                <span class="sidebar-mini"> U </span>
                                <span class="sidebar-normal"> Update </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#tablesExamples">
                    <i class="material-icons">event</i>
                    <p> Events Manager
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li>
                            <a href="./tables/regular.html">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Show </span>
                            </a>
                        </li>
                        <li>
                            <a href="./tables/extended.html">
                                <span class="sidebar-mini"> CR </span>
                                <span class="sidebar-normal"> Create </span>
                            </a>
                        </li>
                        <li>
                            <a href="./tables/datatables.net.html">
                                <span class="sidebar-mini"> U </span>
                                <span class="sidebar-normal"> Update </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#mapsExamples">
                    <i class="material-icons">room</i>
                    <p> Rooms Manager
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li>
                            <a href="./maps/google.html">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Show </span>
                            </a>
                        </li>
                        <li>
                            <a href="./maps/fullscreen.html">
                                <span class="sidebar-mini"> CR </span>
                                <span class="sidebar-normal"> Create </span>
                            </a>
                        </li>
                        <li>
                            <a href="./maps/vector.html">
                                <span class="sidebar-mini"> U </span>
                                <span class="sidebar-normal"> Update </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#mapsExamples">
                    <i class="material-icons">view_quilt</i>
                    <p> Seats Manager
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li>
                            <a href="./maps/google.html">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Show </span>
                            </a>
                        </li>
                        <li>
                            <a href="./maps/fullscreen.html">
                                <span class="sidebar-mini"> CR </span>
                                <span class="sidebar-normal"> Create </span>
                            </a>
                        </li>
                        <li>
                            <a href="./maps/vector.html">
                                <span class="sidebar-mini"> U </span>
                                <span class="sidebar-normal"> Update </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="./widgets.html">
                    <i class="material-icons">date_range</i>
                    <p> Statistical </p>
                </a>
            </li>
        </ul>
    </div>
</div>