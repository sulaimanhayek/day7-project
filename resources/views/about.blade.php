@extends("layouts.master")
@section("content")
    <body>
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>

    <div class="container">
        <div class="box">
            <h1>Sulaiman Abdulkareem </h1>
            <h5> Junior Android Developer - Web Designer</h5>
            <p>Hello, I'm Sulaiman. I graduated from Electronics Engineering College couples months ago. I'm a full time Android developer. I'm in the process of learning web devdelopment, that is I made alot of trials like creating profile websites using html and css</p>
            <ul>
                <li><a href="https://github.com/suleiman94"><i class="fa fa-github-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/in/sulaimankareem94/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.facebook.com/suleiman.kareem.7"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/suleiman_hayek"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/in/sulaimankareem94/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
            </ul>
        </div>

    </div>
    </body>
    <style>
        .box{
            width: 450px;
            background: rgba(0, 0, 0, 0.4);
            padding: 40px;
            text-align: center;
            margin: auto;
            margin-top: 5%;
            margin-bottom: 5%;
            color: white;
            font-family: 'Century Gothic',sans-serif;
        }
        .box-img {
            border-radius: 50%;
        }


        .box h1{
            font-size: 40px;
            letter-spacing: 8px;
            font-weight: 100;
        }
        .box h5{
            font-size: 20px;
            letter-spacing: 4px;
            font-weight: 100;
        }
        .box p{
            text-align: justify;
        }

        ul{
            margin: 0;
            padding: 0;
        }

        .box li{
            display: inline-block;
            margin: 6px;
            list-style: none;
        }

        .box li a{
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            color: white;
            text-decoration: none;
            font-size: 60px;
            /* transition: all ease-in-out 250ms; */
        }

        .box li a:hover{
            /*color: #b9b9b9;*/
            color: #c8c8c8;
        }
        body {

            /*width: auto;*/
            /*height: auto;*/
            background: skyblue;
            animation: slide 20s infinite;

        }

        @keyframes slide {
            25% {
                background: darkslategrey;

            }
            50% {
                background: darkgrey;

            }
        }

        /* Google Fonts */
        @import url(https://fonts.googleapis.com/css?family=Anonymous+Pro);

        /* Global */

        .line-1{
            position: relative;
            top: 200px;
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
