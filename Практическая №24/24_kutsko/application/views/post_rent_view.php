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
        echo("
            <div class='post'>
                <div>Name: ".$data[1]."</div>
                <div>Phone: ".$data[2]."</div>
                <div>Small description: ".$data[3]."</div>
                <div>Type: ".$data[4]."</div>
                <div>Address: ".$data[5]."</div>
                <div>Cost: ".$data[6]."</div>
                <div>Email: ".$data[7]."</div>
                <div>Description: ".$data[8]."</div>
                <div>Date: ".$data[9]."</div>
            </div>
        ");
    ?>
    
</div>