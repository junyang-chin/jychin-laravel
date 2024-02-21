<x-head title="Home">
    <section class="min-h-screen w-full text-light flex flex-col py-8 justify-start sm:justify-center gap-6 relative">
        <div class="absolute w-full h-screen -z-10 top-0 left-0 bg-black opacity-30"></div>
        <div>
            <video autoplay loop muted class="absolute h-screen w-full object-cover -z-20 top-0 left-0 min-h-screen">
                <source src="{{ Vite::asset('resources/images/hero-video.mp4') }}" type="video/mp4" />
            </video>
        </div>
        <h1
            class="w-11/12 mx-auto text-[40px] leading-[60px] sm:text-[70px] sm:leading-[90px] font-expanded text-start font-bold">
            PERFECTING THE CRAFT<span class="font-medium block">THROUGH CODE</span>
        </h1>
        <div class="w-11/12 mx-auto flex flex-col items-start">
            <p class="sm:w-1/2">
                Hello, I am <span class="font-bold">Jun Yang 俊扬</span>, some call me Jun and that's fine. I'm web
                developer based in Kuala Lumpur 🧑‍💻.
                I started out my career as a Mechanical Engineer then discovered the passion for automating the boring
                tasks which led me down the road of software development. I'm dedicating this space as a documentation
                of my learning journey.
            </p>
            <a href="#nav" class="underline mt-4">more..</a>
        </div>
    </section>
    <x-navigation activePage="home"></x-navigation>

    <section class="section-container">
        <h1 class="section-title">Personal Work</h1>
        <div class="card-container">
            <x-card title="php-from-scratch"
                description="My attempt to build a
web framework using Object Oriented Programming in
PHP"
                url="https://github.com/junyang-chin/php-from-scratch"></x-card>
            <x-card title="jychin-laravel" description="My dynamic website built with laravel"
                url="https://github.com/junyang-chin/jychin-laravel"></x-card>
        </div>

    </section>
    <section class="section-container">
        <h1 class="section-title">What I'm Onto</h1>
        <div class="card-container">
            <x-card title="PHP to Go" description="Learning Go as a PHP developer"
                url="https://themsaid.com/courses/php-to-go"></x-card>
            <x-card title="Writing Readable PHP" description="Imitating how Spatie writes PHP"
                url="https://spatie.be/courses/writing-readable-php"></x-card>
            <x-card title="Design Patterns" description="Doing OOP correctly with Refactoring Guru"
                url="https://refactoring.guru/design-patterns"></x-card>
        </div>
    </section>
    <section class="section-container">
        <h1 class="section-title">Achievements</h1>
        <div class="card-container">
            <x-card title="Hays </Hack> Coding Contest 2023" description="Winner of the PHP category"
                url="https://www.linkedin.com/posts/junyangchin_hays-hack-coding-competition-winner-activity-7128593960851144704-oYhO?utm_source=share&utm_medium=member_desktop"></x-card>
        </div>
    </section>
    <section class="section-container">
        <h1 class="section-title">Get In Touch</h1>
        <div class="flex flex-wrap">
            <p class="py-1">
                <span class="text-primary px-2 py-1 rounded inline select-all">
                    &#106;u&#110;ya&#110;g&#46;&#99;hin&#64;ou&#116;loo&#107;&#46;com
                </span>
            </p>
        </div>
    </section>
    </main>

    <p class="text-sm mb-2 text-center">Dynamically rendered with <a href="https://laravel.com/" target="_blank"
            class="hover:underline">Laravel</a>. Visitors: {{ $visits ?? 0 }}</p>

</x-head>
