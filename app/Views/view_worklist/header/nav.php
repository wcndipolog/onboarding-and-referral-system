<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/nav.css'); ?>">
</head>

<body>
    <header class="d-flex align-items-center p-3 gap-3 border bg-white">
        <div class="d-inline-block header-logo">
            <img src="<?= base_url('assets/img/brand/logo.png'); ?>" alt="SugboDoc" class="img-fluid h-100 w-100">
        </div>
        <div class="d-flex flex-column justify-content-center flex-grow-1 align-self-stretch header-title">
            <p class="mb-0" style="font-size: 14px;">
                Services Requested /
                <span>
                    April 07, 2025
                </span>
            </p>
        </div>
        <div class="d-flex align-items-center header-button" id="openModalBtn">
            <span class="d-flex align-items-center">
                Create an Account
            </span>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>