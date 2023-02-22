<!DOCTYPE html>
<html>
<head>
    <title>My Company</title>
</head>
<body>
    <h1>Welcome to My Company</h1>

    <h2>About Us</h2>
    <p><?php echo $company_info[0]->company_about; ?></p>

    <h2>Contact Us</h2>
    <ul>
        <li>Address: <?php echo $company_info[0]->address; ?></li>
        <li>Phone: <?php echo $company_info[0]->phone; ?></li>
        <li>Email: <?php echo $company_info[0]->email; ?></li>
    </ul>

    <h2>Our Services</h2>
    <ul>
    <?php foreach ($company_info as $service): ?>
        <li><?php echo $service->services; ?></li>
    <?php endforeach; ?>
    </ul>

</body>
</html>
