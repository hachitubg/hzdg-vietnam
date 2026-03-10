@push('styles')
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/plugins/3d-flipbook-dflip-lite/assets/css/dflip.min.css') }}">
<style>
.pdf-flipbook-section {
    background: #eeeeee;
    padding: 40px 0 50px;
    text-align: center;
}
.flipbook-outer {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
}
.flipbook-viewer {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    min-height: 500px;
    position: relative;
}
.flip-nav-btn {
    background: rgba(0,0,0,0.35);
    border: none;
    color: white;
    font-size: 22px;
    cursor: pointer;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.3s;
    flex-shrink: 0;
    z-index: 10;
    line-height: 1;
}
.flip-nav-btn:hover {
    background: rgba(0,0,0,0.65);
}
.flipbook-controls-bar {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 6px;
    margin-top: 15px;
    flex-wrap: wrap;
}
.page-counter {
    color: #fff;
    font-size: 14px;
    padding: 5px 14px;
    background: rgba(0,0,0,0.35);
    border-radius: 4px;
    min-width: 60px;
}
.ctrl-btn {
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.18);
    color: white;
    border-radius: 4px;
    padding: 5px 10px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.2s;
    line-height: 1;
}
.ctrl-btn:hover {
    background: rgba(255,255,255,0.3);
}
.download-profile-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-top: 28px;
    padding: 14px 36px;
    background: linear-gradient(135deg, #0066FF, #0044A9);
    color: white !important;
    text-decoration: none !important;
    border-radius: 6px;
    font-size: 16px;
    font-weight: 600;
    transition: transform 0.2s, box-shadow 0.2s;
    border: none;
    cursor: pointer;
}
.download-profile-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 20px rgba(0,102,255,0.5);
    color: white !important;
}
.download-profile-btn svg {
    width: 20px;
    height: 20px;
}
.flipbook-loading {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 500px;
    color: white;
    gap: 15px;
}
.flipbook-loading .spinner {
    width: 44px;
    height: 44px;
    border: 4px solid rgba(255,255,255,0.2);
    border-top-color: #0066FF;
    border-radius: 50%;
    animation: flipSpin 0.8s linear infinite;
}
@keyframes flipSpin {
    to { transform: rotate(360deg); }
}
.flipbook-loading .progress-text {
    font-size: 14px;
    opacity: 0.85;
}
.pdf-page {
    background: white;
    overflow: hidden;
}
.pdf-page img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
}
#flipbook {
    display: none;
}
@media (max-width: 768px) {
    .pdf-flipbook-section {
        padding: 25px 0 35px;
    }
    .flipbook-viewer {
        min-height: 350px;
        gap: 5px;
    }
    .flip-nav-btn {
        width: 36px;
        height: 36px;
        font-size: 18px;
    }
    .download-profile-btn {
        padding: 12px 24px;
        font-size: 14px;
    }
}
</style>
@endpush

<section id="ho-so-nang-luc" class="pdf-flipbook-section">
    <div class="flipbook-outer">
        <div class="flipbook-viewer">
            <button class="flip-nav-btn" id="flipPrev" title="Trang trước">&#10094;</button>

            <div style="flex:1;max-width:1100px;">
                <!-- Loading indicator -->
                <div class="flipbook-loading" id="flipbookLoading">
                    <div class="spinner"></div>
                    <div class="progress-text" id="flipbookProgress">Đang tải hồ sơ năng lực...</div>
                </div>
                <!-- Flipbook container -->
                <div id="flipbook"></div>
            </div>

            <button class="flip-nav-btn" id="flipNext" title="Trang sau">&#10095;</button>
        </div>

        <div class="flipbook-controls-bar">
            <span class="page-counter" id="pageCounter">1 / 1</span>
            <button class="ctrl-btn" id="btnFullscreen" title="Toàn màn hình">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </button>
        </div>

        <a href="{{ asset('wp-content/uploads/pdf_file/HO_SO_NANG_LUC-VD-GROUP2024.pdf') }}"
           class="download-profile-btn" download>
            Tải xuống hồ sơ năng lực
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/>
            </svg>
        </a>
    </div>
</section>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/page-flip@2.0.7/dist/js/page-flip.browser.js"></script>
<script>
(function() {
    var pdfUrl = @json(asset('wp-content/uploads/pdf_file/HO_SO_NANG_LUC-VD-GROUP2024.pdf'));
    var container = document.getElementById('flipbook');
    var loadingEl = document.getElementById('flipbookLoading');
    var progressEl = document.getElementById('flipbookProgress');
    var pageCounterEl = document.getElementById('pageCounter');
    var pageFlipInstance = null;
    var totalPages = 0;

    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

    function updatePageCounter() {
        if (!pageFlipInstance) return;
        var current = pageFlipInstance.getCurrentPageIndex() + 1;
        pageCounterEl.textContent = current + ' / ' + totalPages;
    }

    async function renderAllPages(pdf) {
        totalPages = pdf.numPages;
        var pageWidth = 0, pageHeight = 0;
        var fragment = document.createDocumentFragment();

        for (var i = 1; i <= totalPages; i++) {
            progressEl.textContent = 'Đang tải trang ' + i + '/' + totalPages + '...';

            var page = await pdf.getPage(i);
            var viewport = page.getViewport({ scale: 1.2 });

            if (i === 1) {
                pageWidth = Math.round(viewport.width);
                pageHeight = Math.round(viewport.height);
            }

            var canvas = document.createElement('canvas');
            canvas.width = viewport.width;
            canvas.height = viewport.height;
            var ctx = canvas.getContext('2d');
            await page.render({ canvasContext: ctx, viewport: viewport }).promise;

            // Convert canvas to blob URL for better memory efficiency
            var blob = await new Promise(function(resolve) {
                canvas.toBlob(resolve, 'image/jpeg', 0.85);
            });
            var imgUrl = URL.createObjectURL(blob);

            var img = document.createElement('img');
            img.src = imgUrl;

            var pageDiv = document.createElement('div');
            pageDiv.className = 'pdf-page';
            pageDiv.appendChild(img);
            fragment.appendChild(pageDiv);

            // Free canvas memory
            canvas.width = 0;
            canvas.height = 0;

            // Yield to browser every 5 pages for UI responsiveness
            if (i % 5 === 0) {
                await new Promise(function(r) { setTimeout(r, 0); });
            }
        }

        container.appendChild(fragment);
        return { pageWidth: pageWidth, pageHeight: pageHeight };
    }

    async function initFlipbook() {
        try {
            var pdf = await pdfjsLib.getDocument(pdfUrl).promise;
            var dims = await renderAllPages(pdf);

            // Hide loading, show flipbook
            loadingEl.style.display = 'none';
            container.style.display = '';

            // Initialize page-flip
            pageFlipInstance = new St.PageFlip(container, {
                width: dims.pageWidth,
                height: dims.pageHeight,
                size: 'stretch',
                maxWidth: dims.pageWidth,
                maxHeight: dims.pageHeight,
                minWidth: 250,
                minHeight: 350,
                showCover: true,
                flippingTime: 800,
                usePortrait: true,
                autoSize: true,
                drawShadow: true,
                mobileScrollSupport: true,
                useMouseEvents: true,
                swipeDistance: 30
            });

            pageFlipInstance.loadFromHTML(container.querySelectorAll('.pdf-page'));
            updatePageCounter();
            pageFlipInstance.on('flip', updatePageCounter);

        } catch (err) {
            console.error('Flipbook error:', err);
            loadingEl.innerHTML = '<p style="color:#ff6b6b;font-size:15px;">Không thể tải tài liệu. Vui lòng thử lại sau.</p>';
        }
    }

    // Navigation
    document.getElementById('flipPrev').addEventListener('click', function() {
        if (pageFlipInstance) pageFlipInstance.flipPrev();
    });
    document.getElementById('flipNext').addEventListener('click', function() {
        if (pageFlipInstance) pageFlipInstance.flipNext();
    });

    // Fullscreen
    document.getElementById('btnFullscreen').addEventListener('click', function() {
        var section = document.querySelector('.pdf-flipbook-section');
        if (!document.fullscreenElement) {
            section.requestFullscreen().catch(function() {});
        } else {
            document.exitFullscreen();
        }
    });

    // Start loading
    initFlipbook();
})();
</script>
@endpush
