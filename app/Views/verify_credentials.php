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
                <p id="progress-text">Step 4 of 4</p>
            </div>
            <form action="<?= base_url('verify_credentials') ?>" method="post" class="d-flex flex-column gap-4 w-100 flex-grow-1">
                <div class="progress-bar-wrapper justify-content-between align-items-center">
                    <div class="progress-bar" style="background-color: #4454C3;"></div>
                    <div class="progress-bar" style="background-color: #4454C3;"></div>
                    <div class="progress-bar" style="background-color: #4454C3;"></div>
                    <div class="progress-bar" style="background-color: #4454C3;"></div>
                </div>
                <div class="d-felx flex-column justify-content-center align-items-start w-100">
                    <a class="back-button-wrapper" href="<?= base_url('/practitioner_profession') ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" id="back-arrow">
                            <path d="M10.353 12.3954C10.3994 12.4418 10.4363 12.497 10.4614 12.5577C10.4866 12.6184 10.4995 12.6834 10.4995 12.7491C10.4995 12.8148 10.4866 12.8798 10.4614 12.9405C10.4363 13.0012 10.3994 13.0564 10.353 13.1028C10.3066 13.1493 10.2514 13.1861 10.1907 13.2112C10.13 13.2364 10.065 13.2493 9.99929 13.2493C9.9336 13.2493 9.86855 13.2364 9.80786 13.2112C9.74717 13.1861 9.69203 13.1493 9.64558 13.1028L4.64614 8.10337C4.59966 8.05694 4.56278 8.0018 4.53762 7.94111C4.51246 7.88042 4.49951 7.81536 4.49951 7.74966C4.49951 7.68396 4.51246 7.61891 4.53762 7.55821C4.56278 7.49752 4.59966 7.44238 4.64614 7.39595L9.64558 2.39651C9.73939 2.3027 9.86662 2.25 9.99929 2.25C10.132 2.25 10.2592 2.3027 10.353 2.39651C10.4468 2.49032 10.4995 2.61755 10.4995 2.75022C10.4995 2.88289 10.4468 3.01012 10.353 3.10393L5.70664 7.74966L10.353 12.3954Z" fill="#424E79" />
                        </svg>
                        <p>Back</p>
                    </a>
                </div>
                <div class="d-flex flex-column justify-content-start align-items-center gap-4 w-100 h-100 flex-grow-1">
                    <div class="d-flex flex-column justify-content-center align-items-start gap-2 w-100">
                        <h2 class="fw-bold m-0" style="font-family: 'Roboto'; font-size: 36px; line-height:44px; color: #424E79">Verify your credentials</h2>
                        <p class="fw-normal m-0" style="font-family: 'Roboto'; font-size: 16px; line-height:24px; color: #424E79">To maintain a trusted network of healthcare professionals, we’ll need some verification.</p>
                    </div>

                    <div class="practitioner-role-input-container">
                        <div class="practitioner-role-input-box-container">
                            <div class="custom-input-wrapper">
                                <input type="text" class="custom-input" placeholder="PTR ID" name="ptr" required />
                            </div>
                            <div class="custom-input-wrapper">
                                <input type="text" class="custom-input" placeholder="PRC ID" name="prc" />
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-start gap-2 align-self-stretch">
                            <div class="d-flex flex-column align-items-start gap-2 align-self-stretch">
                                <h3 class="fw-medium m-0" style="color: #424E79; font-family: 'Roboto'; font-size: 16px; line-height: 24px;">PRC Image Upload :</h3>
                                <h4 class="fw-normal m-0" style="color: #424E79; font-family: 'Roboto'; font-size: 12px; line-height: 18px;">(Image size should be less than 5MB)</h4>
                            </div>

                            <div class="upload-file-container text-center" id="drop-area">
                                <svg xmlns="http://www.w3.org/2000/svg" class="upload-file-icon" width="40" height="40" viewBox="0 0 48 48">
                                    <path d="M13 40C9.96 40 7.36667 38.9533 5.22 36.86C3.07333 34.7533 2 32.1867 2 29.16C2 26.56 2.78 24.24 4.34 22.2C5.91333 20.16 7.96667 18.86 10.5 18.3C11.34 15.2333 13.0067 12.7533 15.5 10.86C18.0067 8.95333 20.84 8 24 8C27.9067 8 31.2133 9.36 33.92 12.08C36.64 14.7867 38 18.0933 38 22C40.3067 22.2667 42.2133 23.2667 43.72 25C45.24 26.7067 46 28.7067 46 31C46 33.5067 45.1267 35.6333 43.38 37.38C41.6333 39.1267 39.5067 40 37 40H26C24.9067 40 23.9667 39.6067 23.18 38.82C22.3933 38.0467 22 37.1067 22 36V25.7L18.8 28.8L16 26L24 18L32 26L29.2 28.8L26 25.7V36H37C38.4 36 39.58 35.5133 40.54 34.54C41.5133 33.58 42 32.4 42 31C42 29.6 41.5133 28.42 40.54 27.46C39.58 26.4867 38.4 26 37 26H34V22C34 19.24 33.0267 16.88 31.08 14.92C29.1333 12.9733 26.7733 12 24 12C21.24 12 18.88 12.9733 16.92 14.92C14.9733 16.88 14 19.24 14 22H13C11.0667 22 9.42 22.6867 8.06 24.06C6.68667 25.42 6 27.0667 6 29C6 30.9333 6.68667 32.6 8.06 34C9.42 35.3333 11.0667 36 13 36H18V40" fill="#DCDCDC" />
                                </svg>
                                <p class="m-0">Drag and drop a file here or <span class="text-primary" style="cursor: pointer;" id="upload-text">click</span></p>
                                <input type="file" id="fileElem" accept="image/png, image/jpeg" style="display:none">
                                <div id="file-preview" class="mt-2"></div>
                            </div>
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
            <div class="onboarding-image-container d-flex flex-column justify-content-between w-100 ">
                <div class="onboarding-text-container flex-grow-1">
                    <h1>Driving Digital Health Forward with Interoperable Solutions</h1>
                    <p>SugboDoc is HL7 Compliant — ensuring secure, standardized healthcare data exchange across hospitals, clinics, and partner systems.</p>
                </div>
                <div class="onboarding-asset-container d-flex align-items-end ">
                    <img src="assets/img/onboardingImage.png" alt="globe" class="onboarding-image">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="change-package-modal" tabindex="-1" aria-labelledby="change-package-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
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
        function selectValue(value, type) {
            if (type === 'Profession') {
                document.getElementById('selectedProfession').textContent = value;
                document.getElementById('professionInput').value = value;
            } else if (type === 'Specialization') {
                document.getElementById('selectedSpecialization').textContent = value;
                document.getElementById('specializationInput').value = value;
            }
        }
    </script>
    <script>
        const dropArea = document.getElementById("drop-area");
        const fileInput = document.getElementById("fileElem");
        const uploadText = document.getElementById("upload-text");
        const preview = document.getElementById("file-preview");

        // Trigger file input on text click
        uploadText.addEventListener("click", () => fileInput.click());

        // Highlight drop area on drag events
        ["dragenter", "dragover"].forEach(event => {
            dropArea.addEventListener(event, e => {
                e.preventDefault();
                dropArea.classList.add("dragover");
            });
        });

        ["dragleave", "drop"].forEach(event => {
            dropArea.addEventListener(event, e => {
                e.preventDefault();
                dropArea.classList.remove("dragover");
            });
        });

        // Handle drop
        dropArea.addEventListener("drop", e => {
            const file = e.dataTransfer.files[0];
            handleFile(file);
        });

        // Handle file select
        fileInput.addEventListener("change", () => {
            const file = fileInput.files[0];
            handleFile(file);
        });

        function handleFile(file) {
            if (!file) return;

            const maxSizeMB = 5;
            if (!["image/png", "image/jpeg"].includes(file.type)) {
                alert("Only PNG or JPEG images are allowed.");
                return;
            }

            if (file.size > maxSizeMB * 1024 * 1024) {
                alert("File size must be less than 5MB.");
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                preview.innerHTML = `<img src="${e.target.result}" alt="Preview" class="img-fluid rounded" style="max-width: 200px;">`;
            };
            reader.readAsDataURL(file);
        }
    </script>

</body>

</html>