@extends('auth.layout.main')

@section('header-resources')
@endsection

@section('auth-content')
    <!-- Content -->
    <div class="positive-relative">
      <div class="authentication-wrapper authentication-basic">
        <div class="authentication-inner py-4">
          <!--  Two Steps Verification -->
          <div class="card p-2">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
              <a href="{{ asset('/') }}" class="logo d-flex align-items-center">
                <!-- <img src="assets-2/img/logo.png" alt="">
                <span>FlexStart</span> -->
    
                <img src="{{ asset('assets-2/img/CodeFoTech-1.png') }}" style="max-height: 40px" alt="Codefotech">
            </a>
            </div>
            <!-- /Logo -->
            <div class="card-body">
              <h4 class="mb-2 fw-semibold">Two Step Verification 💬</h4>
              <p class="text-start mb-4">
                We sent a verification code to your mobile. Enter the code from the mobile in the field below.
                <span class="fw-bold d-block mt-2">******1234</span>
              </p>
              <p class="mb-0 fw-semibold">Type your 6 digit security code</p>
              <form id="twoStepsForm" action="index.html" method="POST">
                <div class="mb-3">
                  <div
                    class="auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
                    <input
                      type="text"
                      class="form-control auth-input w-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2"
                      maxlength="1"
                      autofocus />
                    <input
                      type="text"
                      class="form-control auth-input w-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2"
                      maxlength="1" />
                    <input
                      type="text"
                      class="form-control auth-input w-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2"
                      maxlength="1" />
                    <input
                      type="text"
                      class="form-control auth-input w-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2"
                      maxlength="1" />
                    <input
                      type="text"
                      class="form-control auth-input w-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2"
                      maxlength="1" />
                    <input
                      type="text"
                      class="form-control auth-input w-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2"
                      maxlength="1" />
                  </div>
                  <!-- Create a hidden field which is combined by 3 fields above -->
                  <input type="hidden" name="otp" />
                </div>
                <button class="btn btn-primary d-grid w-100 mb-3">Verify my account</button>
                <div class="text-center">
                  Didn't get the code?
                  <a href="javascript:void(0);"> Resend </a>
                </div>
              </form>
            </div>
          </div>
          <!-- / Two Steps Verification -->
          <img
            alt="mask"
            src="{{ asset('assets/img/illustrations/auth-basic-register-mask-light.png') }}"
            class="authentication-image d-none d-lg-block"
            data-app-light-img="illustrations/auth-basic-register-mask-light.png"
            data-app-dark-img="illustrations/auth-basic-register-mask-dark.png" />
        </div>
      </div>
    </div>
    <!-- / Content -->
@endsection

@section('footer-script')
@endsection