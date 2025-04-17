<!-- session_read -->
<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "!<br>";
    echo "<a href='session_destroy.php'>Logout</a>";
} else {
    echo "No session found. Please <a href='session_start.php'>login</a> first.";
}
?>
<!-- session_destroy -->
<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

echo "You have been logged out.<br>";
echo "<a href='session_start.php'>Login again</a>";
?>
