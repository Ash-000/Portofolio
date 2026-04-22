<!-- Loading Screen Component -->
<div id="loading-screen" class="fixed inset-0 bg-gray-950 z-50 flex items-center justify-center transition-opacity duration-500">
    <div class="text-center">
        <div class="relative w-24 h-24 mx-auto mb-6">
            <div class="absolute inset-0 border-4 border-blue-500/30 rounded-full"></div>
            <div class="absolute inset-0 border-4 border-transparent border-t-blue-500 rounded-full animate-spin"></div>
        </div>
        <h2 class="text-2xl font-bold bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent">
            Loading Portfolio...
        </h2>
    </div>
</div>

<script>
    window.addEventListener('load', function() {
        const loadingScreen = document.getElementById('loading-screen');
        setTimeout(() => {
            loadingScreen.style.opacity = '0';
            setTimeout(() => {
                loadingScreen.style.display = 'none';
            }, 500);
        }, 1000);
    });
</script>
