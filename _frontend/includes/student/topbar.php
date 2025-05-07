<div class="topbar">
    <div class="logo">
    📘 <span>Student page</span>
    </div>
    <div class="account" onclick="toggleDropdown()">
    <img src="<?=$_SESSION['img'] ?? 'nan'?>" alt="User">
    <span class="account-name"><?=$_SESSION['fullname']?> ▾</span>
    <div class="dropdown" id="dropdownMenu">
        <a href="#">Account Management</a>
        <a href="<?=page("login")?>">Logout</a>
    </div>
    </div>
</div>