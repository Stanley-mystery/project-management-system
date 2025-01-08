<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

		<!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- App css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
	
    <title>AdminHub</title>
</head>
<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">AdminHub</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            


            <!-- Show 'Analytics' for Admins and Project Managers -->
            @if(auth()->user()->role->slug == 'admin' || auth()->user()->role->slug == 'project_manager')
            <li>
                <a href="#">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Analytics</span>
                </a>
            </li>
            @endif

						<!-- Show 'Analytics' for Admins and Project Managers -->
            @if(auth()->user()->role->slug == 'admin' || auth()->user()->role->slug == 'project_manager')
            <li>
                <a href="#">
                    <i class='bx bxs-folder'></i>
                    <span class="text">Projects</span>
                </a>
            </li>
            @endif

         
            <!-- Show 'Tasks' for Project Managers and Staff -->
            @if(auth()->user()->role->slug == 'project_manager' || auth()->user()->role->slug == 'staff')
            <li>
                <a href="#">
                    <i class='bx bxs-book'></i>
                    <span class="text">Tasks</span>
                </a>
            </li>
            @endif
        </ul>

        <!-- Settings and Logout - Visible for all users -->
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>

            <a href="#" class="profile d-flex align-items-center justify-content-center gap-4 p-3">
						<span class="profile-name d-none d-sm-inline-block">{{ auth()->user()->name }}</span>
              <img src="{{ asset('images/profile.png') }}" class="me-3" alt="Profile Image">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            @yield('content')
        </main>
        <!-- MAIN -->

			<footer class="footer">
					<div class="container-fluid">
							<div class="row">
									<div class="col-sm-6">
											<p class="footer-text">2025 © INITS</p>
									</div>
									<div class="col-sm-6">
											<div class="text-sm-right d-none d-sm-block">
													<p class="footer-text">Project Management System</p>
											</div>
									</div>
							</div>
					</div>
     </footer>

    </section>
    <!-- CONTENT -->

	
	
		<!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
