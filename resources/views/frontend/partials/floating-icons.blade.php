<style>
.floating-icons {
    position: fixed;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 10px;
    z-index: 9999;
}
.floating-icons a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 10px;
    color: #fff !important;
    text-decoration: none !important;
    transition: transform 0.2s, box-shadow 0.2s;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
}
.floating-icons a:hover {
    transform: scale(1.12);
    box-shadow: 0 4px 16px rgba(0,0,0,0.3);
    color: #fff !important;
}
.floating-icons a svg {
    width: 26px;
    height: 26px;
    fill: currentColor;
}
.floating-icons .fi-phone {
    background: #0066FF;
}
.floating-icons .fi-zalo {
    background: #0068FF;
}
.floating-icons .fi-facebook {
    background: #1877F2;
}
@media (max-width: 768px) {
    .floating-icons {
        right: 10px;
        gap: 8px;
    }
    .floating-icons a {
        width: 44px;
        height: 44px;
    }
    .floating-icons a svg {
        width: 22px;
        height: 22px;
    }
}
</style>

<div class="floating-icons">
    <a href="tel:0946780404" class="fi-phone" title="Gọi điện: 0946780404" aria-label="Gọi điện">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1.003 1.003 0 011.01-.24c1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.07 21 3 13.93 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.1.31.03.66-.25 1.01l-2.2 2.21z"/></svg>
    </a>
    <a href="https://zalo.me/0946780404" class="fi-zalo" title="Chat Zalo" aria-label="Chat Zalo" target="_blank" rel="noopener noreferrer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm-5.54 27.7H13.2V22h2.4v7.4h2.86v2.3zm5.54.2c-1.1 0-2-.9-2-2v-5.8c0-1.1.9-2 2-2s2 .9 2 2v5.8c0 1.1-.9 2-2 2zm8.8-.2h-2.4l-3.2-6v6h-2.4V22h2.4l3.2 6v-6h2.4v9.7zm-8.8-6.6c-.33 0-.6.27-.6.6v3.8c0 .33.27.6.6.6s.6-.27.6-.6v-3.8c0-.33-.27-.6-.6-.6zM15.2 16h9.56v1.8l-5.8 5.9h5.96v2.3H15.2v-1.8l5.8-5.9H15.2V16z" fill="#fff"/></svg>
    </a>
    <a href="https://www.facebook.com/hzdgvietnam" class="fi-facebook" title="Facebook" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.99 3.66 9.12 8.44 9.88v-6.99H7.9v-2.89h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99C18.34 21.12 22 16.99 22 12z"/></svg>
    </a>
</div>
