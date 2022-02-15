<?php
/* 
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/
$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos incidunt sunt commodi inventore distinctio laboriosam dolore autem, porro, quisquam enim laudantium voluptatum repellat qui facilis, aut voluptatibus vero voluptates ratione.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam facere provident sit suscipit? Nostrum, placeat quas voluptate quidem recusandae sint reiciendis blanditiis illum maxime dolore consectetur provident corporis perspiciatis culpa!";

$sottoParagrafi  =  explode('.',$paragrafo);

for($i = 0; $i< count($sottoParagrafi); $i++){
    echo "<br>$sottoParagrafi[$i]<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 4</title>
</head>
<body>
    
</body>
</html>