<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">wilfried</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('home.index') }}" class="nav-link">
                    <i class="fa fa-book"></i>
                    <p>Accueil</p>
                </a>
            </li>
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>
                        Menus
                        <i class="right fa fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{ route('chapitre.index') }}" class="nav-link active">
                            <i class="fa fa-book"></i>
                            <p>Chapitres</p>
                        </a>
                    </li>

            </li>
            <li class="nav-item">
                <a href="{{ route('sujet.index') }}" class="nav-link">
                    <i class="fa fa-table"></i>
                    <p>Sujets</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('question.index') }}" class="nav-link">
                    <i class="fa fa-tasks"></i>
                    <p>Questions</p>
                </a>
            </li>


        </ul>

        </li>


        <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fa fa-lock"></i>
                <p>
                    Déconnexion
                </p>
            </a>
        </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
