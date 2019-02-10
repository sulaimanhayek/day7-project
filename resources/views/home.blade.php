@extends("layouts.master")
@section("content")
    <body>
    <div class="show"><p class="line-1 anim-typewriter">Hello, Welcome to My first Laravel project</p>
    </div>
    </body>
    <style>
        body {

            width: auto;
            height: auto;
            background: skyblue;
            animation: slide 20s infinite;

        }

        @keyframes slide {
            25% {
                background: darkslategrey;

            }
            50% {
                background: lightpink;

            }
        }
        HTML  CSS Result
        EDIT ON
        /* Google Fonts */
        @import url(https://fonts.googleapis.com/css?family=Anonymous+Pro);

        /* Global */
        html{
            min-height: 100%;
            overflow: hidden;
        }
        body{
            height: calc(100vh - 8em);
            padding: 4em;
            color: rgba(255,255,255,.75);
            font-family: 'Anonymous Pro', monospace;
            background-color: rgb(25,25,25);

        }
        .line-1{
            position: relative;
            top: 300px;
            width: 24em;
            margin: 0 auto;
            border-right: 2px solid rgba(255,255,255,.75);
            font-size: 180%;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            transform: translateY(-50%);
        }
        /* Animation */
        .anim-typewriter{
            animation: typewriter 4s steps(44) 1s 1 normal both,
            blinkTextCursor 500ms steps(44) infinite normal;
        }
        @keyframes typewriter{
            from{width: 0;}
            to{width: 24em;}
        }
        @keyframes blinkTextCursor{
            from{border-right-color: rgba(255,255,255,.75);}
            to{border-right-color: transparent;}
        }

    </style>
@endsection
