<?= view('view_worklist/header/nav-unlock') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/view.css'); ?>">
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
<!-- Bootstrap 5 JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
const url = "<?= base_url('assets/pdf/sample.pdf'); ?>";
</script>
<script src="<?= base_url('assets/js/pdf_viewer.js'); ?>"></script>

<article class="d-flex flex-column align-self-stretch flex-grow-1" style="align-items:center; margin: 16px 0px;">
    <section style="display:flex; width:977px; align-items:center; gap:10px;">
        <div id="toolbar" style="display:flex; align-items:center; gap:8px; flex:1 0 0;">
            <input type="number" id="currentPage" min="1" value="1" class="current-page-input">
            /
            <span id="totalPages">1</span>

            <span class="divider"></span>

            <button id="zoomOutBtn" class="icon-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#272727" d="M19 12.998H5v-2h14z" />
                </svg>
            </button>
            <span id="zoomLevel" class="zoom-level">100%</span>

            <button id="zoomInBtn" class="icon-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#272727" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                </svg>
            </button>

            <span class="divider"></span>

            <button id="fitToScreenBtn" class="icon-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                    <path fill="#272727"
                        d="M469.334 85.333v341.333H42.667V85.333zM426.667 128H85.334v256h341.333zM283.582 294.248l30.17 30.17l-42.667 42.667L256 382.17l-57.751-57.752l30.17-30.17L256 321.813zm-138.667-96l30.17 30.17L147.52 256l27.565 27.581l-30.17 30.17L87.164 256l15.085-15.085zm222.17 0L424.837 256l-15.085 15.085l-42.667 42.666l-30.17-30.17L364.48 256l-27.565-27.582zM256 129.83l15.085 15.085l42.667 42.666l-30.17 30.17L256 190.186l-27.581 27.565l-30.17-30.17z" />
                </svg>
            </button>
            <button id="rotateBtn" class="icon-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#272727"
                        d="M7.34 6.41L.86 12.9l6.49 6.48l6.49-6.48zM3.69 12.9l3.66-3.66L11 12.9l-3.66 3.66zm15.67-6.26A8.95 8.95 0 0 0 13 4V.76L8.76 5L13 9.24V6c1.79 0 3.58.68 4.95 2.05a7.007 7.007 0 0 1 0 9.9a6.97 6.97 0 0 1-7.79 1.44l-1.49 1.49C10.02 21.62 11.51 22 13 22c2.3 0 4.61-.88 6.36-2.64a8.98 8.98 0 0 0 0-12.72" />
                </svg>
            </button>
        </div>

        <div class="buttons" style="display:flex; align-items:center; gap:8px;">
            <button id="openModalBtn" type="button" class="btn d-flex align-items-center justify-content-end gap-2"
                style="padding:8px 12px; border-radius:5px; border:1px solid #4454C3; background-color:transparent;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="#4454C3"
                        d="M11 16V7.85l-2.6 2.6L7 9l5-5l5 5l-1.4 1.45l-2.6-2.6V16zm-5 4q-.825 0-1.412-.587T4 18v-3h2v3h12v-3h2v3q0 .825-.587 1.413T18 20z" />
                </svg>
                <span
                    style="color:#202020; font-family:Inter, sans-serif; font-size:14px; font-style:normal; font-weight:400; line-height:normal;">
                    Upload Service Requested
                </span>
            </button>

            <button id="openModalBtn" type="button" class="btn d-flex align-items-center justify-content-end gap-2"
                style="padding:8px 12px; border-radius:5px; background:#4454C3; border:none;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="none" stroke="#f5f5f5" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="m11.966 11.136l-.004 8M19.825 17c4.495-3.16.475-7.73-3.706-7.73C13.296-1.732-3.265 7.368 4.074 15.662m11.07 1.156L11.962 20L8.78 16.818" />
                </svg>
                <span
                    style="color:var(--Grey-Light, #F5F5F5); font-family:Inter, sans-serif; font-size:14px; font-style:normal; font-weight:400; line-height:normal;">
                    Download
                </span>
            </button>
        </div>
    </section>

    <section>
        <canvas id="pdf-render"></canvas>
    </section>
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