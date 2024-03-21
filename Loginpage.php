<!DOCTYPE html>
<html>
    <head>
        <Title>Login</Title>
        <link rel="stylesheet" href="login.css">
    </head>
        <body>
            <div class="imggg">
				<h1>&emsp;</h1>
				<h1>&emsp;</h1>
				<h1>&emsp;</h1>
                <h1>&emsp; EDUCATIONAL PERFOMANCE TRACKER</h1>
				<h1>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; by</h1>
				<h1>&emsp; &emsp; &emsp;   AITS TPT SRP BATCH-29 - 2021-22</h1>
            </div>
            <div class="totframe">
                <div class="form">
                    <div class="head">
                            <h3>LOGIN</h3>
                            <p>Enter Your Details to Login to Dashboard</p>
                    </div>
                    <form action="loginwork.php" method="post" class="fill">
                        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
                        <input type="text" placeholder="ID"name="uname"/>
                        <input type="password" placeholder="PASSWORD" name="password"/>
                        <button type="submit">Login</button>
                    </form>
                </div>
            </div>
           <script src="script.js"></script>
       </body>
</html>