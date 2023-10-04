<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            margin-top: 60px;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <h1>Isaiah John Austria</h1>
        
            <nav class="navbar-links">
                <ul class="link-group">
                    <li class="link active"><a href="index.php">home</a></li>
                    <li class="link"><a href="me.php">about</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>

   <section class="projects">
    <div class="project">
        <h1>THESIS PROJECT</h1>
        <?php
        $projects = [
            ['', '<div style="font-size: 1.5em;">Our thesis project, titled "Student Account Monitoring and Payment Management System for Gentle Shepherd Montessori Inc.", aims to provide students with easy access to their accounts, allowing them to view balances and make payments. Furthermore, it streamlines payment management for teachers and facilitates the addition of new students.</div>', 'videos/gsmiinfo_promotionalvideo.mp4'],
        ];

        foreach ($projects as $project) {
            echo '<h2>'.$project[0].'</h2>';
            echo '<video controls>';
            echo '<source src="'.$project[2].'" type="video/mp4">';
            echo 'Your browser does not support the video tag.';
            echo '</video>';
            echo $project[1]; // Remove the <p> tag, since you're already using a <div> inside $project[1]
        }
        ?>
    </div>
</section>
<footer>
    <p>&copy; 2023 Isaiah John Austria | <i class="fas fa-phone"></i> 09659405896</p>
</footer>

</body>
</html>
