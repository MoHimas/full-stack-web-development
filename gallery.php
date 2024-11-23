<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Malcolm Lismore Photography</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Malcolm Lismore Photography</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="prices.html">Pricing</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="enquire.html">Enquiry</a></li>
            </ul>
        </nav>
    </header>
    <div class="container gallery-section">
        <h1 class="text-center">Gallery</h1>
        <div id="gallery" class="gallery-grid">
            <?php include 'includes/load_images.php'; ?>
        </div>
        <div class="pagination">
            <button id="prevBtn" onclick="prevPage()">Previous</button>
            <button id="nextBtn" onclick="nextPage()">Next</button>
        </div>

        <!-- Image Upload Form -->
        <h2>Upload New Image</h2>
        <form action="upload_image.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/*" required>
            <button type="submit">Upload</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Malcolm Lismore Photography</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>

