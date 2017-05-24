<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">山东微山湖运河湖产品有限公司</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="hover-effect" id="res_index"><a href="index.html">主页</a></li>
            <li class="hover-effect" id="res_team"><a href="team.html" class="scroll">团队</a></li>
            <li class="hover-effect" id="res_features"><a href="features.html" class="scroll">品质</a></li>
            <li class="hover-effect" id="res_features"><a href="honor.html" class="scroll">荣耀</a></li>
            <li class="hover-effect" id="res_specials"><a href="specials.html" class="scroll">健康生活</a></li>
            <li class="hover-effect" id="res_about"><a href="about.html" class="scroll">关于我们</a></li>
        </ul>
    </div>
</div>
<script type="application/javascript">
    var currentFeild ="<?php echo $_GET['name']?>";
    $("#res_"+currentFeild).addClass("active");
</script>