<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from coderthemes.com/konrix/layouts/auth-lock-screen.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:44:30 GMT -->
  <head>
    <meta charset="utf-8" />
    <title>Lock Screen | Konrix - Responsive Tailwind Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="A fully featured admin theme which can be used to build CRM, CMS, etc."
      name="description"
    />
    <meta content="coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <div
      class="bg-gradient-to-r from-rose-100 to-teal-100 dark:from-gray-700 dark:via-gray-900 dark:to-black"
    >
      <!-- ============================================================== -->
      <!-- Start Page Content here -->
      <!-- ============================================================== -->

      <div class="h-screen w-screen flex justify-center items-center">
        <div class="2xl:w-1/4 lg:w-1/3 md:w-1/2 w-full">
          <div class="card overflow-hidden sm:rounded-md rounded-none">
            <div class="p-6">
              <div class="flex justify-between">
                <div class="flex flex-col gap-4 mb-6">
                  <a href="index.php" class="block">
                    <img
                      class="h-6 block dark:hidden"
                      src="assets/images/logo-dark.png"
                    />
                    <img
                      class="h-6 hidden dark:block"
                      src="assets/images/logo-light.png"
                    />
                  </a>
                  <h4
                    class="text-slate-900 dark:text-slate-200/50 font-semibold"
                  >
                    Hi ! Adam
                  </h4>
                </div>

                <img
                  src="assets/images/users/avatar-1.jpg"
                  alt="user-image"
                  class="h-16 w-16 rounded-full shadow"
                />
              </div>

              <div class="mb-4">
                <label
                  class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2"
                  for="loggingPassword"
                  >Password</label
                >
                <input
                  id="loggingPassword"
                  class="form-input"
                  type="password"
                  placeholder="Enter your password"
                />
              </div>

              <div class="flex justify-center mb-6">
                <button class="btn w-full text-white bg-primary">Log In</button>
              </div>

              <div class="flex items-center my-6">
                <div
                  class="flex-auto mt-px border-t border-dashed border-gray-200 dark:border-slate-700"
                ></div>
                <div class="mx-4 text-secondary">Or</div>
                <div
                  class="flex-auto mt-px border-t border-dashed border-gray-200 dark:border-slate-700"
                ></div>
              </div>

              <p class="text-gray-500 dark:text-gray-400 text-center">
                Not you ? return<a
                  href="auth-login.php"
                  class="text-primary ms-1"
                  ><b>Log In</b></a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
  </body>

  <!-- Mirrored from coderthemes.com/konrix/layouts/auth-lock-screen.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:44:30 GMT -->
</html>
