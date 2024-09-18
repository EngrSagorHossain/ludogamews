<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LudoJS Tutorial</title>
    <link rel="stylesheet" href="/js/ludo/style.css">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <div class="ludo-container">
        <div class="ludo">
            <div class="player-pieces">
                <div class="player-piece" player-id="P1" piece="0"></div>
                <div class="player-piece" player-id="P1" piece="1"></div>
                <div class="player-piece" player-id="P1" piece="2"></div>
                <div class="player-piece" player-id="P1" piece="3"></div>

                <div class="player-piece" player-id="P2" piece="0"></div>
                <div class="player-piece" player-id="P2" piece="1"></div>
                <div class="player-piece" player-id="P2" piece="2"></div>
                <div class="player-piece" player-id="P2" piece="3"></div>
            </div>

            <div class="player-bases">
                <div class="player-base" player-id="P1"></div>
                <div class="player-base" player-id="P2"></div>
            </div>
        </div>
        <div class="footer">
            <div class="row">
                <button id="dice-btn" class="btn btn-dice">Roll</button>
                <div class="dice-value"></div>
                <button id="reset-btn" class="btn btn-reset">Reset</button>
            </div>
            <h2 class="active-player">Active Player: <span></span> </h2>
        </div>
    </div>






    <script src="/js/main.js" type="module"></script>
    <!-- Initialize Echo channel -->
    <script type="module">
        var channel = Echo.channel('ludo');
        channel.listen('Ludogame', function(data) {
            console.log(data);

        });
    </script>

</body>

</html>
