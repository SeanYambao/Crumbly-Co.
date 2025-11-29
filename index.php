<?php include 'includes/header.php'; ?>

<?php
$shop = 'Crumbly Co.';
$name = 'Sean Yambao';
$desc = 'Fresh homemade cookies';

// cookies
$cookies = array(
    array('Chocolate Chip', 120, 45),
    array('Oreo', 140, 30),
    array('Matcha', 160, 25),
    array('Peanut Butter', 130, 40),
    array('Sugar', 100, 60),
    array('Red Velvet', 150, 35)
);

// special
$box = 250;
$off = 50;
$now = $box - $off;

// count
$types = count($cookies);
$total = 0;

// total cookies
for ($i = 0; $i < $types; $i++) {
    $total += $cookies[$i][2];
}
?>

    <div class="header">
        <h1><?php echo $shop; ?></h1>
        <p><?php echo $desc; ?></p>
    </div>

    <div class="container">
        <div class="welcome">
            <h2>Welcome</h2>
            <p>Hi! I'm <?php echo $name; ?>. We bake fresh cookies every day.</p>
        </div>

        <div class="special">
            <h2>Special</h2>
            <p>Cookie Box (6 types)</p>
            <div class="price">
                <span class="old">₱<?php echo $box; ?></span>
                <span class="new">₱<?php echo $now; ?></span>
            </div>
            <p>Save ₱<?php echo $off; ?></p>
        </div>

        <div class="cookies">
            <h2>Our Cookies</h2>
            <table class="cookie-table">
                <tr>
                    <th>Cookie</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
                <?php for ($i = 0; $i < $types; $i++) { ?>
                <tr>
                    <td><?php echo $cookies[$i][0]; ?></td>
                    <td>₱<?php echo $cookies[$i][1]; ?></td>
                    <td><?php echo $cookies[$i][2]; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>

        <div class="numbers">
            <div class="num-box">
                <h3><?php echo $types; ?></h3>
                <p>Types</p>
            </div>
            <div class="num-box">
                <h3><?php echo $total; ?></h3>
                <p>Total</p>
            </div>
        </div>

        <div class="about">
            <h2>About</h2>
            <p>We make good cookies with fresh ingredients.</p>
            <p>Come try our cookies!</p>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>