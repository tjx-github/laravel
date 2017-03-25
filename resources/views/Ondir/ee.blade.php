<div style="background: green"><b>
        @section("header")
           header
        @show
        
    </b>

    <font color="yellow">
        @yield("content","默认值")
    </font>
    被继承的页面
    <?php
        echo __FILE__;
    
    ?>
</div>