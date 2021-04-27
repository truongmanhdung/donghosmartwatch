<style>
    .phantrang{
        margin: 10px auto;
        padding: 0px;
    }
    .phantrang ul{
        display: block;
        margin: 0;
        padding-left: 5px;
        margin: 0 auto;
    }
    .phantrang ul li{
        display: inline-block;
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        border: 1px solid black;
        margin: 0 5px;
    }
    .phantrang li:hover{
        background-color: yellow;
        transition: background-color 0.5s linear;
        cursor: pointer;
    }
    .phantrang li a{
        width: 100%;
        display: block;
        height: 40px;
        font-weight: bold;
    }
    .indam{
        background-color: yellow;
        display: inline-block;
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        border: 1px solid black;
        margin: 0 5px;
    }
</style>


<div class="phantrang">
    <ul>
        <?php
            if($current_page>3){
                $first_page = 1;
                echo '<li><a href="?per_page='.$item_per_page.'&page='.$first_page.'">First</a></li>';
            }
            if($current_page>1){
                $prev_page = $current_page-1;
                echo '<li><a href="?per_page='.$item_per_page.'&page='.$prev_page.'">prev</a></li>';
            }
            for ($num=1; $num < $total_page; $num++) {
                if($num!=$current_page){
                    if($num>$current_page-3 && $num<$current_page+3){
                        echo '<li><a href="?per_page='.$item_per_page.'&page='.$num.'">'.$num.'</a></li>';
                    }
                    
                }else{
                    echo '<strong class = "indam">'.$num.'</strong>';
                }
               
            }
            if($current_page<$total_page){
                $next_page = $current_page+1;
                echo '<li><a href="?per_page='.$item_per_page.'&page='.$next_page.'">next</a></li>';
            }
            if($current_page < $total_page-3){
                $end_page = $total_page;
                echo '<li><a href="?per_page='.$item_per_page.'&page='.$end_page.'">Last</a></li>';
            }
        ?>
    </ul>
</div>