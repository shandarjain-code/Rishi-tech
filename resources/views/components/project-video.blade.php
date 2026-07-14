@props(['project'])

@php
    $url = $project->video_url;
@endphp

@if ($url)
    @php
        $ext = strtolower(pathinfo((string) $project->video_path, PATHINFO_EXTENSION));
        $mime = match ($ext) {
            'webm' => 'video/webm',
            'ogg', 'ogv' => 'video/ogg',
            'mov', 'qt' => 'video/quicktime',
            'm4v' => 'video/x-m4v',
            'avi' => 'video/x-msvideo',
            'wmv' => 'video/x-ms-wmv',
            'mkv' => 'video/x-matroska',
            'flv' => 'video/x-flv',
            '3gp' => 'video/3gpp',
            '3g2' => 'video/3gpp2',
            'mpeg', 'mpg', 'mpe', 'm2v' => 'video/mpeg',
            'ts', 'mts', 'm2ts' => 'video/mp2t',
            default => 'video/mp4',
        };
    @endphp

    <div {{ $attributes->merge(['class' => 'project-video-frame']) }}>
        <video
            class="js-plyr-video w-full"
            playsinline
            controls
            preload="metadata"
            @if($project->cover_image_url) poster="{{ $project->cover_image_url }}" @endif
        >
            <source src="{{ $url }}" type="{{ $mime }}">
            {{ __('Your browser does not support embedded video.') }}
        </video>
        <div class="project-video-frame__fallback">
            <span>Video not playing?</span>
            <a href="{{ $url }}" target="_blank" rel="noopener noreferrer">Open video</a>
        </div>
    </div>
@endif
