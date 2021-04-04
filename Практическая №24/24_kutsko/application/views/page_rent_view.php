<style>
    .post{
        border: 1px solid grey;
        border-radius: 5px;
        margin: 0 0 20px 0;
        padding: 5px;
    }
    .main a{
        font-size: 20px;
        margin: 0 10px 0 10px;
    }
    .active{
        font-weight: 1000;
    }
</style>
<div class="main">

    <?php
        for($i = 2; $i < count($data); $i++)
        {
            echo("
                <div class='post'>
                    <div>Name: ".$data[$i][1]."</div>
                    <div>Phone: ".$data[$i][2]."</div>
                    <div>Small description: ".$data[$i][3]."</div>
                    <div>Type: ".$data[$i][4]."</div>
                    <div>Address: ".$data[$i][5]."</div>
                    <div>Cost: ".$data[$i][6]."</div>
                    <div>Email: ".$data[$i][7]."</div>
                    <div>Description: ".$data[$i][8]."</div>
                    <div>Date: ".$data[$i][9]."</div>
                    <a href='/rent/post/".$data[$i][0]."'>Show</a>
                </div>
            ");
        }
        echo '<div class="col-sm-12 pagination">';
        for($i = 1; $i <= $data[0]; $i++)
        {
            if($i == $data[1]) {
                echo "<a href='/rent/page/$i' class='active'>$i</a>";
            }
            else {
                echo "<a href='/rent/page/$i'>$i</a>";
            }
        }
        echo '</div>';
    ?>
    
</div>