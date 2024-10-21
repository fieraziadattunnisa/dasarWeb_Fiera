<!DOCTYPE html> 
<html lang="en">
<head>
    <title>Restaurant Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Indexed Array for menu categories
    $categories = ["Makanan", "Minuman"];

    // Associative Array for each menu item
    $menuItems = [
        "Makanan" => [
            [
                "name" => "Grilled Chicken",
                "description" => "Served with a side of mashed potatoes and steamed vegetables.",
                "price" => "Rp. 89.000"
            ],
            [
                "name" => "Margherita Pizza",
                "description" => "Classic pizza with mozzarella cheese, basil, and tomato sauce.",
                "price" => "Rp. 67.000"
            ],
            [
                "name" => "Pasta Carbonara",
                "description" => "Rich and creamy pasta with pancetta, egg, and parmesan.",
                "price" => "Rp. 49.000"
            ],
            [
                "name" => "Caesar Salad",
                "description" => "Fresh romaine lettuce with croutons, parmesan, and Caesar dressing.",
                "price" => "Rp. 58.000"
            ],
            [
                "name" => "Taglio Pizza",
                "description" => "Pizza baked in a large rectangular tray.",
                "price" => "Rp. 54.000"
            ]
        ],
        "Minuman" => [
            [
                "name" => "Matcha Frape",
                "description" => "Matcha drink topped with whipped cream.",
                "price" => "Rp. 38.000"
            ],
            [
                "name" => "Chocolate Signature",
                "description" => "Rich Chocolate beverage blended with ice.",
                "price" => "Rp. 34.000"
            ],
            [
                "name" => "Caffe Latte",
                "description" => "Creamy espresso with steamed milk.",
                "price" => "Rp. 28.000"
            ],
            [
                "name" => "Americano",
                "description" => "Rich espresso with hot water.",
                "price" => "Rp. 21.000"
            ]
        ]
    ];

    // Variables to store form data
    $name = "";
    $email = "";
    $comment = "";

    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $comment = htmlspecialchars($_POST['comment']);
    }
    ?>

    <!-- Header -->
    <header>
        <div class="container">
            <h1>Delicioso Foody Restaurant</h1>
            <nav>
                <ul>
                    <li><a href="#" onclick="showSection('home')">Home</a></li>
                    <li><a href="#" onclick="showSection('menu')">Menu</a></li>
                    <li><a href="#" onclick="showSection('about')">About</a></li>
                    <li><a href="#" onclick="showSection('contact')">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Home Section -->
        <section id="home" class="section">
            <h2>Welcome to Delicioso Foody Restaurant</h2>
            <p>Since 2002, Delicioso Foody Restaurant has brought Italian cafe culture to Indonesia, offering local cuisine, specialty drinks, 
                and a full range of coffees. Open for breakfast, lunch, and dinner 7 days a week, Delicioso Foody Restaurants iconic menu features 
                our signature grilled chicken, mouth-watering pastas, fresh salads, and classic lunch dishes like margherita pizza. </p>
            <p>Join us for an amazing dining experience!</p>
        </section>

        <!-- Menu Section -->
        <section id="menu" class="section" style="display:none;">
            <h2>Our Menu</h2>
            <?php foreach ($categories as $category): ?>
                <h3><?php echo $category; ?></h3>
                <?php foreach ($menuItems[$category] as $item): ?>
                    <div class="menu-item">
                        <h4><?php echo $item['name']; ?></h4>
                        <p><?php echo $item['description']; ?></p>
                        <span><?php echo $item['price']; ?></span>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </section>

        <!-- About Section -->
        <section id="about" class="section" style="display:none;">
            <h2>About Us</h2>
            <p>Delicioso Foody Restaurant has been serving delicious food to food lovers since 2002. Our mission is to provide high-quality, 
                fresh and of course delicious food, in a comfortable atmosphere. We are committed to providing a satisfying dining experience 
                using quality ingredients and delicious flavors. Our restaurant offers a variety of dishes for various meal times, including 
                breakfast, lunch and dinner, so that every guest can find something special to suit their taste. With an emphasis on quality, 
                freshness and convenience, we strive to create an exciting culinary experience for all our customers.</p>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section" style="display:none;">
            <h2>Contact Us</h2>
            <p>We'd love to hear from you! Whether you have a question about our menu, a reservation inquiry, or anything else, 
                our team is ready to answer all your questions.</p>
            <p>Email: @deliciosofoody.com</p>
            <p>Phone: +62 8123456789</p>
            <p>Address: Jl. Soekarno Hatta, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141</p>

            <!-- Form Komentar -->
            <h3>Leave a Comment</h3>
            <form action="#contact" method="post" class="comment-form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea id="comment" name="comment" rows="4" required placeholder="Write your comment"></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>

            <!-- Display Submitted Comment -->
            <?php if ($name && $email && $comment): ?>
                <div class="submitted-comment">
                    <h4>Thank you for your comment, <?php echo $name; ?>!</h4>
                    <p><strong>Email:</strong> <?php echo $email; ?></p>
                    <p><strong>Comment:</strong> <?php echo $comment; ?></p>
                </div>
            <?php endif; ?>
        </section>

    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Delicioso Foody Restaurant | All Rights Reserved</p>
    </footer>

    <script>
        function showSection(sectionId) {
            // Hide all sections
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.style.display = 'none';
            });
            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';
        }
    </script>
</body>
</html>
