<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/patientTransfer_nav.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Font: Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <div class="d-flex">
        <div class="sidebar">
            <div class="logo">
                <img src="<?= base_url('assets/img/brand/logo.png'); ?>" alt="SugboDoc" class="img-fluid"
                    style="height:30px;">
            </div>

            <select class="form-select">
                <option value="PHT" selected>(GMT+08:00) Philippines</option>
                <option value="UTC">(GMT+00:00) UTC</option>
                <option value="EST">(GMT-05:00) Eastern Standard Time (US & Canada)</option>
                <option value="CST">(GMT-06:00) Central Standard Time (US & Canada)</option>
                <option value="MST">(GMT-07:00) Mountain Standard Time (US & Canada)</option>
                <option value="PST">(GMT-08:00) Pacific Standard Time (US & Canada)</option>
                <option value="IST">(GMT+05:30) India Standard Time</option>
                <option value="CET">(GMT+01:00) Central European Time</option>
                <option value="EET">(GMT+02:00) Eastern European Time</option>
                <option value="JST">(GMT+09:00) Japan Standard Time</option>
                <option value="AEST">(GMT+10:00) Australian Eastern Standard Time</option>
            </select>

            <nav class="nav flex-column">
                <a class="nav-link" data-bs-toggle="collapse" href="#dashMenu" role="button">
                    <span><i class="bi bi-house-door"></i> Dashboard</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <a class="nav-link" data-bs-toggle="collapse" href="#refMenu" role="button">
                    <span><i class="bi bi-arrow-left-right"></i> Referrals</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <div class="collapse submenu" id="refMenu">
                    <a class="nav-link" href="#">Internal <span class="badge-custom">10</span></a>
                    <a class="nav-link" href="#">External <span class="badge-custom">10</span></a>
                    <a class="nav-link" href="#">All Requests <span class="badge-custom">10</span></a>
                </div>
                <a class="nav-link" data-bs-toggle="collapse" href="#apptMenu" role="button">
                    <span><i class="bi bi-calendar-check"></i> Appointment</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <a class="nav-link" data-bs-toggle="collapse" href="#encMenu" role="button">
                    <span><i class="bi bi-journal-medical"></i> Encounter</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <a class="nav-link" href="#">
                    <span><i class="bi bi-person-lines-fill"></i> Patient Worklist</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <a class="nav-link" href="#">
                    <span><i class="fas fa-syringe"></i> Immunization</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <a class="nav-link" href="#">
                    <span><i class="bi bi-ui-checks"></i> Task Worklist</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <a class="nav-link" href="#">
                    <span><i class="bi bi-calendar3"></i> Schedule</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <a class="nav-link" href="#">
                    <span><i class="bi bi-stickies"></i> Clinical Notes</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <a class="nav-link" href="#">
                    <span><i class="bi bi-cash-stack"></i> Bills & Payments</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <a class="nav-link" href="#">
                    <span><i class="bi bi-people"></i> Staff Managements</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
            </nav>
        </div>

        <!-- Main content wrapper -->
        <div class="main-content flex-grow-1">