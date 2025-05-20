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
                <p id="progress-text">Step 1 of 4</p>
            </div>
            <div class="d-flex flex-column gap-4 w-100 flex-grow-1">
                <div class="progress-bar-wrapper justify-content-between align-items-center">
                    <div class="progress-bar" style="background-color: #4454C3;"></div>
                    <div class=" progress-bar" style="background-color: #F1F3F5;"></div>
                    <div class=" progress-bar" style="background-color: #F1F3F5;"></div>
                    <div class=" progress-bar" style="background-color: #F1F3F5;"></div>
                </div>
                <div class="d-felx flex-column justify-content-center align-items-start w-100">
                    <a class="back-button-wrapper" href="<?= base_url('/pricing_plan') ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" id="back-arrow">
                            <path d="M10.353 12.3954C10.3994 12.4418 10.4363 12.497 10.4614 12.5577C10.4866 12.6184 10.4995 12.6834 10.4995 12.7491C10.4995 12.8148 10.4866 12.8798 10.4614 12.9405C10.4363 13.0012 10.3994 13.0564 10.353 13.1028C10.3066 13.1493 10.2514 13.1861 10.1907 13.2112C10.13 13.2364 10.065 13.2493 9.99929 13.2493C9.9336 13.2493 9.86855 13.2364 9.80786 13.2112C9.74717 13.1861 9.69203 13.1493 9.64558 13.1028L4.64614 8.10337C4.59966 8.05694 4.56278 8.0018 4.53762 7.94111C4.51246 7.88042 4.49951 7.81536 4.49951 7.74966C4.49951 7.68396 4.51246 7.61891 4.53762 7.55821C4.56278 7.49752 4.59966 7.44238 4.64614 7.39595L9.64558 2.39651C9.73939 2.3027 9.86662 2.25 9.99929 2.25C10.132 2.25 10.2592 2.3027 10.353 2.39651C10.4468 2.49032 10.4995 2.61755 10.4995 2.75022C10.4995 2.88289 10.4468 3.01012 10.353 3.10393L5.70664 7.74966L10.353 12.3954Z" fill="#424E79" />
                        </svg>
                        <p>Back</p>
                    </a>
                </div>
                <div class="d-flex flex-column justify-content-start align-items-center gap-4 w-100 h-100 flex-grow-1">
                    <div class="d-flex flex-column justify-content-center align-items-start gap-2 w-100">
                        <h2 class="fw-bold m-0" style="font-family: 'Roboto'; font-size: 36px; line-height:44px; color: #424E79">What’s your role in the organization?</h2>
                        <p class="fw-normal m-0" style="font-family: 'Roboto'; font-size: 16px; line-height:24px; color: #424E79">Tell us about your position to personalize your experience.</p>
                    </div>
                    <div class="role-card-container">
                        <div class="role-card">
                            <img src="assets/img/admin-role-image.png" alt="admin" class="role-card-image">
                            <div class="role-card-text-container">
                                <h3>Administrator</h3>
                                <p>Manage operations, staff coordination, and hospital management</p>
                            </div>
                        </div>
                        <div class="role-card">
                            <img src="assets/img/practitioner-role-image.png" alt="practitioner" class="role-card-image">
                            <div class="role-card-text-container">
                                <h3>Practitioner & Administrator</h3>
                                <p>Access tools for patient care, staff coordination, and hospital management.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="plan-selection-container">
                    <div class="change-plan-card">
                        <div class="change-plan-card-text-container">
                            <h3>30 Days Free Trial</h3>
                            <p>Clinic Starter</p>
                        </div>
                        <button class="change-plan-text" data-bs-toggle="modal" data-bs-target="#change-package-modal">Change</button>
                    </div>
                </div>
                <a href="<?= base_url('practitioner_role') ?>" class="primary-button">Continue</a>
            </div>
        </div>
        <div class="d-none d-lg-flex align-self-stretch text-white flex-column w-100 w-lg-50 " id="organization-bg-image">
            <div class="ogranization-role-wrapper d-flex flex-column justify-content-between w-100 ">
                <div class="organization-role-text-container flex-grow-1">
                    <h1>“SugboDoc’s cloud EMR minimizes paper clutter, organizes records, ensures access across clinics, and eliminates prescription errors from illegible penmanship. The 'Renew Prescription' feature saves time, and the upcoming vaccination record is a must-have for pediatricians.”</h1>
                    <div class="d-flex align-items-center gap-3 align-self-stretch">
                        <img src="assets/img/organization-doctor-image.png" class="doctor-image" alt="doctor-image">
                        <div class="d-flex flex-column align-items-start justify-content-center gap-1 flex-grow-1 doctor-text-container">
                            <h2>Ana Noelle M. Dominguez, MD</h2>
                            <p>General Pediatrics, Pediatric Pulmonology</p>
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
</body>

</html>