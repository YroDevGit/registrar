<div class="right-sidebar">
    <div class="switcher-icon">
        <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

        <p class="mb-0">Gaussion Texture</p>
        <hr>

        <ul class="switcher">
            <li id="theme1" onclick="changeTheme('theme1')"></li>
            <li id="theme2" onclick="changeTheme('theme2')"></li>
            <li id="theme3" onclick="changeTheme('theme3')"></li>
            <li id="theme4" onclick="changeTheme('theme4')"></li>
            <li id="theme5" onclick="changeTheme('theme5')"></li>
            <li id="theme6" onclick="changeTheme('theme6')"></li>
        </ul>

        <p class="mb-0">Gradient Background</p>
        <hr>

        <ul class="switcher">
            <li id="theme7" onclick="changeTheme('theme7')"></li>
            <li id="theme8" onclick="changeTheme('theme8')"></li>
            <li id="theme9" onclick="changeTheme('theme9')"></li>
            <li id="theme10" onclick="changeTheme('theme10')"></li>
            <li id="theme11" onclick="changeTheme('theme11')"></li>
            <li id="theme12" onclick="changeTheme('theme12')"></li>
            <li id="theme13" onclick="changeTheme('theme13')"></li>
            <li id="theme14" onclick="changeTheme('theme14')"></li>
            <li id="theme15" onclick="changeTheme('theme15')"></li>
            <li id="theme16" onclick="changeTheme('theme16')"></li>
        </ul>

    </div>
</div>
</div>



<script>

    
    async function changeTheme($theme) {
        $result = await myget('/Theme/change?theme=' + $theme);  
    }

    window.addEventListener('DOMContentLoaded', async function() {
        $res = await myget('/Theme/get');
        $selected = $res?.backend?.data[0]?.theme ?? 'theme1';
        $themes = document.querySelector(`#${$selected}`);
        setTimeout(() => {
            $themes.click();
        }, 500);
    });
</script>