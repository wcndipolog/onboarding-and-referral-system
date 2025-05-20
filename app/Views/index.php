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
        <div class="d-flex flex-column justify-content-center align-items-center flex-1 w-100 bg-white px-3 py-4 p-md-4 p-lg-5">
            <div class="d-flex align-items-center w-100 mb-3">
                <img src="assets/img/brand/sugbodoc-500px.png" alt="sugbodoc logo" id="sugbodoc-logo">
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center gap-4 w-100 h-100 flex-grow-1 px-3 px-lg-5">
                <div class="d-flex flex-column justify-content-center align-items-start gap-2 w-100">
                    <h2 class="fw-bold" style="font-family: 'Roboto'; font-size: 36px; line-height:44px; color: #424E79">Create your account</h2>
                    <p class="fw-normal" style="font-family: 'Roboto'; font-size: 16px; line-height:24px; color: #424E79">First things first let’s set up your login credentials for your facility.</p>
                </div>
                <div class="d-flex flex-column align-items-start align-self-stretch" style="gap: 32px">
                    <div class="d-flex flex-column align-items-start gap-3 align-self-stretch">
                        <div class="d-flex flex-column align-items-start gap-2 align-self-stretch">
                            <h3 class="fw-medium" style="color: #424E79; font-family: 'Roboto'; font-size: 16px; line-height: 24px;">Email</h3>
                            <div class="custom-input-wrapper">
                                <input
                                    type="email"
                                    class="custom-input"
                                    placeholder="you@company.com" />
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-start gap-2 align-self-stretch">
                            <h3 class="fw-medium" style="color: #424E79; font-family: 'Roboto'; font-size: 16px; line-height: 24px;">Phone Number</h3>
                            <div class="custom-input-wrapper">
                                <div class="country-select-wrapper dropdown">
                                    <button class="custom-dropdown-btn d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="flag-dropdown-icon-wrapper">
                                            <img src="https://flagcdn.com/w40/ph.png" alt="PH" class="flag-icon" />
                                            <svg xmlns="http://www.w3.org/2000/svg" class="dropdown-icon" viewBox="0 0 24 24" fill="none">
                                                <path d="M7 10L12 15L17 10H7Z" fill="#B5B5B5" />
                                            </svg>
                                        </div>
                                    </button>
                                    <ul class="dropdown-menu" id="countryDropdown">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#" data-code="PH" data-flag="https://flagcdn.com/w40/ph.png">
                                                <img src="https://flagcdn.com/w40/ph.png" class="flag-icon me-2" />Philippines
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#" data-code="US" data-flag="https://flagcdn.com/w40/us.png">
                                                <img src="https://flagcdn.com/w40/us.png" class="flag-icon me-2" />United States
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#" data-code="JP" data-flag="https://flagcdn.com/w40/jp.png">
                                                <img src="https://flagcdn.com/w40/jp.png" class="flag-icon me-2" />Japan
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <input
                                    type="number"
                                    class="custom-input"
                                    placeholder="Phone Number"
                                    inputmode="numeric"
                                    pattern="[0-9]*" />
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-start gap-2 align-self-stretch">
                            <h3 class="fw-medium" style="color: #424E79; font-family: 'Roboto'; font-size: 16px; line-height: 24px;">Password</h3>
                            <div class="custom-input-wrapper">
                                <input
                                    type="password"
                                    class="custom-input"
                                    placeholder="Password" />
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-between gap-3 w-100 ">
                            <div class="remember-me-wrapper w-100">
                                <input type="checkbox" id="rememberMe" class="custom-checkbox" />
                                <label for="rememberMe" class="remember-me-text">Remember me</label>
                            </div>
                            <div class="justify-content-end d-flex flex-row align-items-center align-self-stretch gap-2">
                                <a href="#" class="forgot-password-text">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center gap-3 align-self-stretch">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#verify-number-modal" class="primary-button">Create Account</button>
                        <div class="divider-wrapper">
                            <div class="line"></div>
                            <span class="or-text">or</span>
                            <div class="line"></div>
                        </div>
                        <button class="google-signup-button">
                            <img src="assets/img/icon/google.png" alt="Google logo" class="google-logo-img" />
                            <span class="google-text">Sign up with Google</span>
                        </button>
                        <div class="align-self-stretch">
                            <p class="typography-14-regular">By signing up you agree to SugboDoc’s Terms, Privacy Policy, and Security Policy.</p>
                        </div>
                    </div>
                    <div class="account-text">
                        Already have an account? <a href="#" class="sign-in-link">Sign in</a>
                    </div>
                </div>
            </div>
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
    <div class="modal fade" id="verify-number-modal" tabindex="-1" aria-labelledby="verify-number-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="--bs-modal-width: 600px;">
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
                <div class="modal-body d-flex flex-column align-items-center gap-3">
                    <div class="d-flex flex-column align-items-start gap-1 align-self-stretch verify-number-title">
                        <h3>Verify your account</h3>
                        <p>Enter the 5-digit code sent to +639560159630</p>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center align-self-stretch gap-2 verify-number-text-input">
                        <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" class="form-control verify-number-input text-center" />
                        <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" class="form-control verify-number-input text-center" />
                        <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" class="form-control verify-number-input text-center" />
                        <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" class="form-control verify-number-input text-center" />
                        <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" class="form-control verify-number-input text-center" />
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2 align-self-stretch">
                        <div class="verify-number-text">
                            It may take a minute to receive your code. Didn’t get the code? <a href="#" class="resend-link">Resend Code</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('pricing_plan') ?>" class="primary-button">Continue</a>
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
        const inputs = document.querySelectorAll('.verify-number-input');

        inputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                const value = e.target.value;
                if (!/^[0-9]$/.test(value)) {
                    e.target.value = '';
                    return;
                }
                if (index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && input.value === '' && index > 0) {
                    inputs[index - 1].focus();
                }
            });

            input.addEventListener('paste', (e) => {
                e.preventDefault();
                const paste = e.clipboardData.getData('text').replace(/\D/g, '').slice(0, inputs.length);
                [...paste].forEach((char, i) => {
                    if (inputs[i]) inputs[i].value = char;
                });
                const next = inputs[paste.length] || inputs[inputs.length - 1];
                next.focus();
            });
        });
    </script>

</body>

</html>