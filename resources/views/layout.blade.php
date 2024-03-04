<!DOCTYPE html>
<html>

<head>
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* The side navigation menu */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 200px;
            background-color: #f1f1f1;
            overflow: auto;

            padding: 0;


        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
        div.content {
            margin-left: 200px;
            /* Width of the sidebar */
            padding: 1px 16px;
            height: 1000px;
            width: calc(100% - 200px);

        }

        .container {
            padding-left: 0;
            padding-right: 0;
        }

        body {}

        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>

</head>

<body>
    <div class="container">
        <!-- The sidebar -->
        <div class="sidebar">
            <a class="active" href="/">Home</a>
            <a href="/students">Students</a>
            <a href="/teachers">Teachers</a>
            <a href="/courses">Courses</a>
            <a href="/batches">Batches</a>
            <a href="/enrollments">Enrollment</a>
            <a href="/payments">Payment</a>
            <a href="/reports">Reports</a>
        </div>

        <!-- Page content -->
        <div class="content">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Student Management Project</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </div>
            </nav>

            <div>
                @yield('content')
            </div>
        </div>

    </div>



</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
