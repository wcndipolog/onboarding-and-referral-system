<nav class="navbar navbar-expand-lg w-100" style="background-color: #4454C3; padding: 8px 8px;">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="dropdown">
            <button class="btn btn-light d-flex align-items-center"
                style="border-radius: 8px; font-size: 14px; padding: 8px 12px;" type="button" id="facilityDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">

                <img src="<?= base_url('assets/img/files/sample.png'); ?>" alt="Facility Logo" class="me-2"
                    style="height: 21px;">
                Chong Hua Medical Center Hospital
                <i class="bi bi-caret-down-fill ms-2" style="font-size: 14px;"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="facilityDropdown">
                <li><a class="dropdown-item" href="#">Chong Hua Medical Center Hospital</a></li>
                <li><a class="dropdown-item" href="#">Cebu Doctors</a></li>
                <li><a class="dropdown-item" href="#">Perpetual SocMed</a></li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn btn-link text-white d-flex align-items-center text-decoration-none"
                style="font-size: 14px;" type="button" id="userDropdown" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="<?= base_url('assets/img/files/2x2.jpg'); ?>" alt="User Avatar" class="rounded-circle me-2"
                    style="height: 40px; width: 40px;">
                John Doe Guzman
                <i class="bi bi-caret-down-fill ms-2" style="font-size: 14px;"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="#">My Profile</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>