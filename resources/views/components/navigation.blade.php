<nav id="nav" class="sticky top-0 left-0 flex justify-center gap-8 items-end h-16 font-bold font-expanded text-xl bg-inherit pb-2">
    @foreach ($links as $title => $slug)
        <a href="/{{$slug}}" class="hover:pb-2 underline duration-300">{{ $title }}</a>
    @endforeach
</nav>
