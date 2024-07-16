@extends('layout.app')

<header>
    <section class="logo">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
    </section>
    <section class="navbar">
    <nav>
        <ul>
            <li>
                @foreach ($navbar as $element)
                    <p>
                        {{$element['name']}}
                    </p>
                @endforeach
            </li>
        </ul>
    </nav>
    </section>
</header>
