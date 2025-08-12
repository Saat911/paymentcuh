CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100),
    phone_number VARCHAR(20),
    ic_number VARCHAR(20),
    arrival_date DATE,
    departure_date DATE,
    guests INT,
    card_number VARCHAR(20),
    exp_date VARCHAR(10),
    security_code VARCHAR(10),
    total_amount DECIMAL(10,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

<?php
$conn = new mysqli("localhost", "root", "", "hotel");
$result = $conn->query("SELECT * FROM bookings ORDER BY created_at DESC");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['full_name']}</td>
            <td>{$row['phone_number']}</td>
            <td>{$row['ic_number']}</td>
            <td>{$row['arrival_date']}</td>
            <td>{$row['departure_date']}</td>
            <td>{$row['guests']}</td>
            <td>RM {$row['total_amount']}</td>
            <td>{$row['created_at']}</td>
          </tr>";
}
$conn->close();
?>
