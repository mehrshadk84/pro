<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Tuts+ Chat Application" />
    <link rel="stylesheet" href="chatstyle.css" />
</head>

<body>

    <div id="wrapper">
        <div id="menu">
            <p class="welcome">Welcome, <b>{{ Auth::user()->name }}</b></p>
            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="logout">Exit</button>
                </form>
            </div>
        </div>
        <div id="chatbox">
            @php
            if(file_exists("log.html") && filesize("log.html") > 0){
            $contents = file_get_contents("log.html");
            echo $contents;
            }
            @endphp
        </div>
        <form name="message" action="">
            <input name="usermsg" type="text" id="usermsg" />
            <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
        </form>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        // jQuery Document
        $(document).ready(function() {
            $("#submitmsg").click(function() {
                var clientmsg = $("#usermsg").val();
                $.post("post.blade.php", {
                    text: clientmsg
                });
                $("#usermsg").val("");
                return false;
            });

            function loadLog() {
                var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request

                $.ajax({
                    url: "log.html",
                    cache: false,
                    success: function(html) {
                        $("#chatbox").html(html); //Insert chat log into the #chatbox div

                        //Auto-scroll           
                        var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height after the request
                        if (newscrollHeight > oldscrollHeight) {
                            $("#chatbox").animate({
                                scrollTop: newscrollHeight
                            }, 'normal'); //Autoscroll to bottom of div
                        }
                    }
                });
            }
            setInterval(loadLog, 2500);
        });
    </script>
</body>

</html>