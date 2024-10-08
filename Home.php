<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

$userFirstName = isset($_SESSION['first_name']) ? $_SESSION['first_name'] : '';
$userLastName = isset($_SESSION['last_name']) ? $_SESSION['last_name'] : '';

include "../db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MDJ</title>
        <link rel="stylesheet" href="../styles/styles.css">
    </head>
    <body>
        <header>
            <div class="header-container">
                <div class="header-left">
                    <h1 class="logo" id="logo">gomeMDJ</h1>
                    <nav class="nav-links">
                        <a href="Home.php">Home</a>
                        <a href="Account.php">Account</a>
                        <a href="../about.php">About</a>
                        <a href="../store.php">Store</a>
                        <a href="../Ticketing-System/support.php">Support</a>
                        <a href="../logout.php">Logout</a>
                    </nav>
                </div>
                <div class="header-right">
                    <span class="user-name" id="user-name">
                        <?php echo htmlspecialchars($userFirstName . ' ' . $userLastName); ?>
                    </span>
                    <div class="profile-icon" id="profile-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="white">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-3.31 0-10 1.67-10 5v2h20v-2c0-3.33-6.69-5-10-5z"/>
                        </svg>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu">
                        <a href="../logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </header>
        <aside class="side-nav" id="side-nav">
            <!-- Profile Icon at the Top -->
            <div class="profile-container">
                <div class="profile-icon" id="sidebar-profile-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="white">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-3.31 0-10 1.67-10 5v2h20v-2c0-3.33-6.69-5-10-5z"/>
                    </svg>
                </div>
                <span class="user-name" id="user-name">
                    <?php echo htmlspecialchars($userFirstName . ' ' . $userLastName); ?>
                </span>
            </div>
            <a href="Home.php">Home</a>
            <a href="Account.php">Account</a>
            <a href="../about.php">About</a>
            <a href="../store.php">Store</a>
            <a href="../Ticketing-System/support.php">Support</a>
            <a href="../logout.php">Logout</a>
        </aside>
        <div id="overlay"></div>

        <!-- Main Content Section -->
        <main>
            <section class="hero">
                <h2>Welcome to Our Website!</h2>
                <p>Explore amazing products and services. Our store offers the best deals, and our support team is always here to help you.</p>
                <button class="learn-more-btn">Learn More</button>
            </section>

            <section class="features">
                <div class="feature-item">
                    <h3>Feature One</h3>
                    <p>This feature offers you amazing benefits and top-notch services.</p>
                </div>
                <div class="feature-item">
                    <h3>Feature Two</h3>
                    <p>Our second feature provides excellent support and solutions to your problems.</p>
                </div>
                <div class="feature-item">
                    <h3>Feature Three</h3>
                    <p>Feature three is designed for convenience, making everything easy and accessible.</p>
                </div>
            </section>
        </main>
        <!-- Chat Button -->
        <div class="chat-icon" id="chat-button">
            <svg fill="#000000" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 12v4l-5-4H0V0h16v12zm-2-2V2H2v8h12zm-2.5 0l2.5 2v-2h-2.5zM4 4h8v2H4V4z" fill-rule="evenodd"></path>
            </svg>
        </div>
        <!-- chat box -->
        <div class="chat-box" id="chat-box">
            <div class="chat-header">
                Chat
                <button class="chat-close" id="close-chat">✖</button>
            </div>
            <div class="chat-content">
                <p>Welcome to the chat!</p>
                <!-- You can add more chat functionality here -->
            </div>
            <div class="chat-input-container">
                <input type="text" class="chat-input" placeholder="Type a message...">
                <button class="send-button">Send</button>
            </div>
        </div>

        <!-- Footer Section -->
        <footer>
            <div class="footer-container">
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <a href="support.php">FAQs</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Contact</a>
                </div>
                <div class="footer-section">
                    <h4>Follow Us</h4>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p>Email: contact@example.com</p>
                    <p>Phone: +123 456 7890</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Your Company. All rights reserved.</p>
                <a href="#" class="back-to-top">Back to Top</a>
            </div>
        </footer>

        <script src="../js/script.js"></script>
        <script>
            
            // Home script
            document.addEventListener('DOMContentLoaded', function() {
                const userNameElement = document.getElementById('user-name');
                const profileIconElement = document.getElementById('profile-icon');
                const dropdownMenuElement = document.getElementById('dropdown-menu');

                // Function to toggle dropdown visibility
                function toggleDropdown() {
                    console.log('Toggle dropdown triggered'); // Debug log
                    if (window.innerWidth > 768) {
                        if (dropdownMenuElement.classList.contains('open')) {
                            dropdownMenuElement.classList.remove('open');
                            setTimeout(() => {
                                dropdownMenuElement.style.display = 'none'; // Hide after animation
                            }, 300);
                        } else {
                            dropdownMenuElement.style.display = 'block'; // Show immediately
                            setTimeout(() => {
                                dropdownMenuElement.classList.add('open');
                            }, 10);
                        }
                    }
                }

                // Click events for both the username and profile icon
                userNameElement.addEventListener('click', toggleDropdown);
                profileIconElement.addEventListener('click', toggleDropdown);

                // Close dropdown if clicking outside of it
                document.addEventListener('click', function(event) {
                    if (!dropdownMenuElement.contains(event.target) && !userNameElement.contains(event.target) && !profileIconElement.contains(event.target)) {
                        dropdownMenuElement.classList.remove('open');
                        setTimeout(() => {
                            dropdownMenuElement.style.display = 'none';
                        }, 300);
                    }
                });
            });
        </script>
    </body>
</html>
<style>
    