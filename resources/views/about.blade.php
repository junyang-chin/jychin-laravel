<x-head title="About">
    <x-navigation></x-navigation>
    <section class="section-container">
        <div class="m-auto bg-slate-200 rounded-full w-52 h-52 relative overflow-hidden">
            <img src="{{ Vite::asset('resources/images/profile.png') }}" alt="profile picure" width="300" class="scale-[1.5] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        </div>
        <p class="hero-text">
            I enjoy building server-side applications with a little bit of DevOps on the side. While my primary
            programming language at work is Object Oriented PHP, I actively explore different paradigms just to
            keep
            my
            biases checked. This leads me to learning Go, a vastly different language but complements PHP very
            well.
            I'm also a fan of Linux and currently using Mint as my daily driver.</p>

        </figure>
        <p class="hero-text">
            Jun Yang is currently building(and breaking) things at
            <a href="https://invokeisdata.com" target="_blank" class="underline hover-link">@invokeisdata</a>. He
            is
            one of the core backend developer of INVOKE's first SaaS - <a href="https://adnexio.jobs" target="_blank"
                class="underline hover-link">adnexio</a>.
        </p>
    </section>
</x-head>
