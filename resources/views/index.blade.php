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
    <title>Jun's Developer Portfolio</title>
    <meta name="description" content="A documentation of my web development experiences">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://jychin.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Jun's Developer Portfolio">
    <meta property="og:description" content="A documentation of my web development experiences">
    <meta property="og:image" content={{ Vite::asset('resources/images/og-image.png') }}>

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="jychin.com">
    <meta property="twitter:url" content="https://jychin.com/">
    <meta name="twitter:title" content="Jun's Developer Portfolio">
    <meta name="twitter:description" content="A documentation of my web development experiences">
    <meta name="twitter:image" content={{ Vite::asset('resources/images/og-image.png') }}>

    <!-- Meta Tags Generated via https://www.opengraph.xyz -->
</head>

<body>

    <main>
        <section class="section-container">
            <h1 class="font-bold font-condensed leading-10 text-3xl text-dark mt-4 inline-block select-none">
                Jun Yang <span class="text-primary">Chin</span>
            </h1>
            <h2 class="font-extrabold font-expanded leading-4 text-dark md:text-3xl text-xl mt-8">Half-Stack Developer
            </h2>
            <p class="hero-text">
                Hello, I'm Jun Yang 俊扬, some call me Jun and that's fine. I'm web
                developer based in Kuala Lumpur 🧑‍💻.
            </p>
            <p class="hero-text">
                I primarily build server-side applications with a little bit of devops on the side. Other than coding in
                PHP at my job, I'm also exploring the world of serverless technology and Go.
            </p>

            <img src={{ Vite::asset('resources/images/cat-work-laptop.gif') }} alt="cat-work-laptop gif" width="150px"
                class="mt-4 m-auto">
            <p class="text-center m-auto text-sm">*I use Linux Mint btw</p>
            <p class="hero-text">
                Jun Yang is currently building(and breaking) things at
                <a href="https://invokeisdata.com" target="_blank" class="underline hover-link">@invokeisdata</a>. He is
                one of the core backend developer of INVOKE's first SaaS - <a href="https://adnexio.jobs"
                    target="_blank" class="underline hover-link">adnexio</a>.
            </p>
            <ul class="flex flex-row justify-start mt-4">
                <li>
                    <a href="https://www.linkedin.com/in/junyangchin/" target="_blank"
                        class="font-medium font-expanded 
                        hover-link"">
                        LinkedIn
                    </a>
                </li>
                <div>&nbsp;/&nbsp;</div>
                <li>
                    <a href="https://github.com/junyang-chin" target="_blank"
                        class="font-medium font-expanded hover-link">
                        GitHub
                    </a>
                </li>
                <div>&nbsp;/&nbsp;</div>
                <li>
                    <a href="mailto:junyang.chin@outlook.com" target="_blank"
                        class="font-medium font-expanded hover-link">
                        Email
                    </a>
                </li>
            </ul>
        </section>

        <section class="section-container">
            <h1 class="section-title">Selected Work</h1>
            <div class=" hover:text-primary py-2 border-b-[1px] border-light-dark ">
                <a href="https://adnexio.jobs" target="_blank" class="group flex justify-between items-center">
                    <div class="group-hover:underline">
                        <h3 class="text-lg">adnexioJOBS</h3>
                        <p class="text-sm">Job matching with AI</p>
                    </div>
                    <span class="inline after:content-['_↗']"></span>
                </a>
            </div>
            <div class=" hover:text-primary py-2 border-b-[1px] border-light-dark ">
                <a href="https://edu.adnexio.jobs" target="_blank" class="group flex justify-between items-center">
                    <div class="group-hover:underline">
                        <h3 class="text-lg">adnexioEDU</h3>
                        <p class="text-sm">Tech education in a click</p>
                    </div>
                    <span class="inline after:content-['_↗']"></span>
                </a>
            </div>
            <div class=" hover:text-primary py-2 border-b-[1px] border-light-dark">
                <a href="https://hr.adnexio.jobs" target="_blank" class="group flex justify-between items-center">
                    <div class="group-hover:underline">
                        <h3 class="text-lg">adnexioHR</h3>
                        <p class="text-sm">All your HR needs in one portal</p>
                    </div>
                    <span class="inline after:content-['_↗']"></span>
                </a>
            </div>
        </section>
        <section class="section-container">
            <h1 class="section-title">Get In Touch</h1>
            <div class="flex flex-wrap">
                <p class="py-1">
                    👉<span class="text-primary hover:bg-slate-200 px-2 py-1 rounded inline select-all">
                        junyang.chin@outlook.com
                    </span>
                    👈
                </p>
            </div>
        </section>
    </main>

</body>

</html>
