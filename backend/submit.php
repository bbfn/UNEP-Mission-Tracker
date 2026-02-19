
<?php
header("Content-Type: application/json");
$conn = new mysqli("localhost", "root", "", "unep_db");

$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $stmt = $conn->prepare("INSERT INTO missions (staff_name, region, focus_area, findings) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $data['name'], $data['region'], $data['focus'], $data['findings']);
    
    if ($stmt->execute()) {
        echo json_encode(["status" => 201, "message" => "Mission report successfully saved."]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => 500, "message" => "Database error."]);
    }
}
?>