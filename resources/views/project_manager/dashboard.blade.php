@extends('layouts.app')

@section('content')

<!-- Dashboard Header -->
<div class="head-title">
    <div class="left">
        <h1>{{  }}</h1>
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li><a class="active" href="#">Home</a></li>
        </ul>
    </div>
    <a href="#" class="btn-download">
        <i class='bx bxs-cloud-download'></i>
        <span class="text">Download Reports</span>
    </a>
</div>

<!-- Stats Overview -->
<ul class="box-info">
    <li>
        <i class='bx bxs-calendar-check'></i>
        <span class="text">
            <h3>1020</h3>
            <p>New Tasks</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-group'></i>
        <span class="text">
            <h3>2834</h3>
            <p>Team Members</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-dollar-circle'></i>
        <span class="text">
            <h3>$2543</h3>
            <p>Total Budget Spent</p>
        </span>
    </li>
</ul>

<!-- Task Overview Table -->
<div class="table-data">
    <div class="tasks">
        <div class="head">
            <h3>Recent Tasks</h3>
            <i class='bx bx-search'></i>
            <i class='bx bx-filter'></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Assigned To</th>
                    <th>Status</th>
                    <th>Deadline</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><p>Task 1: UI Design</p></td>
                    <td><p>John Doe</p></td>
                    <td><span class="status completed">Completed</span></td>
                    <td><p>01-20-2025</p></td>
                </tr>
                <tr>
                    <td><p>Task 2: Backend Setup</p></td>
                    <td><p>Jane Smith</p></td>
                    <td><span class="status pending">Pending</span></td>
                    <td><p>01-25-2025</p></td>
                </tr>
                <tr>
                    <td><p>Task 3: API Integration</p></td>
                    <td><p>James Lee</p></td>
                    <td><span class="status in-progress">In Progress</span></td>
                    <td><p>01-30-2025</p></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Team Progress Section -->
    <div class="team-progress">
        <div class="head">
            <h3>Team Progress</h3>
            <i class='bx bx-plus'></i>
            <i class='bx bx-filter'></i>
        </div>
        <ul class="progress-list">
            <li class="completed">
                <p>John Doe - UI Design</p>
                <i class='bx bx-dots-vertical-rounded'></i>
            </li>
            <li class="in-progress">
                <p>Jane Smith - Backend Setup</p>
                <i class='bx bx-dots-vertical-rounded'></i>
            </li>
            <li class="not-completed">
                <p>James Lee - API Integration</p>
                <i class='bx bx-dots-vertical-rounded'></i>
            </li>
        </ul>
    </div>
</div>

<!-- Notifications Section -->
<div class="notifications">
    <div class="head">
        <h3>Project Notifications</h3>
    </div>
    <ul class="notification-list">
        <li>
            <p>Task "UI Design" has been marked as completed by John Doe.</p>
        </li>
        <li>
            <p>Jane Smith has started "Backend Setup" task.</p>
        </li>
        <li>
            <p>James Lee is encountering issues with API Integration. Please assist.</p>
        </li>
    </ul>
</div>

@endsection
