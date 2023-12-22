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
            width: 150px;
            height: 265px;
        }div {
            width: 150px;
            height: 225px;
            border: 1px solid black;
            overflow: auto;
        }h1 {
          font-family: 'cursive';
        }
    </style>
</body>

</html>