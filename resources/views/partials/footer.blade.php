<footer>
    <section class="button">
        <button>
            sign-up now!
        </button>
    </section>
    <section class="navbar">
        <h2>
            follow us
        </h2>
        <div>
            @foreach ($socialNav as $social)
            <article>
                <p>
                    {{$social['name']}}
                </p>
                <p>
                    {{$social['image']}}
                </p>
            </article>
        @endforeach
        </div>
    </section>
</footer>
