<footer style="margin-top:48px;background:#111;color:#fff;">
    <div style="max-width:1200px;margin:0 auto;padding:32px 16px;display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:24px;">
        <div>
            <h4 style="margin-bottom:8px;">VD GROUP</h4>
            <p style="opacity:.85;">Giải pháp âm thanh - ánh sáng chuyên nghiệp.</p>
        </div>
        <div>
            <h4 style="margin-bottom:8px;">Tin tức mới</h4>
            <ul style="list-style:none;padding:0;margin:0;display:grid;gap:6px;">
                @foreach (($globalLatestPosts ?? collect())->take(3) as $footerPost)
                    <li><a style="color:#fff;opacity:.9;" href="{{ route('posts.show', $footerPost->slug) }}">{{ $footerPost->title }}</a></li>
                @endforeach
            </ul>
        </div>
        <div>
            <h4 style="margin-bottom:8px;">Dự án mới</h4>
            <ul style="list-style:none;padding:0;margin:0;display:grid;gap:6px;">
                @foreach (($globalLatestProjects ?? collect())->take(3) as $footerProject)
                    <li><a style="color:#fff;opacity:.9;" href="{{ route('projects.show', $footerProject->slug) }}">{{ $footerProject->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>
