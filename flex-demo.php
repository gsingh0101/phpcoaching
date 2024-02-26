<html>

<head>
    <title>Flex Demo</title>

    <style>
        .flex-wrapper-scrolls {
            display: flex;
            justify-content: center;
            align-items:baseline;
            flex-direction: row;
        }

        .flex-wrapper {
            display: flex;
            /* justify-content: center; */
            justify-content: space-between;
            align-items:last baseline;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .boxo {
            width: 200px;
            height: 500px;
            background-color: grey;
            margin: 10px;
        }

        .box {
            width: 200px;
            height: 500px;
            background-color: grey;
            /* flex: 1 1 300px; */
            /* flex: 1 1 300px; */ /* for using space-between */
            margin: 10px;
        }

    </style>

</head>

<body style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">

    <div class="flex-wrapper-scrolls">
        <div class="box">test content
        </div>

        <div class="box">test content 2
        </div>

        <div class="box">test content 3
        </div>

        <div class="box">test content 4
        </div>

        <div class="box">test content 5
        </div>

        <div class="box">test content 6
        </div>

    </div>

    <div class="flex-wrapper">
        <div class="box">gdfgdf
        </div>

        <div class="box">dfgdfgdf
        </div>

        <div class="box">dfgdfgdf
        </div>

    </div>


</body>

</html>