<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Flex Container Layout</title>
    <link rel="stylesheet" href="assets/css/onboarding.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid min-vh-100 d-flex flex-column flex-lg-row align-items-stretch p-0">
        <div class="d-flex flex-column justify-content-center align-items-center flex-1 w-100 bg-white" style="padding: 48px">
            <div class="d-flex align-items-center w-100 mb-3">
                <img src="assets/img/brand/sugbodoc-500px.png" alt="sugbodoc logo" id="sugbodoc-logo">
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center gap-4 w-100 h-100 flex-grow-1" style="padding: 0 72px">
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
                        <div class="d-flex flex-row align-items-center gap-3 align-self-stretch">
                            <div class="remember-me-wrapper">
                                <input type="checkbox" id="rememberMe" class="custom-checkbox" />
                                <label for="rememberMe" class="remember-me-text">Remember me</label>
                            </div>
                            <a href="#" class="forgot-password-text">Forgot password?</a>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center gap-3 align-self-stretch">
                        <button class="primary-button">Create Account</button>
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
        <div class="d-none d-lg-flex flex-1 align-self-stretch text-white flex-column w-100 justify-content-center" id="bg-image">
            <div class="onboarding-image-container flex-column">
                <div class="onboarding-text-container">
                    <h1>Driving Digital Health Forward with Interoperable Solutions</h1>
                    <p>SugboDoc is HL7 Compliant — ensuring secure, standardized healthcare data exchange across hospitals, clinics, and partner systems.</p>
                </div>
                <div class="onboarding-asset-container">
                    <img src="assets/img/onboardingImage.png" alt="globe" id="onboardingImage">
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