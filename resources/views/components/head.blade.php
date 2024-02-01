<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/svg+xml" href="/favicon.ico">
    @vite('resources/css/app.css')

    {{-- fonts --}}
    <link rel="preload" href={{ Vite::asset('resources/fonts/Mona_Sans/Mona-Sans.woff2') }} as="font"
        type="font/woff2" crossorigin>

    <!-- HTML Meta Tags -->
    <title>JYCHIN | {{ $title }}</title>
    <meta name="description" content="A documentation of my web development experiences">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://jychin.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="JYCHIN | {{ $title }}">
    <meta property="og:description" content="A documentation of my web development experiences">
    <meta property="og:image" content={{ Vite::asset('resources/images/og-image.png') }}>

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@junyang96">
    <meta name="twitter:title" content="JYCHIN | {{ $title }}">
    <meta name="twitter:description" content="A documentation of my web development experiences">
    <meta name="twitter:image" content={{ Vite::asset('resources/images/og-image.png') }}>

    <!-- Meta Tags Generated via https://www.opengraph.xyz -->

</head>

<body>
    {{ $slot }}
</body>
