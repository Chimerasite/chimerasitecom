<x-app-layout>
    <div class="bg-gray-400 md:py-8 py-2">
        <div class="flex justify-center items-center">
            <img src="{{asset('assets/img/chimerasite_logo.png')}}" class="md:size-28 size-20">
        </div>
        <div class="flex justify-center xl:px-56 lg:px-24 md:px-16 sm:px-8 px-4">
            <img src="{{asset('assets/img/welcome.png')}}">
        </div>
    </div>
    <div class="md:px-6 px-4 py-12 mb-8">
        <div class="m-auto mb-10 text-center lg:w-1/3 md:2/3">
            <h1>Chimerasite</h1>
            <div class="space-y-1 mt-2">
                <p>
                    Hey I'm Chimera and welcome to chimerasite.com, my personal playground!
                </p>
                <p>
                    Here you'll find a collection of the things I'm working on (or just dreaming up). From fun web experiments to creative side projects, this is where I bring
                    my ideas to life and share them with the world.
                </p>
                <p>
                    No matter if you are here to explore, get inspired or simply have fun, I hope you enjoy the adventure as much as I enjoy creating it!
                </p>
            </div>
            <hr class="border-1 border-gray-900 rounded-md m-auto mt-6">
        </div>
        <div class="flex justify-center lg:gap-8 md:gap-4 gap-2">
            <x-content.icon link="#imagine">
                <x-slot:path>
                    <path d="M12 .75a8.25 8.25 0 0 0-4.135 15.39c.686.398 1.115 1.008 1.134 1.623a.75.75 0 0 0 .577.706c.352.083.71.148 1.074.195.323.041.6-.218.6-.544v-4.661a6.714 6.714 0 0 1-.937-.171.75.75 0 1 1 .374-1.453 5.261 5.261 0 0 0 2.626 0 .75.75 0 1 1 .374 1.452 6.712 6.712 0 0 1-.937.172v4.66c0 .327.277.586.6.545.364-.047.722-.112 1.074-.195a.75.75 0 0 0 .577-.706c.02-.615.448-1.225 1.134-1.623A8.25 8.25 0 0 0 12 .75Z" />
                    <path fill-rule="evenodd" d="M9.013 19.9a.75.75 0 0 1 .877-.597 11.319 11.319 0 0 0 4.22 0 .75.75 0 1 1 .28 1.473 12.819 12.819 0 0 1-4.78 0 .75.75 0 0 1-.597-.876ZM9.754 22.344a.75.75 0 0 1 .824-.668 13.682 13.682 0 0 0 2.844 0 .75.75 0 1 1 .156 1.492 15.156 15.156 0 0 1-3.156 0 .75.75 0 0 1-.668-.824Z" clip-rule="evenodd" />
                </x-slot>
                <x-slot:title>
                    Imagine
                </x-slot>
            </x-content.icon>
            <x-content.icon link="#create">
                <x-slot:path>
                    <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />
                    <path d="m10.076 8.64-2.201-2.2V4.874a.75.75 0 0 0-.364-.643l-3.75-2.25a.75.75 0 0 0-.916.113l-.75.75a.75.75 0 0 0-.113.916l2.25 3.75a.75.75 0 0 0 .643.364h1.564l2.062 2.062 1.575-1.297Z" />
                    <path fill-rule="evenodd" d="m12.556 17.329 4.183 4.182a3.375 3.375 0 0 0 4.773-4.773l-3.306-3.305a6.803 6.803 0 0 1-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 0 0-.167.063l-3.086 3.748Zm3.414-1.36a.75.75 0 0 1 1.06 0l1.875 1.876a.75.75 0 1 1-1.06 1.06L15.97 17.03a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </x-slot>
                <x-slot:title>
                    Create
                </x-slot>
            </x-content.icon>
            <x-content.icon link="#experience">
                <x-slot:path>
                    <path fill-rule="evenodd" d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 0 1 .75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 0 1 9.75 22.5a.75.75 0 0 1-.75-.75v-4.131A15.838 15.838 0 0 1 6.382 15H2.25a.75.75 0 0 1-.75-.75 6.75 6.75 0 0 1 7.815-6.666ZM15 6.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" clip-rule="evenodd" />
                    <path d="M5.26 17.242a.75.75 0 1 0-.897-1.203 5.243 5.243 0 0 0-2.05 5.022.75.75 0 0 0 .625.627 5.243 5.243 0 0 0 5.022-2.051.75.75 0 1 0-1.202-.897 3.744 3.744 0 0 1-3.008 1.51c0-1.23.592-2.323 1.51-3.008Z" />
                </x-slot>
                <x-slot:title>
                    Experience
                </x-slot>
            </x-content.icon>
        </div>
    </div>
    <x-content.bg id="imagine">
        <x-slot:title>
            Imagine
        </x-slot>
        <x-slot:subtitle>
            Where every idea begins
        </x-slot>
        <p>
            Everything starts with an idea, and I like to believe that imagination has no limits.
        </p>
        <p>
            For me a fun question I like to ask is: 'What if?' What if is a simple idea that can turn into some wild, weird or extraordinary. Its a playful thought or a challenge
            that could just inspire you to create something new and figure out how you could do it. The only limit to the question 'What if?' is how far you are willing to explore.
        </p>
        <p>
            Every project on Chimerasite.com begins with a spark of curiosity. No matter if its a quick experiment, a big
            full scale project or something completely random and unexpected, each creation is fueled by a desire to explore the unknown and bring ideas to life.
        </p>
        <p>
            It is when you ask yourself 'What if?', that the possibilities become endless. And thats where the real fun begins!
        </p>
    </x-content.bg>
    <x-content.no-bg id="create">
        <x-slot:title>
            Create
        </x-slot>
        <x-slot:subtitle>
            Bringin ideas to life
        </x-slot>
        <p>
            Once there is an idea and even just the tiniest hint that it might be possible, its time to bring it to life.
        </p>
        <p>
            As a web developer, I love the challenge of turning wild ideas into reality. Combining my knowledge or technology and code with a bit of creativity and outside-of-the-box thinking
            to create a fun, unique and sometimes a little unexpected experience.
        </p>
        <p>
            Every project you'll find on Chimerasite.com is built grom the ground up, using my love for puzzles, problem-solving and joy in creating something from nothing.
            Things take shape by experimenting, but also breaking things and embracing the chaos that comes with bringing ideas to life. Whether it's a fun side project,
            fan space or strange little experiment, each creation is a reflection of my love for puzzles and challenges.
        </p>
        <p>
            It's not just about writing code, it's about using my knowledge and skills to tell stories and create experiences that bring fun or inspiration. And to be honest?
            It's a lot more fun when things get challenging and a little weird.
        </p>
    </x-content.bg>
    <x-content.bg id="experience">
        <x-slot:title>
            Experience
        </x-slot>
        <x-slot:subtitle>
            Time to explore
        </x-slot>
        <p>
            What's the point of creating if you can't share the fun?
        </p>
        <p>
            The projects on Chimerasite.com aren't mean to just sit around. They're made to be explored, played with, experienced, used and maybe even spark a little inspiration
            along the way. No matter the type of project, each one of them invites you to dive in and see where curiosity takes you.
        </p>
        <p>
            To make the fun even easier, any account you create on Chimerasite.com work seamlessly across all of my projects. Sign up once, and you are free to explore everything
            I've built to its full potential.
        </p>
        <p>
            Now its your turn to plunge in. Whether you're here to fall down into this rabbit hole or just to poke around and uncover something strange an wonderful, there is always
            something new waiting for you.
        </p>
    </x-content.bg>
    <div class="md:px-6 px-4 py-20 text-center lg:w-2/3 m-auto space-y-6">
        <div class="text-lg">
            <q>Every adventure requires a first step</q><br>
            <i>- The Cheshire Cat</i>
        </div>
        <div class="space-y-2">
            <p>
                Chimerasite.com is always evolving, just like my imagination. New ideas, experiments and projects are constantly taking shape, and there's always something fresh on the
                horizon.
            </p>
            <p>
                No matter if you are here for a quick visit or planning to stick around, there is no telling what you might find next.
            </p>
        </div>
    </div>
</x-app-layout>
