<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between fixed-top mb-5">
    <div class="container-fluid">
        <script>
        function sidebar() {
            if (document.getElementById("side-bar").style.left == "-300px") {
                document.getElementById("side-bar").style.left = 0;
                document.getElementById("main-page").style.paddingLeft = "300px";
            } else {
                document.getElementById("side-bar").style.left = "-300px";
                document.getElementById("main-page").style.paddingLeft = "0px";
            }
        }
        </script>
        <a style="font-size: 20px;" class="mr-4" onclick="sidebar();">
            <i class="fas fa-bars"></i>
        </a>
        <a class="navbar-brand" href="#">
            <h1>ECTI</h1>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Paper list</a>
                </li>
            </ul>
        </div>
        <div class="nav-item dropdown justify-content-end">
            <h5 class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false"><?= $_SESSION["name"] ?></h5>
            <div class="dropdown-menu">
                <p class="mx-3 my-2"><?= $_SESSION["name"] ?></p>
                <h5 class="mx-3"><?= $_SESSION["role"] ?></h5>
                <div class="dropdown-divider"></div>
                <a class="mx-3" href="#">Log out</a>
            </div>
        </div>
    </div>
</nav>
<aside class="menu-sidebar d-none d-lg-block" id="side-bar" style="transition: left .5s;">
    <div class="menu-sidebar__content js-scrollbar1 pt-5">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="./?content=list_paper">
                        <i class="fas fa-book"></i>List Paper</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->