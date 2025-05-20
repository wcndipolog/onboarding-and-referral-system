<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SugboDoc Onboarding</title>
    <link rel="stylesheet" href="assets/css/onboarding.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body>
    <div class="container-fluid min-vh-100 d-flex flex-column flex-lg-row align-items-stretch p-0">
        <div class="d-flex flex-column justify-content-start align-items-center flex-1 w-100 min-h-100 bg-white px-3 py-4 p-md-4 p-lg-5">
            <div class="d-flex align-items-center justify-content-between w-100 mb-3">
                <img src="assets/img/brand/sugbodoc-500px.png" alt="sugbodoc logo" id="sugbodoc-logo">
                <p id="progress-text">Step 2 of 4</p>
            </div>
            <form action="<?= base_url('practitioner_profession') ?>" method="post" class="d-flex flex-column gap-4 w-100 flex-grow-1">
                <div class="progress-bar-wrapper justify-content-between align-items-center">
                    <div class="progress-bar" style="background-color: #4454C3;"></div>
                    <div class="progress-bar" style="background-color: #4454C3;"></div>
                    <div class=" progress-bar" style="background-color: #F1F3F5;"></div>
                    <div class=" progress-bar" style="background-color: #F1F3F5;"></div>
                </div>
                <div class="d-felx flex-column justify-content-center align-items-start w-100">
                    <a class="back-button-wrapper" href="<?= base_url('/organization_role') ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" id="back-arrow">
                            <path d="M10.353 12.3954C10.3994 12.4418 10.4363 12.497 10.4614 12.5577C10.4866 12.6184 10.4995 12.6834 10.4995 12.7491C10.4995 12.8148 10.4866 12.8798 10.4614 12.9405C10.4363 13.0012 10.3994 13.0564 10.353 13.1028C10.3066 13.1493 10.2514 13.1861 10.1907 13.2112C10.13 13.2364 10.065 13.2493 9.99929 13.2493C9.9336 13.2493 9.86855 13.2364 9.80786 13.2112C9.74717 13.1861 9.69203 13.1493 9.64558 13.1028L4.64614 8.10337C4.59966 8.05694 4.56278 8.0018 4.53762 7.94111C4.51246 7.88042 4.49951 7.81536 4.49951 7.74966C4.49951 7.68396 4.51246 7.61891 4.53762 7.55821C4.56278 7.49752 4.59966 7.44238 4.64614 7.39595L9.64558 2.39651C9.73939 2.3027 9.86662 2.25 9.99929 2.25C10.132 2.25 10.2592 2.3027 10.353 2.39651C10.4468 2.49032 10.4995 2.61755 10.4995 2.75022C10.4995 2.88289 10.4468 3.01012 10.353 3.10393L5.70664 7.74966L10.353 12.3954Z" fill="#424E79" />
                        </svg>
                        <p>Back</p>
                    </a>
                </div>
                <div class="d-flex flex-column justify-content-start align-items-center gap-4 w-100 h-100 flex-grow-1">
                    <div class="d-flex flex-column justify-content-center align-items-start gap-2 w-100">
                        <h2 class="fw-bold m-0" style="font-family: 'Roboto'; font-size: 36px; line-height:44px; color: #424E79">Tell us about yourself</h2>
                        <p class="fw-normal m-0" style="font-family: 'Roboto'; font-size: 16px; line-height:24px; color: #424E79">Let’s personalize your profile so patients know who you are and what you specialize in.</p>
                    </div>

                    <div class="practitioner-role-input-container">
                        <div class="practitioner-role-input-box-container">
                            <div class="custom-input-wrapper">
                                <input type="text" class="custom-input" placeholder="First Name" name="first_name" required />
                            </div>
                            <div class="custom-input-wrapper">
                                <input type="text" class="custom-input" placeholder="Middle Name" name="middle_name" />
                            </div>
                        </div>

                        <div class="practitioner-role-input-box-container">
                            <div class="custom-input-wrapper" style="max-width: 80%; width: 100%;">
                                <input type="text" class="custom-input" placeholder="Last Name" name="last_name" required />
                            </div>
                            <div class="custom-input-wrapper position-relative" style="max-width: 20%; width:100%;">
                                <button class="w-100 d-flex justify-content-between align-items-center" style="all: unset; cursor: pointer;" type="button" id="suffixDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span id="selectedSuffix" class="custom-input">Suffix</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                        <path d="M7.247 11.14l-4.796-5.481C1.451 5.4 1.99 4.5 2.92 4.5h10.16c.93 0 1.469.9.469 1.159l-4.796 5.481a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="suffixDropdown">
                                    <li><a class="dropdown-item" href="#" onclick="selectSuffix('Jr.')">Jr.</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="selectSuffix('Sr.')">Sr.</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="selectSuffix('III')">III</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="selectSuffix('IV')">IV</a></li>
                                </ul>
                                <input type="hidden" id="suffixInput" name="suffix" value="">
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-start gap-2 align-self-stretch">
                            <h3 class="fw-medium" style="color: #424E79; font-family: 'Roboto'; font-size: 16px; line-height: 24px;">Professional name</h3>
                            <div class="custom-input-wrapper">
                                <input type="text" class="custom-input" placeholder="John Doe M.D" name="professional_name" />
                            </div>
                            <h4 class="fw-normal" style="color: #656565; font-family: 'Roboto'; font-size: 12px; line-height: 18px;">Example: John Doe , MD, DPPS</h4>
                        </div>
                    </div>

                    <div class="plan-selection-container">
                        <div class="change-plan-card">
                            <div class="change-plan-card-text-container">
                                <h3>30 Days Free Trial</h3>
                                <p>Clinic Starter</p>
                            </div>
                            <button class="change-plan-text" type="button" data-bs-toggle="modal" data-bs-target="#change-package-modal">Change</button>
                        </div>
                    </div>

                    <button type="submit" class="primary-button">Continue</button>
                </div>
            </form>
        </div>
        <div class="d-none d-lg-flex align-self-stretch text-white flex-column w-100 w-lg-50 " id="bg-image">
            <div class="onboarding-image-container d-flex flex-column justify-content-center align-items-center w-100 ">
                <div class="practitioner-card-container">
                    <div class="practitioner-card">
                        <div class="pracititioner-card-logo-wrapper">
                            <img src="assets/img/brand/sugbodoc-500px.png" alt="sugbodoc logo" id="sugbodoc-logo" />
                            <div class="practitioner-card-role">
                                <p>Practitioner</p>
                            </div>
                        </div>
                        <div class="practitioner-card-text-container">
                            <div class="practitioner-card-image-wrapper">
                                <img src="assets/img/practitioner-image-placeholder.png" alt="practitioner card" class="pracitioner-card-image" />
                            </div>
                            <div class="practitioner-card-text-wrapper">
                                <h2>Ana Noelle M. Dominguez, MD</h2>
                                <p class="placeholder-wave w-100 mb-0">
                                    <span class="placeholder col-12 placeholder-xl"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="practitioner-card-contact-container">
                        <div class="practitioner-card-contact">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M17 19H7V5H17M17 1H7C5.89 1 5 1.89 5 3V21C5 21.5304 5.21071 22.0391 5.58579 22.4142C5.96086 22.7893 6.46957 23 7 23H17C17.5304 23 18.0391 22.7893 18.4142 22.4142C18.7893 22.0391 19 21.5304 19 21V3C19 1.89 18.1 1 17 1Z" fill="white" />
                            </svg>
                            <p>0956059630</p>
                        </div>
                        <div class="practitioner-card-contact">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6ZM20 6L12 11L4 6H20ZM20 18H4V8L12 13L20 8V18Z" fill="white" />
                            </svg>
                            <p>acocorocyriel@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="change-package-modal" tabindex="-1" aria-labelledby="change-package-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <button class="close-modal-wrapper" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" id="back-arrow">
                            <path d="M10.353 12.3954C10.3994 12.4418 10.4363 12.497 10.4614 12.5577C10.4866 12.6184 10.4995 12.6834 10.4995 12.7491C10.4995 12.8148 10.4866 12.8798 10.4614 12.9405C10.4363 13.0012 10.3994 13.0564 10.353 13.1028C10.3066 13.1493 10.2514 13.1861 10.1907 13.2112C10.13 13.2364 10.065 13.2493 9.99929 13.2493C9.9336 13.2493 9.86855 13.2364 9.80786 13.2112C9.74717 13.1861 9.69203 13.1493 9.64558 13.1028L4.64614 8.10337C4.59966 8.05694 4.56278 8.0018 4.53762 7.94111C4.51246 7.88042 4.49951 7.81536 4.49951 7.74966C4.49951 7.68396 4.51246 7.61891 4.53762 7.55821C4.56278 7.49752 4.59966 7.44238 4.64614 7.39595L9.64558 2.39651C9.73939 2.3027 9.86662 2.25 9.99929 2.25C10.132 2.25 10.2592 2.3027 10.353 2.39651C10.4468 2.49032 10.4995 2.61755 10.4995 2.75022C10.4995 2.88289 10.4468 3.01012 10.353 3.10393L5.70664 7.74966L10.353 12.3954Z" fill="#424E79" />
                        </svg>
                        <p>Back</p>
                    </button>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column justify-content-start align-items-center gap-4 w-100 flex-grow-1 px-3 py-4 px-lg-5">
                    <div class="pricing-text-wrapper">
                        <h2>Choose the best plan for you</h2>
                        <p>Stay updated and supported with each package</p>

                    </div>
                    <div class="choose-plan-wrapper">
                        <div class="pricing-text d-flex flex-row align-items-center justify-content-center gap-1">
                            Save 16% <p>with yearly</p>
                        </div>
                        <div class="container d-flex flex-row align-items-center justify-content-center">
                            <div class="toggle-container">
                                <div class="toggle-option active">Monthly</div>
                                <div class="toggle-option">Annually</div>
                                <div class="toggle-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row flex-nowrap overflow-auto align-items-start gap-3 align-self-stretch">
                        <div class="pricing-plan-card-wrapper">
                            <div class="pricing-plan-card">
                                <div class="pricing-plan-card-content">
                                    <div class="pricing-plan-card-content-title">
                                        <h3>eClinic</h3>
                                    </div>
                                    <h2>$29.99</h2>
                                    <p>Best suited for small clinics beginning their digital journey.</p>
                                </div>
                                <div class="line"></div>
                                <div class="pricing-plan-card-content-package-container">
                                    <div class="pricing-plan-card-content-package-wrapper">
                                        <div class="pricing-plan-card-content-package">
                                            <div class="pricing-plan-card-content-package-checkmark">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.99984 2.3826L2.99984 6.3826L1.1665 4.54926L1.6365 4.07926L2.99984 5.43926L6.52984 1.9126L6.99984 2.3826Z" fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pricing-plan-card-content-package-text">
                                            <h2>1 Doctor</h2>
                                        </div>
                                    </div>
                                    <div class="pricing-plan-card-content-package-wrapper">
                                        <div class="pricing-plan-card-content-package">
                                            <div class="pricing-plan-card-content-package-checkmark">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.99984 2.3826L2.99984 6.3826L1.1665 4.54926L1.6365 4.07926L2.99984 5.43926L6.52984 1.9126L6.99984 2.3826Z" fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pricing-plan-card-content-package-text">
                                            <h2>Regular Storage (4GB)</h2>
                                        </div>
                                    </div>
                                    <div class="pricing-plan-card-content-package-wrapper">
                                        <div class="pricing-plan-card-content-package">
                                            <div class="pricing-plan-card-content-package-checkmark">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.99984 2.3826L2.99984 6.3826L1.1665 4.54926L1.6365 4.07926L2.99984 5.43926L6.52984 1.9126L6.99984 2.3826Z" fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pricing-plan-card-content-package-text">
                                            <h2>Imaging Storage (500MB)</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-plan-card-content-button-wrapper">
                                    <a href="<?= base_url('organization_role') ?>" class="pricing-primary-button">Subscribe Now</a>
                                    <button class="pricing-outline-button">Start Free Trial</button>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-plan-card-wrapper">
                            <div class="pricing-plan-card">
                                <div class="pricing-plan-card-content">
                                    <div class="pricing-plan-card-content-title">
                                        <h3>eBirthing Homes</h3>
                                    </div>
                                    <h2>$39.99</h2>
                                    <p>Best suited for small clinics beginning their digital journey.</p>
                                </div>
                                <div class="line"></div>
                                <div class="pricing-plan-card-content-package-container">
                                    <div class="pricing-plan-card-content-package-wrapper">
                                        <div class="pricing-plan-card-content-package">
                                            <div class="pricing-plan-card-content-package-checkmark">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.99984 2.3826L2.99984 6.3826L1.1665 4.54926L1.6365 4.07926L2.99984 5.43926L6.52984 1.9126L6.99984 2.3826Z" fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pricing-plan-card-content-package-text">
                                            <h2>4 Doctors</h2>
                                        </div>
                                    </div>
                                    <div class="pricing-plan-card-content-package-wrapper">
                                        <div class="pricing-plan-card-content-package">
                                            <div class="pricing-plan-card-content-package-checkmark">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.99984 2.3826L2.99984 6.3826L1.1665 4.54926L1.6365 4.07926L2.99984 5.43926L6.52984 1.9126L6.99984 2.3826Z" fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pricing-plan-card-content-package-text">
                                            <h2>Regular Storage (16GB)</h2>
                                        </div>
                                    </div>
                                    <div class="pricing-plan-card-content-package-wrapper">
                                        <div class="pricing-plan-card-content-package">
                                            <div class="pricing-plan-card-content-package-checkmark">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.99984 2.3826L2.99984 6.3826L1.1665 4.54926L1.6365 4.07926L2.99984 5.43926L6.52984 1.9126L6.99984 2.3826Z" fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pricing-plan-card-content-package-text">
                                            <h2>Imaging Storage (1GB)</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-plan-card-content-button-wrapper">
                                    <a href="<?= base_url('organization_role') ?>" class="pricing-primary-button">Subscribe Now</a>
                                    <button class="pricing-outline-button">Start Free Trial</button>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-plan-card-wrapper">
                            <div class="pricing-plan-card">
                                <div class="pricing-plan-card-content">
                                    <div class="pricing-plan-card-content-title">
                                        <h3>eHospital</h3>
                                    </div>
                                    <h2>$59.99</h2>
                                    <p>Best suited for small clinics beginning their digital journey.</p>
                                </div>
                                <div class="line"></div>
                                <div class="pricing-plan-card-content-package-container">
                                    <div class="pricing-plan-card-content-package-wrapper">
                                        <div class="pricing-plan-card-content-package">
                                            <div class="pricing-plan-card-content-package-checkmark">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.99984 2.3826L2.99984 6.3826L1.1665 4.54926L1.6365 4.07926L2.99984 5.43926L6.52984 1.9126L6.99984 2.3826Z" fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pricing-plan-card-content-package-text">
                                            <h2>16 Doctors</h2>
                                        </div>
                                    </div>
                                    <div class="pricing-plan-card-content-package-wrapper">
                                        <div class="pricing-plan-card-content-package">
                                            <div class="pricing-plan-card-content-package-checkmark">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.99984 2.3826L2.99984 6.3826L1.1665 4.54926L1.6365 4.07926L2.99984 5.43926L6.52984 1.9126L6.99984 2.3826Z" fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pricing-plan-card-content-package-text">
                                            <h2>Regular Storage (64GB)</h2>
                                        </div>
                                    </div>
                                    <div class="pricing-plan-card-content-package-wrapper">
                                        <div class="pricing-plan-card-content-package">
                                            <div class="pricing-plan-card-content-package-checkmark">
                                                <svg xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.99984 2.3826L2.99984 6.3826L1.1665 4.54926L1.6365 4.07926L2.99984 5.43926L6.52984 1.9126L6.99984 2.3826Z" fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pricing-plan-card-content-package-text">
                                            <h2>Imaging Storage (2GB)</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-plan-card-content-button-wrapper">
                                    <a href="<?= base_url('organization_role') ?>" class="pricing-primary-button">Subscribe Now</a>
                                    <button class="pricing-outline-button">Start Free Trial</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="package-info-container">
                        <h2>Every plan comes with :</h2>
                        <div class="package-info-wrapper">
                            <div class="package-info-list">
                                <div class="package-info-text">
                                    <div class="package-info-checkmark">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.44631L3.77143 9.5L0 5.80872L0.966857 4.86242L3.77143 7.60067L11.0331 0.5L12 1.44631Z" />
                                        </svg>
                                    </div>
                                    <p>Prescription</p>
                                </div>
                                <div class="package-info-text">
                                    <div class="package-info-checkmark">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.44631L3.77143 9.5L0 5.80872L0.966857 4.86242L3.77143 7.60067L11.0331 0.5L12 1.44631Z" />
                                        </svg>
                                    </div>
                                    <p>Invoice</p>
                                </div>
                                <div class="package-info-text">
                                    <div class="package-info-checkmark">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.44631L3.77143 9.5L0 5.80872L0.966857 4.86242L3.77143 7.60067L11.0331 0.5L12 1.44631Z" />
                                        </svg>
                                    </div>
                                    <p>SMS InvoiceCenter</p>
                                </div>
                                <div class="package-info-text">
                                    <div class="package-info-checkmark">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.44631L3.77143 9.5L0 5.80872L0.966857 4.86242L3.77143 7.60067L11.0331 0.5L12 1.44631Z" />
                                        </svg>
                                    </div>
                                    <p>Professional Billing</p>
                                </div>
                                <div class="package-info-text">
                                    <div class="package-info-checkmark">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.44631L3.77143 9.5L0 5.80872L0.966857 4.86242L3.77143 7.60067L11.0331 0.5L12 1.44631Z" />
                                        </svg>
                                    </div>
                                    <p>Up to 4 Electronic Medical Records</p>
                                </div>
                                <div class="package-info-text">
                                    <div class="package-info-checkmark">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.44631L3.77143 9.5L0 5.80872L0.966857 4.86242L3.77143 7.60067L11.0331 0.5L12 1.44631Z" />
                                        </svg>
                                    </div>
                                    <p>Soap Notes</p>
                                </div>
                                <div class="package-info-text">
                                    <div class="package-info-checkmark">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.44631L3.77143 9.5L0 5.80872L0.966857 4.86242L3.77143 7.60067L11.0331 0.5L12 1.44631Z" />
                                        </svg>
                                    </div>
                                    <p>Appointment Calendar</p>
                                </div>
                            </div>
                            <div class="package-info-list">
                                <div class="package-info-text">
                                    <div class="package-info-checkmark">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.44631L3.77143 9.5L0 5.80872L0.966857 4.86242L3.77143 7.60067L11.0331 0.5L12 1.44631Z" />
                                        </svg>
                                    </div>
                                    <p>Up to 4 Clinic Locations</p>
                                </div>
                                <div class="package-info-text">
                                    <div class="package-info-checkmark">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.44631L3.77143 9.5L0 5.80872L0.966857 4.86242L3.77143 7.60067L11.0331 0.5L12 1.44631Z" />
                                        </svg>
                                    </div>
                                    <p>Appointment Calendar</p>
                                </div>
                                <div class="package-info-text">
                                    <div class="package-info-checkmark">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.44631L3.77143 9.5L0 5.80872L0.966857 4.86242L3.77143 7.60067L11.0331 0.5L12 1.44631Z" />
                                        </svg>
                                    </div>
                                    <p>Patient Transfer</p>
                                </div>
                                <div class="package-info-text">
                                    <div class="package-info-checkmark">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.44631L3.77143 9.5L0 5.80872L0.966857 4.86242L3.77143 7.60067L11.0331 0.5L12 1.44631Z" />
                                        </svg>
                                    </div>
                                    <p>Immunization</p>
                                </div>
                                <div class="package-info-text">
                                    <div class="package-info-checkmark">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.44631L3.77143 9.5L0 5.80872L0.966857 4.86242L3.77143 7.60067L11.0331 0.5L12 1.44631Z" />
                                        </svg>
                                    </div>
                                    <p>Cloud Imaging </p>
                                </div>
                                <div class="package-info-text">
                                    <div class="package-info-checkmark">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.44631L3.77143 9.5L0 5.80872L0.966857 4.86242L3.77143 7.60067L11.0331 0.5L12 1.44631Z" />
                                        </svg>
                                    </div>
                                    <p>Practitioner AI Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const dropdownItems = document.querySelectorAll("#countryDropdown .dropdown-item");
            const selectedFlag = document.getElementById("selectedFlag");
            dropdownItems.forEach(item => {
                item.addEventListener("click", (e) => {
                    e.preventDefault();
                    const flagUrl = item.getAttribute("data-flag");
                    selectedFlag.src = flagUrl;
                });
            });
        });
    </script>
    <script>
        function selectSuffix(suffix) {
            document.getElementById("selectedSuffix").innerText = suffix;
            document.getElementById("suffixInput").value = suffix;
        }
    </script>
</body>

</html>