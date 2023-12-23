<html>
    
<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    </p>

    <table>
        <tbody>
            <tr>
                <div>
                <?php for($i=1 ; $i<=24 ; $i++){ ?>
                    <?php $sum = $multi_x * $i ; 
                    $output = $multi_x . " x " . $i ." = " . $sum ;
                    print $output ; 
                    echo "<br/>" ; ?>
                <?php } ?>
                </div>
            </tr>
        </tbody>
    </table>

    <style>
        table {
            width: 130px;
            height: 225px;
            
        }div {
            width: 130px;
            height: 225px;
            border: 1px solid black;
            overflow: scroll;
            background-color: #F6C8B6;
            margin: auto;
            padding: 10px
        }h1 {
            font-family: 'Itim', 'cursive';
            font-family: 'Kanit', sans-serif;
            text-align: center;
            font-size: 32px;
            color:#212121;
        }body{
            background-color: #C5D6BA;
            padding: 50px
        }
    </style>
</body>

</html>