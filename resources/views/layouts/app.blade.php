<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
    <title>Products | Light Able Admin & Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective."
    />
    <meta name="author" content="phoenixcoded" />

    <!-- [Favicon] Icon -->
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon" />
    
    <!-- [Google Font: Public Sans] (Optional, not included in your current code) -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  
    <!-- Themify Icons (Optional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.0/css/themify-icons.css">
  
    <!-- Phosphor Icons (Duotone) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/phosphor-icons@latest" />
  
    <!-- Tabler Icons -->
    <link href="https://cdn.jsdelivr.net/npm/tabler-icons@1.39.0/iconfont/tabler-icons.min.css" rel="stylesheet">
    
    <!-- Material Icons (Google) -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Heroicons -->
    <link href="https://cdn.jsdelivr.net/npm/heroicons@1.0.6/outline.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
<!-- [Template CSS Files] -->
<link href="{{ asset('css/style-preset.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/style.css') }}" rel="stylesheet" id="main-style-link"/>

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="../dashboard/index.html" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="{{ asset('images/cart-logo.png') }}" alt="logo image" class="logo-lg" />
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption"
          >
          <i class="ph-duotone ph-gauge"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-gauge"></i>
            </span>
            <span class="pc-mtext" data-i18n="Dashboard">Dashboard</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
            <span class="pc-badge">2</span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../dashboard/index.html" data-i18n="Analytics">Analytics</a></li>
            <li class="pc-item"><a class="pc-link" href="../dashboard/affiliate.html" data-i18n="Affiliate">Affiliate</a></li>
            <li class="pc-item"><a class="pc-link" href="../dashboard/finance.html" data-i18n="Finance">Finance</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-dashboard.html" data-i18n="Helpdesk">Helpdesk</a></li>
            <li class="pc-item"><a class="pc-link" href="../dashboard/invoice.html" data-i18n="Invoice">Invoice</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"
            ><span class="pc-micon"> <i class="ph-duotone ph-layout"></i></span><span class="pc-mtext" data-i18n="Layouts">Layouts</span
            ><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../demo/layout-horizontal.html" data-i18n="Horizontal">Horizontal</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-vertical.html" data-i18n="Vertical">Vertical</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-vertical-tab.html" data-i18n="Vertical + Tab">Vertical + Tab</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-tab.html" data-i18n="Tab">Tab</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-2-column.html" data-i18n="2 Column">2 Column</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-big-compact.html" data-i18n="Big Compact">Big Compact</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-compact.html" data-i18n="Compact">Compact</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-moduler.html" data-i18n="Moduler">Moduler</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-creative.html" data-i18n="Creative">Creative</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-detached.html" data-i18n="Detached">Detached</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-advanced.html" data-i18n="Advanced">Advanced</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-extended.html" data-i18n="Extended">Extended</a></li>
          </ul>
        </li>
        <li class="pc-item pc-caption">
          <label data-i18n="Widget">Widget</label>
          <i class="ph-duotone ph-chart-pie"></i>
        </li>
        <li class="pc-item">
          <a href="../widget/w_statistics.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-projector-screen-chart"></i>
            </span>
            <span class="pc-mtext" data-i18n="Statistics">Statistics</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../widget/w_user.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-identification-card"></i>
            </span>
            <span class="pc-mtext" data-i18n="User">User</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../widget/w_data.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-database"></i>
            </span>
            <span class="pc-mtext" data-i18n="Data">Data</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../widget/w_chart.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-chart-pie"></i>
            </span>
            <span class="pc-mtext" data-i18n="Chart">Chart</span></a
          >
        </li>
        <li class="pc-item pc-caption">
          <label data-i18n="Application">Application</label>
          <i class="ph-duotone ph-buildings"></i>
        </li>
        <li class="pc-item">
          <a href="../application/calendar.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-calendar-blank"></i>
            </span>
            <span class="pc-mtext" data-i18n="Calender">Calendar</span></a
          >
        </li>
        <li class="pc-item">
          <a href="../application/chat.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-chats-circle"></i>
            </span>
            <span class="pc-mtext" data-i18n="Chat">Chat</span></a
          >
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-image"></i>
            </span>
            <span class="pc-mtext" data-i18n="Gallery">Gallery</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/gallery-grid.html" data-i18n="Grid">Grid</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/gallery-masonry.html" data-i18n="Masonry">Masonry</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-shopping-cart"></i>
            </span>
            <span class="pc-mtext" data-i18n="Ecommerce">E-commerce</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/ecom_product.html" data-i18n="Product">Product</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/ecom_product-details.html" data-i18n="Product-Detail">Product details</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/ecom_product-list.html" data-i18n="Product-List">Product List</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/ecom_product-add.html" data-i18n="Product Add">Product Add</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/ecom_checkout.html" data-i18n="Checkout">Checkout</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"
            ><span class="pc-micon"><i class="ph-duotone ph-lifebuoy"></i></span><span class="pc-mtext" data-i18n="Helpdesk">Helpdesk</span
            ><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-dashboard.html" data-i18n="Dashboard">Dashboard</a></li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#!">
                <span data-i18n="Ticket">Ticket</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-create-ticket.html" data-i18n="Create">Create</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-ticket.html" data-i18n="List">List</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-ticket-details.html" data-i18n="Details">Details</a></li>
              </ul>
            </li>
            <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-customer.html" data-i18n="Customer">Customer</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-newspaper"></i>
            </span>
            <span class="pc-mtext" data-i18n="Invoice 1">Invoice 1</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/invoice-list.html" data-i18n="List">List</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/invoice-create.html" data-i18n="Create">Create</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/invoice-view.html" data-i18n="Preview">Preview</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"
            ><span class="pc-micon"><i class="ph-duotone ph-newspaper"></i></span><span class="pc-mtext" data-i18n="Invoice 2">Invoice 2</span
            ><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../admins/invoice-dashboard.html" data-i18n="Dashboard">Dashboard</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/invoice-create.html" data-i18n="Create">Create</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/invoice-view.html" data-i18n="Details">Details</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/invoice-list.html" data-i18n="List">List</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/invoice-edit.html" data-i18n="Edit">Edit</a></li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="../application/mail.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-envelope-open"></i>
            </span>
            <span class="pc-mtext" data-i18n="Mail">Mail</span></a
          >
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-identification-badge"></i>
            </span>
            <span class="pc-mtext" data-i18n="Membership">Membership</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../admins/membership-dashboard.html" data-i18n="Dashboard">Dashboard</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/membership-list.html" data-i18n="List">List</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/membership-pricing.html" data-i18n="Pricing">Pricing</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/membership-setting.html" data-i18n="Setting">Setting</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-books"></i>
            </span>
            <span class="pc-mtext" data-i18n="Online Courses">Online Courses</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../admins/course-dashboard.html" data-i18n="Dashboard">Dashboard</a></li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#!">
                <span data-i18n="Teacher">Teacher</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../admins/course-teacher-list.html" data-i18n="List">List</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-teacher-apply.html" data-i18n="Apply">Apply</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-teacher-add.html" data-i18n="Add">Add</a></li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#!">
                <span data-i18n="Student">Student</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../admins/course-student-list.html" data-i18n="List">list</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-student-apply.html" data-i18n="Apply">Apply</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-student-add.html" data-i18n="Add">Add</a></li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#!">
                <span data-i18n="Courses">Courses</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../admins/course-course-view.html" data-i18n="View">View</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-course-add.html" data-i18n="Add">Add</a></li>
              </ul>
            </li>
            <li class="pc-item"><a class="pc-link" href="../admins/course-pricing.html" data-i18n="Pricing">Pricing</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/course-site.html" data-i18n="Site">Site</a></li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#!">
                <span data-i18n="Setting">Setting</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../admins/course-setting-payment.html" data-i18n="Payment">Payment</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-setting-pricing.html" data-i18n="Pricing">Pricing</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-setting-notifications.html" data-i18n="Notification">Notifications</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="../application/plans.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-currency-circle-dollar"></i>
            </span>
            <span class="pc-mtext" data-i18n="Price">Plans</span></a
          >
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-user-circle"></i>
            </span>
            <span class="pc-mtext" data-i18n="User">Users</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/account-profile.html" data-i18n="Account Profile">Account Profile</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/social-media.html" data-i18n="Social media">Social media</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/user-card.html" data-i18n="User Card">User Card</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/user-list.html" data-i18n="User List">User List</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/team.html" data-i18n="Team">Team</a></li>
          </ul>
        </li>
        <li class="pc-item pc-caption">
          <label data-i18n="Pages">Pages</label>
          <i class="ph-duotone ph-devices"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-shield-checkered"></i>
            </span>
            <span class="pc-mtext" data-i18n="Authentication">Authentication</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span data-i18n="Authentication 1">Authentication 1</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/login-v1.html" data-i18n="Login">Login</a></li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/register-v1.html" data-i18n="Register">Register</a></li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/forgot-password-v1.html" data-i18n="Forget Password">Forgot Password</a></li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/reset-password-v1.html" data-i18n="Reset Password">reset password</a> </li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/code-verification-v1.html" data-i18n="Code Verification">code verification</a></li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span data-i18n="Authentication 2">Authentication 2</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/login-v2.html" data-i18n="Login">Login</a></li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/register-v2.html" data-i18n="Register">Register</a></li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/forgot-password-v2.html" data-i18n="Forget password">Forgot password</a> </li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/reset-password-v2.html" data-i18n="Reset password">reset password</a> </li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/code-verification-v2.html" data-i18n="Code Verification">code verification</a></li>
              </ul>
            </li>
            <li class="pc-item"><a class="pc-link" href="../pages/login-modal.html" data-i18n="Login Modal">Login Modal</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-wrench"></i>
            </span>
            <span class="pc-mtext" data-i18n="Maintenance">Maintenance</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/error-404.html" data-i18n="Error 404">Error 404</a></li>
            <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/connection-lost.html" data-i18n="Connection lost">Connection lost</a></li>
            <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/under-construction.html" data-i18n="Under construction">Under Construction</a></li>
            <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/coming-soon.html" data-i18n="Coming-Soon">Coming soon</a></li>
          </ul>
        </li>
        <li class="pc-item"
          ><a href="../pages/contact-us.html" class="pc-link"
            ><span class="pc-micon"> <i class="ph-duotone ph-target"></i> </span><span class="pc-mtext" data-i18n="Contact Us">Contact Us</span></a
          >
        </li>
        <li class="pc-item"
          ><a href="../index.html" class="pc-link" target="_blank"
            ><span class="pc-micon"> <i class="ph-duotone ph-rocket"></i> </span>
            <span class="pc-mtext pc-icon-link"> <span data-i18n="Landing">Landing</span> <i class="ti ti-link text-primary f-14"></i></span>
          </a>
        </li>
        <li class="pc-item"
          ><a href="../pages/loading.html" class="pc-link"
            ><span class="pc-micon"> <i class="ph-duotone ph-fan"></i> </span><span class="pc-mtext" data-i18n="Loading">Loading</span></a
          >
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-magnifying-glass"></i>
            </span>
            <span class="pc-mtext" data-i18n="Search">Search</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../pages/search-page.html" data-i18n="Search Page">Search Page</a></li>
            <li class="pc-item"><a class="pc-link" href="../pages/contact-search.html" data-i18n="Contact Search">Contact Search</a></li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="../pages/settings.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-globe"></i>
            </span>
            <span class="pc-mtext" data-i18n="Site Settings">Site Settings</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label data-i18n="UI Components">UI Components</label>
          <i class="ph-duotone ph-compass-tool"></i>
        </li>
        <li class="pc-item">
          <a href="../elements/bc_alert.html" class="pc-link" target="_blank"
            ><span class="pc-micon"> <i class="ph-duotone ph-compass-tool"></i></span>
            <span class="pc-mtext pc-icon-link"><span data-i18n="Components">Components</span> <i class="ti ti-link text-primary f-14"></i></span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../elements/animation.html" class="pc-link">
            <span class="pc-micon"> <i class="ph-duotone ph-flower"></i> </span><span class="pc-mtext" data-i18n="Animation">Animation</span></a
          >
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"
            ><span class="pc-micon"> <i class="ph-duotone ph-flower-lotus"></i></span><span class="pc-mtext" data-i18n="Icons">Icons</span
            ><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../elements/icon-feather.html" data-i18n="Feather">Feather</a></li>
            <li class="pc-item"><a class="pc-link" href="../elements/icon-fontawesome.html" data-i18n="Font Awesome 5">Font Awesome 5</a></li>
            <li class="pc-item"><a class="pc-link" href="../elements/icon-material.html" data-i18n="Material">Material</a></li>
            <li class="pc-item"><a class="pc-link" href="../elements/icon-tabler.html" data-i18n="Tabler">Tabler</a></li>
            <li class="pc-item"><a class="pc-link" href="../elements/icon-phosphor.html" data-i18n="Phospher">Phosphor</a></li>
            <li class="pc-item"><a class="pc-link" href="../elements/icon-custom.html" data-i18n="Custom">Custom</a></li>
          </ul>
        </li>
        <li class="pc-item pc-caption">
          <label data-i18n="Forms">Forms</label>
          <i class="ph-duotone ph-textbox"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-textbox"></i>
            </span>
            <span class="pc-mtext" data-i18n="Form Elements">Forms Elements</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../forms/form_elements.html" data-i18n="Form Basic">Form Basic</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form_floating.html" data-i18n="Form Floating">Form Floating</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_basic.html" data-i18n="Form Options">Form Options</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_input_group.html" data-i18n="Input Group">Input Groups</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_checkbox.html" data-i18n="CheckBox">Checkbox</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_radio.html" data-i18n="Radio">Radio</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_switch.html" data-i18n="Switch">Switch</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_megaoption.html" data-i18n="Mega Option">Mega option</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-plug-charging"></i>
            </span>
            <span class="pc-mtext" data-i18n="Form Plugins">Forms Plugins</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#">
                <span data-i18n="Date">Date</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../forms/form2_datepicker.html" data-i18n="Date Picker">Datepicker</a></li>
                <li class="pc-item"><a class="pc-link" href="../forms/form2_daterangepicker.html" data-i18n="Date Range Picker">Date Range Picker</a> </li>
                <li class="pc-item"><a class="pc-link" href="../forms/form2_timepicker.html" data-i18n="Timepicker">Timepicker</a></li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#">
                <span data-i18n="Select">Select</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../forms/form2_choices.html" data-i18n="Choices js">Choices js</a></li>
              </ul>
            </li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_rating.html" data-i18n="Rating">Rating</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_recaptcha.html" data-i18n="Google-Re-Captcha">Google reCaptcha</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_inputmask.html" data-i18n="Input Mask">Input Masks</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_clipboard.html" data-i18n="ClipBoard">Clipboard</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_nouislider.html" data-i18n="Nouislider">Nouislider</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_switchjs.html" data-i18n="Bootstrap Switch">Bootstrap Switch</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_typeahead.html" data-i18n="TypeaHead">Typeahead</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-pen-nib"></i>
            </span>
            <span class="pc-mtext" data-i18n="Text Editor">Text Editors</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../forms/form2_tinymce.html" data-i18n="Tinymce">Tinymce</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_quill.html" data-i18n="Quill">Quill</a></li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#">
                <span data-i18n="CK editor">CK editor</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
              </a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../forms/editor-classic.html" data-i18n="classic">classic</a></li>
                <li class="pc-item"><a class="pc-link" href="../forms/editor-document.html" data-i18n="Document">Document</a></li>
                <li class="pc-item"><a class="pc-link" href="../forms/editor-inline.html" data-i18n="Inline">Inline</a></li>
                <li class="pc-item"><a class="pc-link" href="../forms/editor-balloon.html" data-i18n="Balloon">Balloon</a></li>
              </ul>
            </li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_markdown.html" data-i18n="Markdown">Markdown</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-windows-logo"></i>
            </span>
            <span class="pc-mtext" data-i18n="Form Layouts">Form Layouts</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-default.html" data-i18n="Layouts">Layouts</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-multicolumn.html" data-i18n="MultiColumn">Multicolumn</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-actionbars.html" data-i18n="ActionBars">Actionbars</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-stickyactionbars.html" data-i18n="Sticky-ActionBar">Sticky Action bars</a> </li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-cloud-arrow-up"></i>
            </span>
            <span class="pc-mtext" data-i18n="File Upload">File upload</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../forms/file-upload.html" data-i18n="Dropzone">Dropzone</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_flu-uppy.html" data-i18n="Uppy">Uppy</a></li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="../forms/form2_wizard.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-tabs"></i>
            </span>
            <span class="pc-mtext" data-i18n="wizard">wizard</span></a
          >
        </li>
        <li class="pc-item">
          <a href="../forms/form-validation.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-password"></i>
            </span>
            <span class="pc-mtext" data-i18n="Form Validation">Form Validation</span></a
          >
        </li>
        <li class="pc-item"
          ><a href="../forms/image_crop.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-crop"></i>
            </span>
            <span class="pc-mtext" data-i18n="Images Cropper">Image cropper</span></a
          ></li
        >
        <li class="pc-item pc-caption">
          <label data-i18n="Tables">table</label>
          <i class="ph-duotone ph-table"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-table"></i>
            </span>
            <span class="pc-mtext" data-i18n="Bootstrap Table">Bootstrap Table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../table/tbl_bootstrap.html" data-i18n="Basic Table">Basic table</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_sizing.html" data-i18n="Sizing table">Sizing table</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_border.html" data-i18n="Border table">Border table</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_styling.html" data-i18n="Styling table">Styling table</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-grid-nine"></i>
            </span>
            <span class="pc-mtext" data-i18n="Vanilla table">Vanilla Table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-simple.html" data-i18n="Basic initialization">Basic initialization</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-dynamic-import.html" data-i18n="Dynamic Import">Dynamic Import</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-render-column-cells.html" data-i18n="Render Column Cells">Render Column Cells</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-column-manipulation.html" data-i18n="Column Manipulation">Column Manipulation</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-datetime-sorting.html" data-i18n="Datetime Sorting">Datetime Sorting</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-methods.html" data-i18n="Methods">Methods</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-add-rows.html" data-i18n="Add Rows">Add Rows</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-fetch-api.html" data-i18n="Fetch API">Fetch API</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-filters.html" data-i18n="Filters">Filters</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-export.html" data-i18n="Export">Export</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-text-columns"></i>
            </span>
            <span class="pc-mtext" data-i18n="Data Table">Data table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../table/dt_advance.html" data-i18n="Advance initialization">Advance initialization</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_styling.html" data-i18n="Styling">Styling</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_api.html" data-i18n="API">API</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_plugin.html" data-i18n="Plug-in">Plug-in</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_sources.html" data-i18n="Data sources">Data sources</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-wall"></i>
            </span>
            <span class="pc-mtext" data-i18n="DT extensions">DT extensions</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_autofill.html" data-i18n="Autofill">Autofill</a></li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span data-i18n="Button">Button</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../table/dt_ext_basic_buttons.html" data-i18n="Basic button">Basic button</a></li>
                <li class="pc-item"><a class="pc-link" href="../table/dt_ext_export_buttons.html" data-i18n="Data export">Data export</a></li>
              </ul>
            </li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_col_reorder.html" data-i18n="Col reorder">Col reorder</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_fixed_columns.html" data-i18n="Fixed columns">Fixed columns</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_fixed_header.html" data-i18n="Fixed header">Fixed header</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_key_table.html" data-i18n="Key table">Key table</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_responsive.html" data-i18n="Responsive">Responsive</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_row_reorder.html" data-i18n="Row reorder">Row reorder</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_scroller.html" data-i18n="Scroller">Scroller</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_select.html" data-i18n="Select table">Select table</a></li>
          </ul>
        </li>
        <li class="pc-item pc-caption">
          <label>Charts &amp; Maps</label>
          <i class="ph-duotone ph-chart-pie-slice"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-chart-donut"></i>
            </span>
            <span class="pc-mtext" data-i18n="Charts">Charts</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../chart/chart-apex.html" data-i18n="Apex Chart">Apex Chart</a></li>
            <li class="pc-item"><a class="pc-link" href="../chart/chart-peity.html" data-i18n="Peity Chart">Peity Chart</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-map-trifold"></i>
            </span>
            <span class="pc-mtext" data-i18n="Map">Maps</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../chart/map-vector.html" data-i18n="Vector Map">Vector Map</a></li>
            <li class="pc-item"><a class="pc-link" href="../chart/map-gmap.html" data-i18n="Google Map">Gmaps</a></li>
          </ul>
        </li>
        <li class="pc-item pc-caption">
          <label data-i18n="Other">Other</label>
          <i class="ph-duotone ph-suitcase"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"
            ><span class="pc-micon"> <i class="ph-duotone ph-tree-structure"></i> </span><span class="pc-mtext" data-i18n="Menu levels">Menu levels</span
            ><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 2.1">Level 2.1</a></li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span data-i18n="Level 2.2">Level 2.2</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.1">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.2">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">
                    <span data-i18n="Level 3.3">Level 3.3</span>
                    <span class="pc-arrow"><i data-feather="chevron-right"></i></span
                  ></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 4.1">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 4.2">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span data-i18n="Level 2.3">Level 2.3</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
              </a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.1">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.2">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">
                    <span data-i18n="Level 3.3">Level 3.3</span>
                    <span class="pc-arrow"><i data-feather="chevron-right"></i></span
                  ></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 4.1">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 4.2">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="pc-item"
          ><a href="../other/sample-page.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-desktop"></i>
            </span>
            <span class="pc-mtext" data-i18n="Sample Page">Sample page</span></a
          ></li
        >

      </ul>
      <div class="card nav-action-card bg-brand-color-4">
        <div class="card-body" style="background-image: url('../assets/images/layout/nav-card-bg.svg')">
          <h5 class="text-dark">Help Center</h5>
          <p class="text-dark text-opacity-75">Please contact us for more questions.</p>
          <a href="https://phoenixcoded.support-hub.io/" class="btn btn-primary" target="_blank">Go to help Center</a>
        </div>
      </div>
    </div>
    <div class="card pc-user-card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src={{ asset('images/avatar.png') }} alt="user-image" class="user-avtar wid-45 rounded-circle" />
          </div>
          <div class="flex-grow-1 ms-3">
            <div class="dropdown">
              <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1 me-2">
                    <h6 class="mb-0">Jonh Smith</h6>
                    <small>Administrator</small>
                  </div>
                  <div class="flex-shrink-0">
                    <div class="btn btn-icon btn-link-secondary avtar">
                      <i class="ph-duotone ph-windows-logo"></i>
                    </div>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu">
                <ul>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-user"></i>
                      <span>My Account</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-gear"></i>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-lock-key"></i>
                      <span>Lock Screen</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-power"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
    <ul class="list-unstyled">
        <!-- ======= Menu collapse Icon ===== -->

        <li class="pc-h-item pc-sidebar-collapse">
          <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
            <i class="bi bi-list"></i> <!-- Updated to Bootstrap Icon -->
          </a>
        </li>
        <li class="pc-h-item pc-sidebar-popup">
          <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
            <i class="bi bi-list"></i> <!-- Updated to Bootstrap Icon -->
          </a>
        </li>
        <li class="dropdown pc-h-item d-inline-flex d-md-none">
          <a
            class="pc-head-link dropdown-toggle arrow-none m-0"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="false"
            aria-expanded="false"
          >
            <i class="bi bi-search"></i> <!-- Updated to Bootstrap Icon -->
          </a>
        </li>
    </ul>
    
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item d-none d-md-inline-flex">
        <a
            class="pc-head-link dropdown-toggle arrow-none me-0"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="false"
            aria-expanded="false"
        >
        <i class="bi bi-dice-4"></i>
        </a>
        <div class="dropdown-menu dropdown-qta dropdown-menu-end pc-h-dropdown">
            <div class="overflow-hidden">
                <div class="qta-links m-n1">
                    <!-- Helpdesk Item -->
                    <a href="#!" class="dropdown-item">
                        <i class="bi bi-life-preserver"></i>
                        <span>Helpdesk</span>
                    </a>
                    <!-- Invoice Item -->
                    <a href="#!" class="dropdown-item">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Invoice</span>
                    </a>
                    <!-- Chat Item -->
                    <a href="#!" class="dropdown-item">
                        <i class="bi bi-chat-left-dots"></i>
                        <span>Chat</span>
                    </a>
                </div>
            </div>
        </div>
    </li>
    
      
 
    <li class="pc-h-item">
      <a class="pc-head-link pct-c-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
        <i class="bi bi-gear fs-3"></i>
      </a>
    </li>
  
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
      <i class="bi bi-bell"></i>
        <span class="badge bg-success pc-h-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Notifications</h5>
          <ul class="list-inline ms-auto mb-0">
            <li class="list-inline-item">
              <a href="../application/mail.html" class="avtar avtar-s btn-link-hover-primary">
                <i class="ti ti-link f-18"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 235px)">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p class="text-span">Today</p>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="{{ asset('images/avatar.png') }}" alt="user-image" class="user-avtar avtar avtar-s" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Keefe Bond added new tags to 💪 Design system</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">2 min ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"
                    ><br /><span class="text-truncate"
                      >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span
                    ></p
                  >
                  <span class="badge bg-light-primary border border-primary me-1 mt-1">web design</span>
                  <span class="badge bg-light-warning border border-warning me-1 mt-1">Dashobard</span>
                  <span class="badge bg-light-success border border-success me-1 mt-1">Design System</span>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avtar avtar-s bg-light-primary">
                    <i class="ph-duotone ph-chats-teardrop f-18"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Message</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">1 hour ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"
                    ><br /><span class="text-truncate"
                      >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span
                    ></p
                  >
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <p class="text-span">Yesterday</p>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avtar avtar-s bg-light-danger">
                    <i class="ph-duotone ph-user f-18"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Challenge invitation</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">12 hour ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"
                    ><br /><span class="text-truncate"><strong> Jonny aber </strong> invites to join the challenge</span></p
                  >
                  <button class="btn btn-sm rounded-pill btn-outline-secondary me-2">Decline</button>
                  <button class="btn btn-sm rounded-pill btn-primary">Accept</button>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avtar avtar-s bg-light-info">
                    <i class="ph-duotone ph-notebook f-18"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Forms</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">2 hour ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"
                    >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s.</p
                  >
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar avtar avtar-s" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Keefe Bond added new tags to 💪 Design system</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">2 min ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"
                    ><br /><span class="text-truncate"
                      >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span
                    ></p
                  >
                  <button class="btn btn-sm rounded-pill btn-outline-secondary me-2">Decline</button>
                  <button class="btn btn-sm rounded-pill btn-primary">Accept</button>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avtar avtar-s bg-light-success">
                    <i class="ph-duotone ph-shield-checkered f-18"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Security</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">5 hour ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"
                    >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s.</p
                  >
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="dropdown-footer">
          <div class="row g-3">
            <div class="col-6">
              <div class="d-grid"><button class="btn btn-primary">Archive all</button></div>
            </div>
            <div class="col-6">
              <div class="d-grid"><button class="btn btn-outline-secondary">Mark all as read</button></div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        data-bs-auto-close="outside"
        aria-expanded="false"
      >
        <img src="{{ asset('images/avatar.png') }}"  alt="user-image" class="user-avtar" />
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Profile</h5>
        </div>
        <div class="dropdown-body">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
            <ul class="list-group list-group-flush w-100">
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="{{ asset('images/avatar.png') }}" alt="user-image" class="wid-50 rounded-circle" />
                  </div>
                  <div class="flex-grow-1 mx-3">
                    <h5 class="mb-0">Carson Darrin</h5>
                    <a class="link-primary" href="mailto:carson.darrin@company.io">carson.darrin@company.io</a>
                  </div>
                  <span class="badge bg-primary">PRO</span>
                </div>
              </li>
              <li class="list-group-item">
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-key"></i>
                    <span>Change password</span>
                  </span>
                </a>
              
              
              </li>
              <li class="list-group-item">
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-heart"></i>
                    <span>Favorite</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-arrow-circle-down"></i>
                    <span>Download</span>
                  </span>
                  <span class="avtar avtar-xs rounded-circle bg-danger text-white">10</span>
                </a>
              </li>
        
              <li class="list-group-item">
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-user-circle"></i>
                    <span>Edit profile</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-star text-warning"></i>
                    <span>Upgrade account</span>
                    <span class="badge bg-light-success border border-success ms-2">NEW</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-bell"></i>
                    <span>Notifications</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-gear-six"></i>
                    <span>Settings</span>
                  </span>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-plus-circle"></i>
                    <span>Add account</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-power"></i>
                    <span>Logout</span>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
 </div>
</header>
<!-- [ Header ] end -->

s

    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                  <li class="breadcrumb-item" aria-current="page">Products</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Products</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

    @yield('content')
      
      </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="productOffcanvas" aria-labelledby="productOffcanvasLabel">
      <div class="offcanvas-header align-items-center justify-content-between">
        <h5 class="offcanvas-title" id="productOffcanvasLabel">Product Details</h5>
        <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="offcanvas">
          <i class="ti ti-x f-20"></i>
        </a>
      </div>
      <div class="offcanvas-body">
        <div class="card product-card shadow-none border-0">
          <div class="card-img-top p-0">
            <a href="../application/ecom_product-details.html">
              <img src="../assets/images/application/img-prod-4.jpg" alt="image" class="img-prod img-fluid" />
            </a>
            <div class="card-body position-absolute end-0 top-0">
              <div class="form-check prod-likes">
                <input type="checkbox" class="form-check-input" />
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-heart prod-likes-icon"
                >
                  <path
                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
                  ></path>
                </svg>
              </div>
            </div>
            <div class="card-body position-absolute start-0 top-0">
              <span class="badge bg-danger badge-prod-card">30%</span>
            </div>
          </div>
        </div>
        <h5>Glitter gold Mesh Walking Shoes</h5>
        <p class="text-muted"
          >Image Enlargement: After shooting, you can enlarge photographs of the objects for clear zoomed view. Change In Aspect Ratio:
          Boldly crop the subject and save it with a composition that has impact.</p
        >
        <ul class="list-group list-group-flush">
          <li class="list-group-item px-0">
            <div class="d-inline-flex align-items-center justify-content-between w-100">
              <p class="mb-0 text-muted me-1">Price</p>
              <h4 class="mb-0"><b>$299.00</b><span class="mx-2 f-14 text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
            </div>
          </li>
          <li class="list-group-item px-0">
            <div class="d-inline-flex align-items-center justify-content-between w-100">
              <p class="mb-0 text-muted me-1">Categories</p>
              <h6 class="mb-0">Shoes</h6>
            </div>
          </li>
          <li class="list-group-item px-0">
            <div class="d-inline-flex align-items-center justify-content-between w-100">
              <p class="mb-0 text-muted me-1">Status</p>
              <h6 class="mb-0"><span class="badge bg-warning rounded-pill">Process</span></h6>
            </div>
          </li>
          <li class="list-group-item px-0">
            <div class="d-inline-flex align-items-center justify-content-between w-100">
              <p class="mb-0 text-muted me-1">Brands</p>
              <h6 class="mb-0"><img src="../assets/images/application/img-prod-brand-1.png" alt="user-image" class="wid-40" /></h6>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid">
        <div class="row">
          <div class="col-sm-6 my-1">
            <p class="m-0">Made with &#9829; by Team <a href="https://themeforest.net/user/phoenixcoded" target="_blank"> Phoenixcoded</a></p>
          </div>
          <div class="col-sm-6 ms-auto my-1">
            <ul class="list-inline footer-link mb-0 justify-content-sm-end d-flex">
              <li class="list-inline-item"><a href="../index.html">Home</a></li>
              <li class="list-inline-item"><a href="https://pcoded.gitbook.io/light-able/" target="_blank">Documentation</a></li>
              <li class="list-inline-item"><a href="https://phoenixcoded.support-hub.io/" target="_blank">Support</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
 <!-- Required Js -->
   <!-- Bootstrap JS (optional for interactivity) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.0/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('js/plugins/simplebar.min.js') }}"></script>
<script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/i18next.min.js') }}"></script>
<script src="{{ asset('js/plugins/i18nextHttpBackend.min.js') }}"></script>
<script src="{{ asset('js/icon/custom-font.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script> <!-- Correct syntax used -->
<script src="{{ asset('js/theme.js') }}"></script>
<script src="{{ asset('js/multi-lang.js') }}"></script>
<script src="{{ asset('js/plugins/feather.min.js') }}"></script>


   
<script>
  layout_change('light');
</script>
   
<script>
  layout_sidebar_change('light');
</script>
  
<script>
  change_box_container('false');
</script>
 
<script>
  layout_caption_change('true');
</script>
   
<script>
  layout_rtl_change('false');
</script>
 
<script>
  preset_change('preset-1');
</script>


    <!-- [Page Specific JS] start -->
    <script>
      // scroll-block
      var tc = document.querySelectorAll('.scroll-block');
      for (var t = 0; t < tc.length; t++) {
        new SimpleBar(tc[t]);
      }
    </script>
    <!-- [Page Specific JS] end -->
    <div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
      <div class="offcanvas-header justify-content-between">
        <h5 class="offcanvas-title">Settings</h5>
        <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas" aria-label="Close"
          ><i class="ti ti-x"></i
        ></button>
      </div>
      <div class="pct-body customizer-body">
        <div class="offcanvas-body py-0">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="pc-dark">
                <h6 class="mb-1">Theme Mode</h6>
                <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                <div class="row theme-color theme-layout">
                  <div class="col-4">
                    <div class="d-grid">
                      <button class="preset-btn btn active" data-value="true" onclick="layout_change('light');">
                        <span class="btn-label">Light</span>
                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                      </button>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-grid">
                      <button class="preset-btn btn" data-value="false" onclick="layout_change('dark');">
                        <span class="btn-label">Dark</span>
                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                      </button>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-grid">
                      <button
                        class="preset-btn btn"
                        data-value="default"
                        onclick="layout_change_default();"
                        data-bs-toggle="tooltip"
                        title="Automatically sets the theme based on user's operating system's color scheme."
                      >
                        <span class="btn-label">Default</span>
                        <span class="pc-lay-icon d-flex align-items-center justify-content-center">
                          <i class="ph-duotone ph-cpu"></i>
                        </span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item pc-sidebar-color">
              <h6 class="mb-1">Sidebar Theme</h6>
              <p class="text-muted text-sm">Choose Sidebar Theme</p>
              <div class="row theme-color theme-sidebar-color">
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="true" onclick="layout_sidebar_change('dark');">
                      <span class="btn-label">Dark</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="false" onclick="layout_sidebar_change('light');">
                      <span class="btn-label">Light</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <h6 class="mb-1">Accent color</h6>
              <p class="text-muted text-sm">Choose your primary theme color</p>
              <div class="theme-color preset-color">
                <a href="#!" class="active" data-value="preset-1"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-2"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-3"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-4"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-5"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-6"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-7"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-8"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-9"><i class="ti ti-check"></i></a>
                <a href="#!" data-value="preset-10"><i class="ti ti-check"></i></a>
              </div>
            </li>
            <li class="list-group-item">
              <h6 class="mb-1">Sidebar Caption</h6>
              <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
              <div class="row theme-color theme-nav-caption">
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="true" onclick="layout_caption_change('true');">
                      <span class="btn-label">Caption Show</span>
                      <span class="pc-lay-icon"
                        ><span></span><span></span><span><span></span><span></span></span><span></span
                      ></span>
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="false" onclick="layout_caption_change('false');">
                      <span class="btn-label">Caption Hide</span>
                      <span class="pc-lay-icon"
                        ><span></span><span></span><span><span></span><span></span></span><span></span
                      ></span>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="pc-rtl">
                <h6 class="mb-1">Theme Layout</h6>
                <p class="text-muted text-sm">LTR/RTL</p>
                <div class="row theme-color theme-direction">
                  <div class="col-6">
                    <div class="d-grid">
                      <button class="preset-btn btn active" data-value="false" onclick="layout_rtl_change('false');">
                        <span class="btn-label">LTR</span>
                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                      </button>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-grid">
                      <button class="preset-btn btn" data-value="true" onclick="layout_rtl_change('true');">
                        <span class="btn-label">RTL</span>
                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item pc-box-width">
              <div class="pc-container-width">
                <h6 class="mb-1">Layout Width</h6>
                <p class="text-muted text-sm">Choose Full or Container Layout</p>
                <div class="row theme-color theme-container">
                  <div class="col-6">
                    <div class="d-grid">
                      <button class="preset-btn btn active" data-value="false" onclick="change_box_container('false')">
                        <span class="btn-label">Full Width</span>
                        <span class="pc-lay-icon"
                          ><span></span><span></span><span></span><span><span></span></span
                        ></span>
                      </button>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-grid">
                      <button class="preset-btn btn" data-value="true" onclick="change_box_container('true')">
                        <span class="btn-label">Fixed Width</span>
                        <span class="pc-lay-icon"
                          ><span></span><span></span><span></span><span><span></span></span
                        ></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-grid">
                <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </body>
  <!-- [Body] end -->
</html>
