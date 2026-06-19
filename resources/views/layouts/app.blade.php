<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <script>
        (function() {
            if (sessionStorage.getItem('pharma_pro_loaded')) {
                document.documentElement.classList.add('preload-done');
            }
        })();
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/pos.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
    <!-- LOADING SCREEN -->
    <div id="loadingScreen" class="loading-screen">
        <div class="loading-container">
            <div class="loading-icon-wrapper">
                <svg class="loading-icon" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                <div class="loading-ring"></div>
            </div>
            <h1 class="loading-title">Loading Pharma Pro</h1>
            <div class="loading-progress">
                <div class="loading-progress-bar"></div>
            </div>
        </div>
    </div>

    <div class="app">
        <!-- SIDEBAR -->
        <x-sidebar />

        <!-- MAIN -->
        <div class="main page-content">
            <!-- Topbar -->

            <x-topbar :title="trim($__env->yieldContent('title'))" />

            <!-- Content -->
            @yield('content')

            <!-- Footer -->
            <x-footer />

        </div>
    </div>

    <div class="toast" id="toast">
        <div class="toast-dot"></div>
        <span id="toastMsg">Done</span>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/pos.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loader = document.getElementById('loadingScreen');
            const hasLoaded = sessionStorage.getItem('pharma_pro_loaded');
            
            if (hasLoaded) {
                if (loader) {
                    loader.style.display = 'none';
                }
            } else {
                // First-time visit: animate progress and fade out
                setTimeout(function() {
                    if (loader) {
                        loader.classList.add('fade-out');
                        sessionStorage.setItem('pharma_pro_loaded', 'true');
                        setTimeout(function() {
                            loader.style.display = 'none';
                        }, 500); // Allow fade-out transition to complete
                    }
                }, 3000); // 3-second display limit
            }
        });
    </script>
</body>

</html>
