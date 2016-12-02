        <!-- Navbar fixed top -->

        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?p=index"><i class="fa fa-home"></i></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav nav-tabs navbar-right" id="myTab">
                            <li <?php if($page=="about") echo "class='active' " ?> >
                                <a href="?p=about">About</a>
                            </li>
                            <li <?php if($page=="formation") echo "class='active' " ?> >
                                <a href="?p=formation">Formation</a>
                            </li>
                            <li <?php if($page=="projects") echo "class='active' " ?> >
                                <a href="?p=projects">Projects</a>
                            </li>
                            <li <?php if($page=="skills") echo "class='active' " ?> >
                                <a href="?p=skills">Skills</a>
                            </li>
                            <li <?php if($page=="contact") echo "class='active' " ?> >
                                <a href="?p=contact">Contact</a>
                            </li>
                        </ul>
            </div><!-- /.navbar-collapse data-toggle="tab"-->
        </div><!-- /.container-fluid -->
        </nav>