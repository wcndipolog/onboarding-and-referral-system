<?= view('view_worklist/header/nav') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/authentication.css') ?>">
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
<!-- Bootstrap 5 JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/authentication.js'); ?>"></script>

<article class="d-flex flex-column justify-content-center align-items-center align-self-stretch flex-grow-1">
    <form method="" action="<?= site_url('/view') ?>" class="d-flex flex-column align-items-start"
        style="padding: 16px 24px; gap: 8px; border-radius: 6px; background: #FFF;">
        <div class="d-flex flex-column justify-content-center align-items-end align-self-stretch"
            style="padding: 12px 0px; gap: 4px;">
            <h2>Authentication Required</h2>
            <p>Authenticate to unlock the document. Access is restricted to authorized users only.</p>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-end align-self-stretch">
            <p class="access-code-label">Access Code</p>
            <input type="text" name="access_code" placeholder="Access Code"
                class="d-flex align-items-center align-self-stretch input-access-code">
        </div>

        <div class="d-flex flex-column justify-content-center align-items-end align-self-stretch">
            <button type="submit"
                class="d-flex justify-content-center align-items-center align-self-stretch button-unlock">
                <span>Unlock</span>
            </button>
        </div>
    </form>
</article>

<div class="modal fade" id="pdfModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content custom-modal-content">
            <button type="button" class="custom-close-button" data-bs-dismiss="modal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 25" fill="none">
                    <g filter="url(#filter0_d_1_8454)">
                        <path d="M16.7431 7.75739L8.25781 16.2427M16.7431 16.2426L8.25781 7.75734" stroke="#28303F"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <filter id="filter0_d_1_8454" x="-3.5" y="0" width="32" height="32" filterUnits="userSpaceOnUse"
                            color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_8454" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_8454" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </button>

            <div class="logo-container">
                <img src="<?= base_url('assets/img/brand/logo.png'); ?>" alt="Brand Logo">
            </div>

            <div class="trial-text flex-fill text-center">
                Create 30-days Free Trial Account
            </div>

            <div class="signup-description">
                Sign up to get started. You'll be able to manage your requests, upload documents, and access all
                features.
            </div>

            <div class="form-container d-flex flex-column align-items-start w-100 px-3 py-2 bg-white gap-16">
                <div class="form-group d-flex flex-column align-items-start w-100">
                    <label class="form-label-custom w-100">Email</label>
                    <input type="email" class="form-input form-control-custom w-100" placeholder="Enter your email">
                </div>

                <div class="form-group d-flex flex-column align-items-start w-100">
                    <label class="form-label-custom w-100">Phone Number</label>
                    <input type="text" class="form-input form-control-custom w-100"
                        placeholder="Enter your phone number">
                </div>

                <div class="form-group d-flex flex-column align-items-start w-100">
                    <label class="form-label-custom w-100">Password</label>
                    <input type="password" class="form-input form-control-custom w-100"
                        placeholder="Enter your password">
                </div>
            </div>

            <div class="submit-btn-container">
                <button type="submit">Continue</button>
            </div>

            <div class="divider-container d-flex align-items-center text-muted w-100">
                <div class="flex-grow-1" style="height: 1px; background-color: #B5B5B5;"></div>
                <span class="px-3 small" style="color: #656565">or</span>
                <div class="flex-grow-1" style="height: 1px; background-color: #B5B5B5;"></div>
            </div>

            <div class="d-flex flex-column align-items-center gap-16 w-100">
                <button type="button"
                    class="btn google-signup-btn w-100 d-flex justify-content-center align-items-center"
                    style="max-width: 426.67px;">
                    <span class="d-flex align-items-center justify-content-center me-2 google-logo-wrapper">
                        <svg class="google-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 533.5 544.3">
                            <path fill="#4285F4"
                                d="M533.5 278.4c0-17.4-1.6-34.1-4.7-50.4H272.1v95.4h146.9c-6.4 34.7-25.5 64.1-54.2 83.8v69.5h87.4c51.2-47.2 81.3-116.6 81.3-198.3z" />
                            <path fill="#34A853"
                                d="M272.1 544.3c73.4 0 135.1-24.2 180.1-65.6l-87.4-69.5c-24.2 16.2-55.2 25.7-92.7 25.7-71.2 0-131.5-48-153-112.8h-89.7v70.8c44.3 88.1 135.3 151.4 242.7 151.4z" />
                            <path fill="#FBBC05"
                                d="M119.1 322.1c-10.4-30.6-10.4-63.5 0-94.1v-70.8H29.4c-39.2 77.2-39.2 167.8 0 245z" />
                            <path fill="#EA4335"
                                d="M272.1 107.7c39.9 0 75.8 13.8 104.1 40.8l78-78C408.7 24.8 347 0 272.1 0 164.7 0 73.7 63.3 29.4 151.4l89.7 70.8C140.6 155.7 200.9 107.7 272.1 107.7z" />
                        </svg>
                    </span>
                    Sign up with Google
                </button>

                <p class="signup-note text-center mb-0">
                    By signing up you agree to SugboDoc’s Terms, Privacy Policy, and Security Policy.
                </p>
            </div>

            <div class="d-flex justify-content-center w-100">
                <p class="account-text text-center mb-0">
                    Already have an account?
                    <a href="#" class="sign-in-link">Sign in</a>
                </p>
            </div>
        </div>
    </div>
</div>

</body>

</html>