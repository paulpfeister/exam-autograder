<header>
    <div><h1><a href="">bitlab</a></h1></div>
    <div id="login-toolbar">
        <form action="/profile/logout.php">
            <button type="submit"><span style="padding-right: 0.5em;"><?php echo($_SESSION['first_name'] . " " . $_SESSION['last_name']);?></span><span class="material-icons-sharp">logout</span></button>
        </form>
    </div>
</header>
<div class="page-wrapper"> <!-- closed in footer -->