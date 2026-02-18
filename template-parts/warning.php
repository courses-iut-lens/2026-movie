<!-- Desktop warning overlay -->
<div x-data="{ show: window.innerWidth >= 768, visible: false }"
     x-init="window.addEventListener('resize', () => show = window.innerWidth >= 768); setTimeout(() => visible = true, 100)"
     x-show="show"
     x-cloak
     class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 backdrop-blur-xl p-8">
    <div class="text-center text-white max-w-md transition-all duration-700 ease-out"
         :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
        <svg class="w-16 h-16 mx-auto mb-6 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
        </svg>
        <h2 class="text-2xl font-bold mb-4">Site mobile uniquement</h2>
        <p class="text-gray-300">Ce site est optimisé pour une expérience mobile. Veuillez y accéder depuis votre smartphone.</p>
    </div>
</div>