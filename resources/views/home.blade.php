@extends("layouts.master")
@section("content")
    <body>
    <div id="typedtext" font-size="30px"></div>
    <script>
        // set up text to print, each item in array is new line
        var aText = new Array(
            "Hello there, Welcome to my first Laravel Project",
            "take a look at the project and feel free to text me from the contact us tab"
        );
        var iSpeed = 100; // time delay of print out
        var iIndex = 0; // start printing array at this posision
        var iArrLength = aText[0].length; // the length of the text array
        var iScrollAt = 20; // start scrolling up at this many lines

        var iTextPos = 0; // initialise text position
        var sContents = ''; // initialise contents variable
        var iRow; // initialise current row

        function typewriter() {
            sContents = ' ';
            iRow = Math.max(0, iIndex - iScrollAt);
            var destination = document.getElementById("typedtext");

            while (iRow < iIndex) {
                sContents += aText[iRow++] + '<br />';
            }
            destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
            if (iTextPos++ == iArrLength) {
                iTextPos = 0;
                iIndex++;
                if (iIndex != aText.length) {
                    iArrLength = aText[iIndex].length;
                    setTimeout("typewriter()", 500);
                }
            } else {
                setTimeout("typewriter()", iSpeed);
            }
        }


        typewriter();
    </script>
    </body>
    <style>

        body {
            text-align: center;
            top: 300px;
            /*width: auto;*/
            /*height: auto;*/
            background: skyblue;
            animation: slide 20s infinite;
            /*font-family: 'Waiting for the Sunrise', cursive;*/
            /*font-size: 30px;*/
            /*margin: 10px 50px;*/
            /*letter-spacing: 6px;*/
            /*font-weight: bold;*/

        }

        @keyframes slide {
            25% {
                background: lightgray;

            }
            50% {
                background: lightpink;

            }
        }

        /* Google Fonts */
        @import url(https://fonts.googleapis.com/css?family=Anonymous+Pro);
        @import url(https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise);
        /* Global */

        .line-1 {
            position: relative;
            top: 200px;
            width: 24em;
            margin: 0 auto;
            border-right: 2px solid rgba(255, 255, 255, .75);
            font-size: 180%;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            transform: translateY(-50%);
        }

        /* Animation */
        .anim-typewriter {
            animation: typewriter 4s steps(44) 1s 1 normal both,
            blinkTextCursor 500ms steps(44) infinite normal;
        }

        @keyframes typewriter {
            from {
                width: 0;
            }
            to {
                width: 24em;
            }
        }

        @keyframes blinkTextCursor {
            from {
                border-right-color: rgba(255, 255, 255, .75);
            }
            to {
                border-right-color: transparent;
            }
        }

    </style>

@endsection
