<x-head title="About">
    <x-navigation activePage="about"></x-navigation>
    <section class="section-container">
        <img src="{{ Vite::asset('resources/images/profile.png') }}" alt="profile picure" width="300"
            class="mx-auto mt-4">

        <ul class="flex items-end justify-center gap-4 mt-4">
            <li class=""><a href="https://www.linkedin.com/in/junyangchin/" target="_blank"
                    class="underline hover:pb-2">LinkedIn</a></li>
            <li class=""><a href="https://github.com/junyang-chin" target="_blank" class="underline">Github</a>
            </li>
            <li class=""><a href="mailto:junyang.chin@outlook.com" target="_blank" class="underline">Email</a>
            </li>
            <li class=""><a href="{{ Vite::asset('resources/docs/cv-chin_jun_yang.pdf') }}" target="_blank"
                    class="underline">Resume</a></li>
        </ul>

        <p class="hero-text h-[200px] mt-12">
            I enjoy building server-side applications with a little bit of DevOps on the side. While my primary
            programming language at work is Object Oriented PHP, I actively explore different paradigms just to
            keep my biases checked. This leads me to learning Go, which I think complements PHP very
            well givens it's developer experience and compilation speed.
            I'm also a fan of Linux and currently using Mint as my daily driver.</p>
        </figure>
    </section>
</x-head>
