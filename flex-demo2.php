<html>

<head>
    <title>Flex Demo</title>

    <style>
        .flex-wrapper {
            display: flex;
            /* justify-content: center; */
            justify-content: space-between;
            align-items:end;
            flex-direction: row;
            flex-wrap: wrap;
            height: 500px;
            border: 4px solid blue;

        }

        .boxo {
            width: 200px;
            height: 100px;
            background-color: grey;
            margin: 10px;
        }

        .box {
            width: 200px;
            height: 100px;
            background-color: grey;
            /* flex: 1 1 300px; */
            /* flex: 1 1 300px; */ /* for using space-between */
            margin: 10px;
        }

    </style>

</head>

<body style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">

    <div class="flex-wrapper">
        <div class="box">test content more text
        </div>

        <div class="box">test 2
        </div>

        <div class="box">test content 3
        </div>

        <div class="box">test content 4
        </div>

        <div class="box">test content 5 more
        </div>

        <div class="box">test content 6
        </div>

    </div>

</body>

</html>