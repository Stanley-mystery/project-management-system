@extends('layouts.app')
@section('content')

<div class="head-title">
    <div class="left">
        <h1>{{ auth()->user()->role->slug }}</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active" href="#">Home</a>
            </li>
        </ul>
    </div>
    <a href="#" class="btn-download">
        <i class='bx bxs-cloud-download' ></i>
        <span class="text">Download PDF</span>
    </a>
</div>

<ul class="box-info">
  <li>
    <i class='bx bxs-chart' ></i>
    <span class="text">
        <h3>2834</h3>
        <p>Total Projects</p>
    </span>
</li>
  <li>
      <i class='bx bxs-hourglass' ></i>
      <span class="text">
          <h3>1020</h3>
          <p>Pending Projects</p>
      </span>
  </li>
  <li>
      <i class='bx bxs-calendar-check'></i>
      <span class="text">
          <h3>356</h3>
          <p>Completed Projects</p>
      </span>
  </li>
</ul>


<!-- Table data section -->

<div class="table-data row">
    <!-- First Chart: Projects Analytics -->
    <div class="col-12 col-md-7">
        <div class="order">
            <div class="head">
                <h3>Projects Analytics</h3>
            </div>
            <canvas id="orderChart" width="400" height="200"></canvas>
        </div>
    </div>

    <!-- Second Section: Recent Projects Todo List -->
    <div class="col-12 col-md-4">
        <div class="todo">
            <div class="head">
                <h3>Most Recent Project</h3>
                <i class='bx bx-plus'></i>
                <i class='bx bx-filter'></i>
            </div>
            <ul class="todo-list">
                <li class="completed">
                    <p>Finalize Project Scope</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="completed">
                    <p>Client Meeting for Project Alpha</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="not-completed">
                    <p>Prepare Project Budget</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="completed">
                    <p>Approve Design Mockups</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="not-completed">
                    <p>Schedule Sprint 3 for Beta</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="not-completed">
                  <p>Schedule Sprint 3 for Beta</p>
                  <i class='bx bx-dots-vertical-rounded'></i>
              </li>
             
            </ul>
        </div>
    </div>

    <!-- Third Chart: Projects Analytics (Last 12 Months) -->
    <div class="col-12 mb-4">
        <div class="order">
            <div class="head">
                <h3>Projects Analytics (Last 12 Months)</h3>
            </div>
            <canvas id="projectAnalyticsChart" width="400" height="200"></canvas>
        </div>
    </div>
</div>

<!-- Chart.js Script -->
<script>
    // Data for the chart (count orders by status)
    var ctx = document.getElementById('orderChart').getContext('2d');
    var orderChart = new Chart(ctx, {
        type: 'pie', // You can change the type to 'bar', 'line', etc.
        data: {
            labels: ['Completed', 'Pending', 'In Process'], // Labels based on order status
            datasets: [{
                label: 'Order Status',
                data: [2, 2, 1], // Data based on the number of each order status
                backgroundColor: ['#4CAF50', '#FF9800', '#2196F3'], // Colors for each segment
                borderColor: ['#4CAF50', '#FF9800', '#2196F3'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw + ' orders';
                        }
                    }
                }
            }
        }
    });
</script>
  
<!-- Chart.js Script -->
<script>
    // Data for the chart (project performance for the last 12 months)
    var ctx = document.getElementById('projectAnalyticsChart').getContext('2d');
    var projectAnalyticsChart = new Chart(ctx, {
        type: 'line', // Line chart to track project performance
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], // Last 12 months
            datasets: [{
                label: 'Completed Projects',
                data: [5, 7, 12, 14, 20, 24, 30, 33, 38, 45, 50, 55], // Sample data for completed projects each month
                borderColor: '#4CAF50', // Green for completed projects
                backgroundColor: 'rgba(76, 175, 80, 0.2)',
                fill: true,
                tension: 0.4 // Smooth line curve
            }, {
                label: 'Active Projects',
                data: [2, 5, 8, 12, 18, 20, 22, 28, 35, 40, 42, 48], // Sample data for active projects each month
                borderColor: '#FF9800', // Orange for active projects
                backgroundColor: 'rgba(255, 152, 0, 0.2)',
                fill: true,
                tension: 0.4 // Smooth line curve
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top', // Position of the legend
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw + ' projects';
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Number of Projects'
                    }
                }
            }
        }
    });
</script>

@endsection
